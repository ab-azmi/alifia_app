<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Psikolog extends Component
{
    use WithPagination;

    #[Url()]
    public $perPage = 10;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $userRole = '';

    #[Url(history: true)]
    public $sortBy = 'created_at';

    #[Url(history: true)]
    public $sortDirection = 'desc';

    public $selectedUser = null;

    public $freeUsersAccount = [];

    public $form = [
        'account_id' => '',
        'name' => '',
        'degree' => '',
        'session' => '',
        'experience' => '',
        'status' => false,
        'photo' => '',
        'location' => '',
    ];

    public function render()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'psikolog');
        })
            ->with('dataPsikolog')
            ->search($this->search)
            ->when($this->userRole, function ($query) {
                return $query->role($this->userRole);
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.admin.psikolog', [

            'users' => $users,
        ])->layout('layouts.app');
    }

    public function deleteUser()
    {
        User::find($this->selectedUser)->delete();
    }

    public function setSortBy($column)
    {
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->sortBy = $column;
    }

    public function editUser($id = null)
    {
        if ($id) {
            $user = User::with('dataPsikolog')->find($id);
            $this->form = [
                'name' => $user->dataPsikolog->name,
                'degree' => $user->dataPsikolog->degree,
                'session' => $user->dataPsikolog->session,
                'experience' => $user->dataPsikolog->experience,
                'status' => $user->dataPsikolog->status === 1 ? true : false,
                'photo' => $user->dataPsikolog->photo,
                'location' =>  $user->dataPsikolog->location,
            ];
            $this->selectedUser = $id;
        } else {
            // get free user account that doesn't have role psikolog or client
            $this->freeUsersAccount = User::whereDoesntHave('roles', function ($query) {
                $query->where('name', 'psikolog')->orWhere('name', 'client');
            })->get()->toArray();

            $this->resetForm();
        }
    }

    public function updateUser()
    {
        $this->validate([
            'form.name' => 'required|min:3|max:100',
            'form.degree' => 'required|min:2|max:100',
            'form.session' => 'required',
            'form.experience' => 'required',
            'form.status' => 'required',
            'form.photo' => 'required',
            'form.location' => 'required',
        ]);

        $user = User::find($this->selectedUser);
        
        $user->dataPsikolog->update($this->form);
        $this->resetForm();
        
    }

    public function createUser()
    {
        $this->validate([
            'form.account_id' => 'required|exists:users,id',
            'form.name' => 'required|min:3|max:100',
            'form.degree' => 'required|min:2|max:100',
            'form.session' => 'required',
            'form.experience' => 'required',
            'form.status' => 'required',
            'form.location' => 'required',
        ]);
        
        $user = User::find($this->form['account_id']);

        $user->assignRole('psikolog');

        //remove account_id from form
        unset($this->form['account_id']);

        $user->dataPsikolog()->create($this->form);

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->form = [
            'account_id' => '',
            'name' => '',
            'degree' => '',
            'session' => '',
            'experience' => '',
            'status' => false,
            'photo' => '',
            'location' => '',
        ];
        $this->selectedUser = null;
    }
}

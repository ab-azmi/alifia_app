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
    
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
        'role' => '',
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
        User::find($this->selected_user)->delete();
    }

    public function setSortBy($column){
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->sortBy = $column;
    }

    public function editUser($id)
    {
        $user = User::find($id);
        $this->form = [
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->roles->first() ? json_encode($user->roles->first()) : '',
        ];
        $this->selectedUser = $id;
    }

    public function updateUser()
    {
        // dd($this->form['role']['name']);
        $this->validate([
            'form.name' => 'required|max:255',
            'form.email' => 'required|email',
        ]);

        $user = User::find($this->selectedUser);
        $user->update($this->form);

        //detach all role 
        $user->roles()->detach();

        $user->assignRole($this->form['role']['name']);

        $this->selectedUser = null;
    }
}

<?php

namespace App\Livewire\Admin;

use App\Models\Konseling as ModelsKonseling;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Konseling extends Component
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

    public $selectedKonseling = null;
    public $descriptionType = '';

    public $form = [
        'psikolog_id' => '',
        'client_id' => '',
        'phone' => '',
        'gender' => '',
        'address' => '',
        'category' => false,
        'date' => '',
        'time' => '',
        'berlangsung' => '',
        'description' => '',
        'note' => '',
    ];

    public function render()
    {
        
        $konselings = ModelsKonseling::with(['psikolog', 'client'])
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);
        
        return view('livewire.admin.konseling', [
            'konselings' => $konselings,
        ])->layout('layouts.app');
    }

    public function deleteKonseling()
    {
        if ($this->selectedKonseling) {
            $konseling = ModelsKonseling::find($this->selectedKonseling);
            $konseling->delete();
        }
    }

    public function setSortBy($column)
    {
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->sortBy = $column;
    }

    public function editUser($id = null)
    {
     
    }

    public function updateUser()
    {
        $this->resetForm();
        
    }

    public function createUser()
    {

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->selectedKonseling = null;
    }

    public function selectKonseling($konseling, $column)
    {
        $konseling = ModelsKonseling::find($konseling);
        $this->descriptionType = $column;
        $this->form[$column] = $konseling->$column;
        // dd($this->selectedKonseling);
    }
}

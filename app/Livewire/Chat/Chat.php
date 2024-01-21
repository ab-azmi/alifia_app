<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use Livewire\Component;

class Chat extends Component
{
    public $query;
    public $selected_conversation;

    public function mount()
    {
        $this->selected_conversation = Conversation::findOrFail($this->query);
    }

    public function render()
    {
        return view('livewire.chat.chat');
    }
    
}

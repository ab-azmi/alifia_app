<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use Livewire\Attributes\On;

class ChatList extends Component
{
    public $selected_conversation;
    public $query;

    public function render()
    {
        return view('livewire.chat.chat-list', [
            'conversations' => auth()->user()->conversations()->latest('updated_at')->get(),
        ]);
    }

    #[On('refresh')]
    public function refresh()
    {
        $this->render();
    }
}
<?php

namespace App\Livewire\Chat;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ChatBox extends Component
{
    public $selected_conversation;

    #[Validate('required|string')]
    public $body;

    public $loaded_messages;

    public function mount(){
        $this->loadMessages();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }

    public function sendMessage(){
        $this->validate();
        $created_message = $this->selected_conversation->messages()->create([
            'sender_id' => auth()->id(),
            'body' => $this->body,
            'receiver_id' => $this->selected_conversation->getReceiver()->id,
        ]);

        $this->reset('body');

        #scroll to bittim
        $this->dispatch('scroll-bottom');

        #push new message
        $this->loaded_messages->push($created_message);
    }

    public function loadMessages(){
        $this->loaded_messages = $this->selected_conversation->messages()->latest()->take(10)->get()->reverse();
    }
}

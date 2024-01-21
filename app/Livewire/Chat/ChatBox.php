<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class ChatBox extends Component
{
    public $selected_conversation;

    #[Validate('required|string')]
    public $body;

    public $loaded_messages;

    public $paginate = 10;

    public function mount(){
        $this->loadMessages();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }

    #[On('load-more')]
    public function loadMore(){
        $this->paginate += 10;
        $this->loadMessages();

        #update height
        $this->dispatch('update-chat-height');
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

        $this->selected_conversation->updated_at = now();
        $this->selected_conversation->save();

        $this->dispatch('refresh');
    }

    public function loadMessages(){
        $userId = auth()->id();

        #get count
        $count = Message::where('conversation_id', $this->selected_conversation->id)
            ->where(function ($query) use ($userId) {

                $query->where('sender_id', $userId)
                    ->whereNull('sender_deleted_at');
            })->orWhere(function ($query) use ($userId) {

                $query->where('receiver_id', $userId)
                    ->whereNull('receiver_deleted_at');
            })
            ->count();
        
        #skip and query
        $this->loaded_messages = Message::where('conversation_id', $this->selected_conversation->id)
            ->where(function ($query) use ($userId) {

                $query->where('sender_id', $userId)
                    ->whereNull('sender_deleted_at');
            })->orWhere(function ($query) use ($userId) {

                $query->where('receiver_id', $userId)
                    ->whereNull('receiver_deleted_at');
            })
            ->skip($count - $this->paginate)
            ->take($this->paginate)
            ->get();
    }
}

<?php

namespace App\Livewire\Landing;

use App\Livewire\Users;
use Livewire\Component;
use App\Models\Conversation;

class Riwayat extends Component
{
    public $konseling = [];

    public function render()
    {
        return view('livewire.landing.riwayat');
    }

    public function mount()
    {
        $this->getKonselingOnline();
    }

    public function goToMessage($user_id)
    {
        $authenticated_user_id = auth()->id();

        // check conversation exists

        $existing_conversation = Conversation::where(function ($query) use ($authenticated_user_id, $user_id) {
            $query->where('sender_id', $authenticated_user_id)
                ->where('receiver_id', $user_id);
        })->orWhere(function ($query) use ($authenticated_user_id, $user_id) {
            $query->where('sender_id', $user_id)
                ->where('receiver_id', $authenticated_user_id);
        })->first();

        if ($existing_conversation) {
            return redirect()->route('chat', ['query' => $existing_conversation->id]);
        }

        //create new conversation
        $created_conversation = Conversation::create([
            'sender_id' => $authenticated_user_id,
            'receiver_id' => $user_id
        ]);

        return redirect()->route('chat', ['query' => $created_conversation->id]);
    }

    public function getKonselingOnline()
{
        //check if user is authenticated
        if (auth()->check()) {
            $this->konseling = [];

            if(auth()->user()->hasRole('psikolog')){
                $this->konseling = auth()->user()->konselingAsPsikolog()
                ->with('client')->where('category', 1)->get();
            }
            else{
                $this->konseling = auth()->user()->konselingAsClient()
                ->with('psikolog.dataPsikolog')->where('category', 1)->get();
            }
        }
    }

    public function getKonselingOffline()
    {
        
        //check if user is authenticated
        if (auth()->check()) {
            $this->konseling = [];
            if(auth()->user()->hasRole('psikolog')){
                $this->konseling = auth()->user()->konselingAsPsikolog()
                ->with('client')->where('category', 2)->get();
            }
            else{
                $this->konseling = auth()->user()->konselingAsClient()
                ->with('psikolog.dataPsikolog')->where('category', 2)->get();
            }
        }
    }
}

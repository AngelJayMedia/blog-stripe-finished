<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Social extends Component
{
    public User $user;
    public $profile = [];

    public function mount()
    {
        $this->user = Auth::user();
        $this->profile = Auth::user()->profile->toArray();
    }

    public function updateSocialProfileLinks()
    {
        $this->user->profile()->update([
            'facebook'      => $this->profile['facebook'],
            'twitter'       => $this->profile['twitter'],
            'instagram'     => $this->profile['instagram'],
            'linkedin'      => $this->profile['linkedin'],
        ]);

        $this->emit('updated');
    }


    public function render()
    {
        return view('livewire.profile.social');
    }
}

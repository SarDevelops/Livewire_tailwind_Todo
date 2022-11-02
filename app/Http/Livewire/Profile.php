<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $profile,$user,$name,$email;


    public function save()
    {
        $this->validate([
            'name' => 'required',
            'profile' => 'image|max:1024', // 1MB Max
        ]);

        $this->user->update([
            'name' => $this->name,
            'profile' => $this->profile,
        ]);
    }

    public function mount(){
        $this->user = \Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->profile = $this->user->profile;
    }

    public function render()
    {
        return view('livewire.profile');
    }






}

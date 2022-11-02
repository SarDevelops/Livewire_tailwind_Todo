<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Todo;
class ImportantTask extends Component
{

    public $user,$todos,$isimportant;
    public function mount(User $user)
    {
        $this->todos = Todo::where('isimportant',1)->where('isactive',1)->get();
    }

    public function render()
    {
        return view('livewire.important-task');
    }
}

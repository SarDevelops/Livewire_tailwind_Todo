<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
//     public function mount(){
//         $this->myTodo();
//         $this->important();
//     }
    public function render()
    {
        return view('livewire.navbar'); 
    }

    public function myTodo()
    {
        redirect()->route('todos');
    }
    public function important()
    {
        redirect()->route('important');
    }
}

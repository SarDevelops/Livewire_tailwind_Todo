<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class ShowAllTodo extends Component
{
    public $todos;
    public function mount()
    {
        $this->todos = Todo::all();
    }
    public function render()
    {
        return view('livewire.show-all-todo');
    }
}

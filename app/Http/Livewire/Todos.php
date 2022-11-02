<?php

namespace App\Http\Livewire;
use App\Models\Todo;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
// use App\Http\Livewire\Auth;

class Todos extends Component
{
    public $user,$today,$title,$description,$todos,$isactive,$isimportant,$todo_id;
    // public $isModalOpen = 0;
    public function mount(User $user ,Todo $todo)
    {
        $this->today = Carbon::now()->format('D d F');
        $this->user = \Auth::user();

     }

    public function render()
    {
        if ($this->isactive) {
            Todo::where('id',$this->isactive)->update([
                'isactive' => 0
            ]);
            $this->isactive = "";
        }
        $this->todos = Todo::where('isactive',1)->orderBy('id', 'DESC')->get();
        return view('livewire.todos');
    }

    // public function current_day()
    // {
    //     $today = Carbon\Carbon::now();
    //     $today = $today->toDateTimeString();
    // }

    public function create()
    {

        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    private function resetCreateForm(){
        $this->title = '';
        $this->description = '';
        $this->isactive = '';
        $this->isimportant = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Todo::updateOrCreate([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $this->user->id,

        ]);
        session()->flash('message', $this->user->id ? 'todo updated.' : 'todo created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {

        $todo = Todo::findOrFail($id);
        $this->user_id = $todo->user_id;
        $this->title = $todo->title;
        $this->description = $todo->description;

    }

    public function delete($id)
    {
        Todo::find($id)->delete();
        session()->flash('message', 'Todo deleted.');
    }

    public function isimportant($id)
    {
        $important = Todo::where('id',$id)->first();
        if ($important->isimportant == 1) {

            Todo::where('id',$id)->update([
                'isimportant' => 0
            ]);
            session()->flash('message', 'Todo imp remove.');
        } else {
            Todo::where('id',$id)->update([
                'isimportant' => 1
            ]);
            session()->flash('message', 'Todo imp add.');
        }

    }}

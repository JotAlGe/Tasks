<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public $showPartial = false;
    public $task, $priorities, $categories;

    // rules validations
    protected $rules = [
        'task' => ['required', 'min:5', 'max:255']
    ];

    // error messages
    protected $messages = [
        'task.required' => 'No dejes el campo vacío',
        'task.min' => 'La tarea debe contener, al menos 5 caracteres',
        'task.max' => 'La tarea debe contener, menos de 255 caracteres'
    ];

    public function mount()
    {
        $this->priorities = Priority::all();
        $this->categories = Category::all();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function save()
    {
        $this->validate();
        session()->flash('success', 'Todo ok!');
    }

    public function render()
    {
        return view('livewire.tasks.task', [
            'tasks' => ModelsTask::all()
        ]);
    }
}

<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public $showPartial = false;
    public $task, $priorities, $categories, $category_id, $priority_id;

    // rules validations
    protected $rules = [
        'task' => ['required', 'min:5', 'max:255'],
        'category_id' => 'numeric',
        'priority_id' => 'numeric'
    ];

    // error messages
    protected $messages = [
        'task.required' => 'No dejes el campo vacío',
        'task.min' => 'La tarea debe contener, al menos 5 caracteres',
        'task.max' => 'La tarea debe contener, menos de 255 caracteres',
        'category_id.numeric' => 'Debe elegir una categoría',
        'priority_id.numeric' => 'Debe elegir una prioridad'
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
        ModelsTask::create([
            'description' => $this->task,
            'date' => now(),
            'category_id' => $this->category_id,
            'priority_id' => $this->priority_id
        ]);

        $this->reset([
            'task', 'category_id', 'priority_id'
        ]);

        session()->flash('success', 'Tarea agregada!');
    }

    public function render()
    {
        return view('livewire.tasks.task', [
            'tasks' => ModelsTask::all()
        ]);
    }
}

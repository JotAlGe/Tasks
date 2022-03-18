<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Task as ModelsTask;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Task extends Component
{
    public $showPartial = false;
    public $showEdit = false;
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

    // edit
    public function edit($id)
    {
        $this->task = ModelsTask::find($id);
        $this->showEdit = true;
        return view('livewire.tasks.edit');
    }

    // update
    public function update($task_id)
    {
        $this->validate();

        return dd($task_id);
    }

    // save a task
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

    // delete a task
    public function destroy($id)
    {
        ModelsTask::destroy($id);
        session()->flash('deleted', 'Tarea eliminada');
    }

    // render
    public function render()
    {
        return view('livewire.tasks.task', [
            'tasks' => ModelsTask::orderBy('created_at', 'desc')->get()
        ]);
    }
}

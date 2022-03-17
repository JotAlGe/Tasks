<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public $showPartial = false;
    public $task;

    protected $rules = [
        'task' => ['required', 'min:6', 'max:255']
    ];

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

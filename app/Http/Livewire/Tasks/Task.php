<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public function render()
    {
        return view('livewire.tasks.task', [
            'tasks' => ModelsTask::all()
        ]);
    }
}

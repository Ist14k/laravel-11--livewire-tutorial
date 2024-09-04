<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public string $task = '';

    public array $tasks = [
        [
            "id" => "1",
            "name" => "Go to the store",
        ],
        [
            "id" => "2",
            "name" => "Buy some food",
        ],
        [
            "id" => "3",
            "name" => "Prepare dinner",
        ],
    ];

    public function addTask()
    {
        $this->tasks[] = [
            "id" => count($this->tasks) + 1,
            "name" => $this->task,
        ];

        $this->task = '';
    }

    public function removeTask($id)
    {
        $this->tasks = array_filter($this->tasks, function ($task) use ($id) {
            return $task['id'] != $id;
        });
    }

    public function render()
    {
        return view('livewire.todo');
    }
}

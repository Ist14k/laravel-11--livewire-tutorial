<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public string $task = '';

    public array $tasks = [];

    // lifecycle hooks
    public function mount()
    {
        $this->tasks = [
            [
                "id" => 1,
                "name" => "Task 1",
            ],
            [
                "id" => 2,
                "name" => "Task 2",
            ],
            [
                "id" => 3,
                "name" => "Task 3",
            ],
        ];
    }

    // lifecycle hooks
    public function updatedTask($value)
    {
        $this->task = strtoupper($value);
    }

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

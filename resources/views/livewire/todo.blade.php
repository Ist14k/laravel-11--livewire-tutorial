<div>
  <h1 class="text-4xl font-bold uppercase text-black/80">Todo App</h1>
  <div class="mt-6">
    <input type="text" wire:model="task" class="w-full border border-gray-300 p-2">
    <button wire:click="addTask" class="mt-2 rounded bg-blue-500 px-4 py-2 text-white">Add Task</button>
    <div class="mt-6">
      <ul class="space-y-2">
        @foreach ($tasks as $task)
          <li class="flex items-center justify-between">
            <p>{{ $task['name'] }}</p>
            <button wire:click="removeTask('{{ $task['id'] }}')"
              class="rounded bg-red-500 px-4 py-2 text-white">Remove</button>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

<div>
  <h1 class="text-xl font-bold">Counter App</h1>
  <div class="mt-10">
    <p>Count: {{ $count }}</p>
    <div class="mt-6">
      <button wire:click="increment" class="bg-blue-500 text-white px-4 py-2 rounded">Increment</button>
      <button wire:click="incrementBy(2)" class="bg-green-500 text-white px-4 py-2 rounded">Increment By Two</button>
      <button wire:click="decrement" class="bg-red-500 text-white px-4 py-2 rounded">Decrement</button>
    </div>
  </div>
</div>

<div>
    <form wire:submit="add">
        <input type="text" wire:model="todo"
            class="rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <!-- <input type="text" wire:model.live="todo"> -->
        <!-- <input type="text" wire:model.live.debounce.5ms="todo"> -->
        <!-- <input type="text" wire:model.live.throttle.5ms="todo"> -->
        <!-- <input type="text" wire:model.live.change="todo"> // saat klik tab -->
        <!-- <input type="text" wire:model.live.blur="todo"> saat klik di window -->

        <!-- <span>Current todo: {{ $todo }}</span> -->

        <button type="button"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>

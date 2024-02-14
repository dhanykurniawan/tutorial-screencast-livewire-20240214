<div>
    <h2>New Post:</h2>

    <!-- Start AlpineJS counter -->
    <!-- <div x-data="{ count: 0 }">
        <span x-text="count"></span>

        <button x-on:click="count++">+</button>
    </div> -->
    <!-- End AlpineJS Counter -->

    <!-- Current Title: <span x-text="$wire.title.toUpperCase() + $wire.content"></span>
    <br>
    <button x-on:click="$wire.title=''">Clear Title</button>
    <br>
    <button type="button" x-on:click="$wire.save()">Submit form</button> -->


    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('title')
            <em>{{ $message }}</em>
            @enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            <small class="float-right">Characters: <span x-text="$wire.content.length"></span></small>
            <small class="float-right">Words: <span x-text="$wire.content.split(' ').length - 1"></span></small>
            @error('content')
            <em>{{ $message }}</em>
            @enderror
        </label>

        <button type="submit" class="block w-full rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Save</button>
    </form>
</div>
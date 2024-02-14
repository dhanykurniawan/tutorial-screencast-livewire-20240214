<tr @class(['archived'=> $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>
        @unless ($post->is_archived)
        <button type="button" wire:click="archive" wire:confirm="Are you sure you want to archive this Post?"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Archive
        </button>
        @endunless

        <button type="button" wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure you want to delete this Post?"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Delete
        </button>
    </td>







</tr>

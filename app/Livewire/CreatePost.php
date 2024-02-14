<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

#[Title('Create New Post')]
class CreatePost extends Component
{
    #[Rule('required', as: 'Judul', message: 'Masukkan judul!')]
    public $title = '';

    #[Rule('required', as: 'Isi', message: 'Masukkan isi!')]
    #[Rule('min:4', as: 'Isi', message: 'Terlalu pendek!')]
    public $content = '';

    public function save()
    {
        $this->validate(
            // [
            //     'title' => 'required',
            //     'content' => 'required',
            // ]
        );

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}

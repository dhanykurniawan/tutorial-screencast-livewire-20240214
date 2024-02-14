<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{
    public $todo = '';

    public $todos = [
        'Take out trash',
        'Do dishes',
    ];

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->todo = ''; // cara 1 untuk mengosongkan kembali input field
        $this->reset('todo'); // cara 2 untuk mengosongkan kembali input field
    }

    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.todos');
    }
}

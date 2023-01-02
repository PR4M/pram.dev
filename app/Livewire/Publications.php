<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Publications extends Component
{
    public function mount()
    {

    }

    public function records()
    {
        $q = Post::query();

        return $q->paginate(10);
    }

    public function render()
    {
        return view('livewire.publications', ['publications' => $this->records()]);
    }
}

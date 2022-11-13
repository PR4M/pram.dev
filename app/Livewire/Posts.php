<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{
    public function mount()
    {
        
    }

    public function records()
    {

    }

    public function render()
    {
        return view('', ['records' => $this->records()]);
    }
}

<?php

namespace App\Livewire;

use App\Models\Entity;
use Livewire\Component;

class Services extends Component
{
    public function mount()
    {
    }

    public function records()
    {
        $q = Entity::query()->services();

        return $q->withMeta()->paginate(10);
    }

    public function render()
    {
        return view('livewire.services', ['records' => $this->records()]);
    }
}

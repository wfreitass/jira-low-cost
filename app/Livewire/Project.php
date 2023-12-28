<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public int $countProject;
    public bool $showModal = false;

    public function mount(): void
    {
        $this->countProject = ModelsProject::all()->count();
    }

    public function toggleModal(): bool
    {
        return  $this->showModal = !$this->showModal;
    }

    public function render()
    {
        return view('livewire.project');
    }
}

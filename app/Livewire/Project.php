<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public int $countProject;

    public function mount()
    {
        $this->countProject = ModelsProject::all()->count();
    }
    public function render()
    {
        return view('livewire.project');
    }
}

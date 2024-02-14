<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectComponent extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.project-component', [
            'project' => $this->project,
        ]);
    }
}

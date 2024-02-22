<?php

namespace App\Livewire;

use App\Models\About;
use App\Models\Member;
use App\Models\Process;
use Livewire\Component;

class AboutComponent extends Component
{
    public $about;

    public function render()
    {
        $members = Member::all();
        $process = Process::first();

        return view('livewire.about-component', [
            $this->about = About::first(),
            'process' => $process,
            'members' => $members,
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.about-component', [
            'about' => About::first(),
        ]);
    }
}

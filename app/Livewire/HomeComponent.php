<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\FAQ;
use App\Models\Home;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Livewire\Attributes\Rule;
use Livewire\Component;

class HomeComponent extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required|email')]
    public $email;

    public $phone;

    #[Rule('required')]
    public $comment;

    public function sendMessage()
    {
        $this->validate();

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'Thank you for getting in touch!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.home-component', [
            'hero' => Slider::first(),
            'services' => Service::all(),
            'home' => Home::first(),
            'faqs' => FAQ::all(),
            'testimonials' => Testimonial::all(),
        ]);
    }
}

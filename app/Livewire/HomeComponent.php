<?php

namespace App\Livewire;

use App\Models\Contact;
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
        return view('livewire.home-component');
    }
}

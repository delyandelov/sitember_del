<?php

namespace App\Livewire;


use App\Models\Service;
use App\Models\ServicesPage;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $servicesPage;

    public function render()
    {
        $services = Service::all();

        return view('livewire.services-component', [
            $this->servicesPage = ServicesPage::first(),
            'services' => $services,
        ]);
    }
}

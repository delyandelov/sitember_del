<?php

namespace App\Filament\Resources\ContactPageResource\Pages;

use App\Filament\Resources\ContactPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContactPage extends CreateRecord
{
    protected static string $resource = ContactPageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

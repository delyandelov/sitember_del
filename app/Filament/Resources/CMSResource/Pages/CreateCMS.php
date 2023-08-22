<?php

namespace App\Filament\Resources\CMSResource\Pages;

use App\Filament\Resources\CMSResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCMS extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = CMSResource::class;

    protected static ?string $title = 'Създай страница';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}

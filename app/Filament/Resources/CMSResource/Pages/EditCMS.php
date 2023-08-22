<?php

namespace App\Filament\Resources\CMSResource\Pages;

use App\Filament\Resources\CMSResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCMS extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = CMSResource::class;

    protected static ?string $title = 'Редактирай страница';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

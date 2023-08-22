<?php

namespace App\Filament\Resources\CMSResource\Pages;

use App\Filament\Resources\CMSResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCMS extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = CMSResource::class;

    protected static ?string $title = 'Всички страници';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

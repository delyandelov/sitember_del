<?php

namespace App\Filament\Resources\PostCategoryResource\Pages;

use App\Filament\Resources\PostCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePostCategory extends CreateRecord
{
    protected static string $resource = PostCategoryResource::class;

    protected static ?string $title = 'Създай категория';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

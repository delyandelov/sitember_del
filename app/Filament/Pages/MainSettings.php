<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class MainSettings extends SettingsPage
{
    protected static ?string $navigationGroup = 'Управление';

    protected static ?string $navigationLabel = 'Настройки';

    protected static ?string $title = 'Настройки';

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('app_name')
                    ->label('Website name')
                    ->translateLabel()
                    ->required(),
                TextInput::make('company')
                    ->label('Company name')
                    ->required(),
                TextInput::make('country')
                    ->label('Country'),
                TextInput::make('city')
                    ->label('Град'),
                TextInput::make('address')
                    ->label('Address'),
                TextInput::make('phone')
                    ->label('Phone')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->required(),
                TextInput::make('facebook')
                    ->label('Facebook profile')
                    ->url()
                    ->required(),
                TextInput::make('linkedin')
                    ->label('LinkedIn profile')
                    ->url()
                    ->required(),
                TextInput::make('instagram')
                    ->label('Instagram profile')
                    ->url()
                    ->required(),
                TextInput::make('twitter')
                    ->label('Twitter profile')
                    ->url()
                    ->required(),
            ]);
    }
}

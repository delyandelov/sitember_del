<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class MainSettings extends SettingsPage
{
    protected static ?string $navigationGroup = 'Management';

    protected static ?string $navigationLabel = 'Main Settings';

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
                    ->translateLabel()
                    ->required(),
                TextInput::make('country')
                    ->label('Country')
                    ->translateLabel(),
                TextInput::make('city')
                    ->label('Град')
                    ->translateLabel(),
                TextInput::make('address')
                    ->label('Address')
                    ->translateLabel(),
                TextInput::make('phone')
                    ->label('Phone')
                    ->translateLabel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->translateLabel()
                    ->required(),
                TextInput::make('facebook')
                    ->label('Facebook profile')
                    ->translateLabel()
                    ->url()
                    ->required(),
                TextInput::make('linkedin')
                    ->label('LinkedIn profile')
                    ->translateLabel()
                    ->url()
                    ->required(),
                TextInput::make('instagram')
                    ->label('Instagram profile')
                    ->translateLabel()
                    ->url()
                    ->required(),
                TextInput::make('twitter')
                    ->label('Twitter profile')
                    ->translateLabel()
                    ->url()
                    ->required(),
            ]);
    }
}

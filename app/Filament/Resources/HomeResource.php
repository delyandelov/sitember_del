<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Models\Home;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Home Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('services_title')
                        ->label('Services Title')
                        ->required(),
                    TextInput::make('aboutus_title')
                        ->label('About Us Title')
                        ->required(),
                    TinyEditor::make('aboutus_content')
                        ->label('About Us Content')
                        ->required(),
                    TextInput::make('aboutus_button_text')
                        ->label('About Us Button Text')
                        ->required(),
                    TextInput::make('projects_title')
                        ->label('Projects Title')
                        ->required(),
                    TextInput::make('projects_button_text')
                        ->label('Projects Button Text')
                        ->required(),
                    TextInput::make('other_button_text')
                        ->label('Other Questions Button Text')
                        ->required(),
                    TextInput::make('join_content')
                        ->label('Customers count')
                        ->required(),
                    TextInput::make('testimonials_title')
                        ->label('Testimonials Title')
                        ->required(),
                    TextInput::make('askus_title')
                        ->label('Ask Us Title')
                        ->required(),
                    TinyEditor::make('askus_content')
                        ->label('Ask Us Content')
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->sortable(),
                Tables\Columns\TextColumn::make('services_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}

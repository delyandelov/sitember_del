<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Models\Slider;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-m-arrows-right-left';

    protected static ?string $navigationGroup = 'Management';

    protected static ?string $navigationLabel = 'Sliders';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    TinyEditor::make('content')
                        ->label('Content')
                        ->columnSpan('full'),
                    TextInput::make('link')
                        ->label('Path/Link')
                        ->required(),
                    TextInput::make('link_text')
                        ->label('Link Text')
                        ->required(),
                    Toggle::make('status')
                        ->label('Active'),
                    SpatieMediaLibraryFileUpload::make('media')
                        ->label('Image')
                        ->collection('sliders')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('2000')
                        ->imageResizeTargetWidth('auto'),
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
                SpatieMediaLibraryImageColumn::make('media')
                    ->label('Image')
                    ->collection('sliders'),
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->label('Active')
                    ->toggle()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime('d-M-Y')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}

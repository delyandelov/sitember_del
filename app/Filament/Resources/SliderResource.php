<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slider;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SliderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\SliderResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-m-arrows-right-left';

    protected static ?string $modelLabel = 'слайдер';

    protected static ?string $pluralModelLabel = 'слайдери';

    protected static ?string $navigationGroup = 'Управление';

    protected static ?string $navigationLabel = 'Слайдер';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Заглавие')
                        ->required(),
                    TinyEditor::make('content')
                        ->label('Съдържание')
                        ->columnSpan('full'),
                    TextInput::make('link')
                        ->label('Път')
                        ->required(),
                    TextInput::make('link_text')
                        ->label('Заглавие на пътя')
                        ->required(),
                    Toggle::make('status')
                        ->label('Активен'),
                    SpatieMediaLibraryFileUpload::make('media')
                        ->label('Снимка')
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
                    ->label('Снимка')
                    ->collection('sliders'),
                TextColumn::make('title')
                    ->label('Заглавие')
                    ->sortable(),
                // Tables\Columns\TextColumn::make('content')->limit(20)->sortable(),
                Tables\Columns\TextColumn::make('link')
                    ->label('Път'),
                // Tables\Columns\TextColumn::make('link_text'),
                Tables\Columns\IconColumn::make('status')
                    ->label('Активен')
                    ->toggle()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Създаден на')
                    ->dateTime('d-M-Y')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}

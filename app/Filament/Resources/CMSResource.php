<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CMSResource\Pages;
use App\Models\CMS;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CMSResource extends Resource
{
    use Translatable;

    protected static ?string $model = CMS::class;

    protected static ?string $modelLabel = 'страница';

    protected static ?string $pluralModelLabel = 'страници';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Съдържание';

    protected static ?string $navigationLabel = 'Всички страници';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Заглавие')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                        ->label('Слъг')
                        ->disabled()
                        ->required()
                        ->unique(CMS::class, 'slug', fn ($record) => $record),
                    TinyEditor::make('body')
                        ->label('Съдържание')
                        ->required()
                        ->columnSpan('full'),
                    SpatieMediaLibraryFileUpload::make('media')
                        ->label('Медия')
                        ->collection('cms')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('1800')
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
                    ->label('Медия')
                    ->collection('cms'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заглавие')
                    ->limit(20)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Създадена на')
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
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCMS::route('/'),
            'create' => Pages\CreateCMS::route('/create'),
            'edit' => Pages\EditCMS::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'bg'];
    }
}

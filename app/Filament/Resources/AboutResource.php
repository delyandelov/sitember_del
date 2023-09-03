<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $modelLabel = 'За нас';

    protected static ?string $pluralModelLabel = 'За нас';

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $navigationGroup = 'Съдържание';

    protected static ?string $navigationLabel = 'За нас';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Заглавие')
                        ->required(),
                    TinyEditor::make('section1')
                        ->label('Раздел 1')
                        ->required()
                        ->columnSpan('full'),
                    TinyEditor::make('section2')
                        ->label('Раздел 2')
                        ->required()
                        ->columnSpan('full'),
                    TinyEditor::make('section3')
                        ->label('Раздел 3')
                        ->required()
                        ->columnSpan('full'),
                    TextInput::make('box1_title')
                        ->label('Заглавие')
                        ->required(),
                    TinyEditor::make('box1')
                        ->label('Кутия 1')
                        ->required(),
                    TextInput::make('box2_title')
                        ->label('Заглавие')
                        ->required(),
                    TinyEditor::make('box2')
                        ->label('Кутия 2')
                        ->required(),
                    TextInput::make('box3_title')
                        ->label('Заглавие')
                        ->required(),
                    TinyEditor::make('box3')
                        ->label('Кутия 3')
                        ->required(),
                    TextInput::make('box4_title')
                        ->label('Заглавие')
                        ->required(),
                    TinyEditor::make('box4')
                        ->label('Кутия 4')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('about')
                        ->label('Медия')
                        ->collection('about')
                        ->multiple()
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('500')
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
                SpatieMediaLibraryImageColumn::make('about')
                    ->label('Медия')
                    ->collection('about'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заглавие')
                    ->limit(20)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Създадена на')
                    ->dateTime('d M Y')
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}

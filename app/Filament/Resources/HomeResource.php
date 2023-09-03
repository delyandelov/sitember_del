<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Models\Home;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
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

    protected static ?string $modelLabel = 'Начална страница';

    protected static ?string $pluralModelLabel = 'Начална страница';

    protected static ?string $navigationGroup = 'Съдържание';

    protected static ?string $navigationLabel = 'Начална страница';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('slogan')
                        ->label('Слоган')
                        ->required(),
                    TinyEditor::make('intro')
                        ->label('Въведение под слогана')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('media_head')
                        ->label('Медия')
                        ->collection('head')
                        ->multiple()
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('50'),
                    // ->imageResizeTargetHeight('auto'),
                ]),
                Section::make()->schema([
                    TextInput::make('section_title1')
                        ->label('Заглавие на секция 1')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('media_head')
                        ->label('Медия')
                        ->collection('head')
                        ->multiple()
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('50'),
                    // ->imageResizeTargetHeight('auto'),
                ]),
                Section::make()->schema([
                    TextInput::make('section_title2')
                        ->label('Заглавие на секция 2')
                        ->required(),
                    TinyEditor::make('short_info1')
                        ->label('Кратко Инфо 1')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('media_head')
                        ->label('Медия')
                        ->collection('head')
                        ->multiple()
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('50'),
                    // ->imageResizeTargetHeight('auto'),
                ]),
                Section::make()->schema([
                    TextInput::make('section_title3')
                        ->label('Заглавие на секция 3')
                        ->required(),
                ]),
                Section::make()->schema([
                    TinyEditor::make('short_info2')
                        ->label('Кратко Инфо 2')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('media_head')
                        ->label('Медия')
                        ->collection('head')
                        ->multiple()
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('50'),
                    // ->imageResizeTargetHeight('auto'),
                ]),
                Section::make()->schema([
                    TextInput::make('section_title4')
                        ->label('Заглавие на секция 4')
                        ->required(),
                ]),
                Section::make()->schema([
                    TextInput::make('section_title5')
                        ->label('Заглавие на секция 5')
                        ->required(),
                    TinyEditor::make('short_info3')
                        ->label('Кратко Инфо 3')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('media_head')
                        ->label('Медия')
                        ->collection('head')
                        ->multiple()
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('50'),
                    // ->imageResizeTargetHeight('auto'),
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
                Tables\Columns\TextColumn::make('slogan')
                    ->label('Слоган')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Създадена на')
                    ->dateTime('d-M-Y'),
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

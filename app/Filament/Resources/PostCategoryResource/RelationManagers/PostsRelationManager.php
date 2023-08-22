<?php

namespace App\Filament\Resources\PostCategoryResource\RelationManagers;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TinyEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    protected static ?string $modelLabel = 'публикация';

    protected static ?string $pluralModelLabel = 'публикации';

    protected static ?string $recordTitleAttribute = 'title';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->label('Заглавие')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                        ->label('Слъг')
                        ->disabled()
                        ->required(),
                    // ->unique(PostCategory::class, 'slug', fn ($record) => $record),
                    Toggle::make('active')
                        ->label('Активна')
                        ->default(true),
                    Toggle::make('featured')
                        ->label('Препоръчана')
                        ->default(false),
                    SpatieMediaLibraryFileUpload::make('media')
                        ->label('Медия')
                        ->collection('posts')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('670')
                        ->imageResizeTargetHeight('550'),
                    TinyEditor::make('content')
                        ->label('Съдържание')
                        ->columnSpan('full'),
                    Select::make('category_id')
                        ->label('Категория')
                        ->relationship('category', 'title')
                        ->preload()
                        ->required(),
                ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->sortable(),
                SpatieMediaLibraryImageColumn::make('media')
                    ->label('Медия')
                    ->collection('posts'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заглавие')
                    ->limit(20)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Съдържание')
                    ->limit(20)
                    ->searchable(),
                Tables\Columns\TextColumn::make('category_id')
                    ->label('Категория'),
                IconColumn::make('active')
                    ->label('Активна')
                    ->toggle()
                    ->boolean(),
                IconColumn::make('featured')
                    ->label('Препоръчана')
                    ->toggle()
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Публикувана')
                    ->dateTime('d-M-Y')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\PostCategoryResource\RelationManagers;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    protected static ?string $modelLabel = 'Post';

    protected static ?string $pluralModelLabel = 'Posts';

    protected static ?string $recordTitleAttribute = 'title';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('SEO Section')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('SEO Title'),
                        TextInput::make('seo_description')
                            ->label('SEO Description'),
                    ]),
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->autofocus()
                            ->live(onBlur: true)
                            ->unique(ignoreRecord: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->disabledOn('edit')
                            ->required(),
                        Toggle::make('active')
                            ->label('Active')
                            ->default(true),
                        SpatieMediaLibraryFileUpload::make('media')
                            ->label('Media')
                            ->collection('posts')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageResizeTargetWidth('670')
                            ->imageResizeTargetHeight('550'),
                        TinyEditor::make('content')
                            ->label('Content')
                            ->columnSpan('full'),
                        Select::make('categories')
                            ->label('Category')
                            ->relationship('categories', 'title')
                            ->multiple()
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
                    ->label('Title')
                    ->collection('posts'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->limit(20)
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('active')
                    ->label('Active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created at')
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

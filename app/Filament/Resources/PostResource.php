<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\Layout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $modelLabel = 'Post';

    protected static ?string $pluralModelLabel = 'Posts';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'BLOG';

    protected static ?int $navigationSort = 12;

    public static function form(Form $form): Form
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
                Section::make('Post Section')
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
                        SpatieMediaLibraryFileUpload::make('head')
                            ->label('Head Media')
                            ->collection('posts_head')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageResizeTargetWidth('870')
                            ->imageEditorViewportHeight('520'),
                        TinyEditor::make('content')
                            ->label('Content')
                            ->required()
                            ->columnSpan('full'),
                        Toggle::make('active')
                            ->label('Active')
                            ->default(true),
                        SpatieMediaLibraryFileUpload::make('post')
                            ->label('Media')
                            ->collection('posts')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageResizeTargetWidth('870')
                            ->imageEditorViewportHeight('520'),
                        Select::make('categories')
                            ->label('Category')
                            ->relationship('categories', 'title')
                            ->multiple()
                            ->preload()
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
                SpatieMediaLibraryImageColumn::make('media')
                    ->label('Media')
                    ->collection('posts_head'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('categories.title')
                    ->label('Category'),
                ToggleColumn::make('active')
                    ->label('Active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime('d.m.Y')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters(
                [
                    Filter::make('active')
                        ->query(fn (Builder $query): Builder => $query->where('active', true))->toggle(),
                    Filter::make('inactive')
                        ->query(fn (Builder $query): Builder => $query->where('active', false))->toggle(),
                    SelectFilter::make('categories')->relationship('categories', 'title'),
                ],
                // layout: Layout::AboveContent,
            )
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}

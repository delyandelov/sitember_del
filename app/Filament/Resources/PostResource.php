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
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
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

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationLabel = 'Posts';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required()
                        ->autofocus()
                        ->live(onBlur: true)
                        ->unique(ignoreRecord: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                        ->disabledOn('edit')
                        ->required(),
                    TinyEditor::make('content')
                        ->label('Content')
                        ->columnSpan('full'),
                    TextInput::make('meta_title')
                        ->label('Meta Title'),
                    TextInput::make('meta_content')
                        ->label('Meta Content'),
                    TextInput::make('meta_keywords')
                        ->label('Meta Keywords'),
                    TextInput::make('time_to_read')
                        ->label('Time to Read')
                        ->default(5)
                        ->integer(),
                    Toggle::make('active')
                        ->label('Active')
                        ->default(true),
                    Toggle::make('featured')
                        ->label('Featured')
                        ->default(false),
                    SpatieMediaLibraryFileUpload::make('post')
                        ->label('Image')
                        ->collection('posts')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('1000'),
                    // ->imageResizeTargetHeight('auto'),
                    SpatieMediaLibraryFileUpload::make('small')
                        ->label('Gallery')
                        ->collection('post_small')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('500'),
                    // ->imageResizeTargetHeight('auto'),
                    Select::make('category_id')
                        ->label('Category')
                        ->relationship('category', 'title')
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
                    ->collection('posts'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('content')->label('Post content')->limit(30)->searchable(),
                Tables\Columns\TextColumn::make('category.title')
                    ->label('Category'),
                IconColumn::make('active')
                    ->label('Active')
                    ->toggle()
                    ->boolean(),
                IconColumn::make('featured')
                    ->label('Featured')
                    ->toggle()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime('d.m.Y')
                    ->sortable()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('deleted_at')->dateTime('d-M-Y')->sortable()->searchable(),

            ])
            ->filters(
                [
                    Tables\Filters\TrashedFilter::make(),
                    Filter::make('active')
                        ->query(fn (Builder $query): Builder => $query->where('active', true))->toggle(),
                    Filter::make('inactive')
                        ->query(fn (Builder $query): Builder => $query->where('active', false))->toggle(),
                    Filter::make('featured')
                        ->query(fn (Builder $query): Builder => $query->where('featured', true))->toggle(),
                    Filter::make('not featured')
                        ->query(fn (Builder $query): Builder => $query->where('featured', false))->toggle(),
                    SelectFilter::make('category')->relationship('category', 'title'),
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

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}

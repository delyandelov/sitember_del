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
use Filament\Resources\Concerns\Translatable;
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
    use Translatable;

    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $modelLabel = 'публикация';

    protected static ?string $pluralModelLabel = 'публикации';

    protected static ?string $navigationGroup = 'Блог';

    protected static ?string $navigationLabel = 'Публикации';

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
                        ->required(),
                    TinyEditor::make('content')
                        ->label('Съдържание')
                        ->columnSpan('full'),
                    TextInput::make('meta_title')
                        ->label('Мета заглавие'),
                    TextInput::make('meta_content')
                        ->label('Мета съдържание'),
                    TextInput::make('meta_keywords')
                        ->label('Мета ключови думи'),
                    TextInput::make('time_to_read')
                        ->label('Време за четене')
                        ->default(5)
                        ->integer(),
                    Toggle::make('active')
                        ->label('Активна')
                        ->default(true),
                    Toggle::make('featured')
                        ->label('Препоръчана')
                        ->default(false),
                    SpatieMediaLibraryFileUpload::make('post')
                        ->label('Медия')
                        ->collection('posts')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('1000'),
                    // ->imageResizeTargetHeight('auto'),
                    SpatieMediaLibraryFileUpload::make('small')
                        ->label('Галерия')
                        ->collection('post_small')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('500'),
                    // ->imageResizeTargetHeight('auto'),
                    Select::make('category_id')
                        ->label('Категория')
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
                    ->label('Медиа')
                    ->collection('posts'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заглавие')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('content')->label('Post content')->limit(30)->searchable(),
                Tables\Columns\TextColumn::make('category.title')
                    ->label('Категория'),
                IconColumn::make('active')
                    ->label('Активна')
                    ->toggle()
                    ->boolean(),
                IconColumn::make('featured')
                    ->label('Нова')
                    ->toggle()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Създадена на')
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

    public static function getTranslatableLocales(): array
    {
        return ['en', 'bg'];
    }
}

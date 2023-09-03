<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostCategoryResource\Pages\CreatePostCategory;
use App\Filament\Resources\PostCategoryResource\Pages\EditPostCategory;
use App\Filament\Resources\PostCategoryResource\Pages\ListPostCategories;
use App\Filament\Resources\PostCategoryResource\RelationManagers\PostsRelationManager;
use App\Models\PostCategory;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostCategoryResource extends Resource
{
    protected static ?string $model = PostCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $modelLabel = 'блог категория';

    protected static ?string $pluralModelLabel = 'блог категории';

    protected static ?string $navigationGroup = 'Блог';

    protected static ?string $navigationLabel = 'Блог категории';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Заглавие')
                        ->required()
                        ->autofocus()
                        ->live(onBlur: true)
                        ->unique(ignoreRecord: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                        ->disabledOn('edit')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('media')
                        ->label('Медия')
                        ->collection('postcategories')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('1200')
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
                    ->collection('postcategories')
                    ->label('Медия'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Име на категория')
                    ->limit(20)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('posts_count')
                    ->label('Брой публикации')
                    ->counts('posts'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Създадена')
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
            PostsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPostCategories::route('/'),
            'create' => CreatePostCategory::route('/create'),
            'edit' => EditPostCategory::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesPageResource\Pages;
use App\Filament\Resources\ServicesPageResource\RelationManagers;
use App\Models\ServicesPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\TextInput;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ServicesPageResource extends Resource
{
    protected static ?string $model = ServicesPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Services';

    protected static ?string $navigationGroup = 'WEBSITE PAGES';

    protected static ?int $navigationSort = 2;

    protected static ?string $title = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('SEO Section')
                    ->schema([
                        TextInput::make('page_title')
                            ->label('Page Title')
                            ->columnSpan('full')
                            ->required(),
                        TextInput::make('seo_title')
                            ->label('SEO Title'),
                        TextInput::make('seo_description')
                            ->label('SEO Description'),
                    ]),
                Section::make('Page Section')
                    ->schema([
                        TextInput::make('page_title')
                            ->label('Title')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_title'),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListServicesPages::route('/'),
            'create' => Pages\CreateServicesPage::route('/create'),
            'edit' => Pages\EditServicesPage::route('/{record}/edit'),
        ];
    }
}

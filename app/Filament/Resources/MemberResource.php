<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Member;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\MemberResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'SitemBeer Team';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('email')
                            ->email()
                            ->required(),
                        TextInput::make('position')
                            ->required(),
                    ])->columns(3),
                TinyEditor::make('description')
                    ->columnSpan('full')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('Member Photo')
                    ->collection('member')
                    ->image()
                    // ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('422')
                    ->imageResizeTargetHeight('475')
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->sortable(),
                SpatieMediaLibraryImageColumn::make('Member\'s Photo')
                    ->collection('member'),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SupportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SupportResource\RelationManagers;

class SupportResource extends Resource
{
    use Translatable;

    protected static ?string $model = Post::class;

    protected static ?string $modelLabel = 'Supports';

    protected static ?string $slug = '/supports';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?string $navigationIcon = 'heroicon-o-support';

    protected static ?string $navigationLabel = 'Supports';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListSupports::route('/'),
            'create' => Pages\CreateSupport::route('/create'),
            'edit' => Pages\EditSupport::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'id'];
    }
}

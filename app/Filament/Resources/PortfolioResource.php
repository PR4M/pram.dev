<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Entity;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\PortfolioResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\RelationManagers\TestimonialsRelationManager;
use App\Filament\Resources\PortfolioResource\RelationManagers;

class PortfolioResource extends Resource
{
    use Translatable;

    protected static ?string $model = Entity::class;

    protected static ?string $modelLabel = 'Portfolios';

    protected static ?string $slug = '/portfolios';

    protected static ?string $navigationGroup = 'Entity';

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationLabel = 'Portfolios';

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
            TestimonialsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'id'];
    }
}

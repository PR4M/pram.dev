<?php

namespace App\Filament\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class TestimonialsRelationManager extends RelationManager
{
    protected static string $relationship = 'testimonials';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->hint("The person name who gave testimonial")
                    ->label('Rater Name')
                    ->required(),

                Forms\Components\Select::make('language')->hint("The language spoken by the client")
                    ->options([
                        'en' => 'English Language',
                        'id' => 'Bahasa Indonesia',
                    ])
                    ->required(),

                Forms\Components\TextArea::make('body')->hint("The testimonial or review words given by the client")
                    ->required()
                    ->rows(3)
                    ->columnSpan('full'),

                Forms\Components\Select::make('rating')->hint("The real rating given by the client")
                    ->options([
                        '5' => '★★★★★ (Five Stars Rating)',
                        '4' => '★★★★ (Four Stars Rating)',
                        '3' => '★★★ (Three Stars Rating)',
                        '2' => '★★ (Two Stars Rating)',
                        '1' => '★ (One Star Rating)',
                    ])
                    ->default('5')
                    ->required(),

                Forms\Components\Select::make('source')->hint("The platform which the testimonial was placed")
                    ->options([
                        'internal' => 'Pram.dev',
                        'fiverr' => 'Fiverr',
                        'upwork' => 'Upwork',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('source_url')->hint("The source url for people to visit the testimonial link")
                    ->url()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('rating')->formatStateUsing(
                    function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();

                        switch ($state) {
                            case 5: return '★★★★★';
                            case 4: return '★★★★';
                            case 3: return '★★★';
                            case 2: return '★★';
                            case 1: return '★';
                        }

                        // Only render the tooltip if the column contents exceeds the length limit.
                        return $state;
                    }),
                Tables\Columns\TextColumn::make('language'),
                Tables\Columns\TextColumn::make('source'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslationResource\Pages;
use App\Filament\Resources\TranslationResource\RelationManagers;
use App\Models\Translation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationIcon = 'heroicon-o-translate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\Select::make('key')->hint("The key to be paired with its original content")
                                    ->label("Translation Key")
                                    ->options([
                                        'title' => 'For Title',
                                        'summary' => 'For Summary',
                                        'body' => 'For Body',
                                    ])
                                    ->required(),

                                Forms\Components\Select::make('language')->hint("The language that the translation uses")
                                    ->label("Translation Language")
                                    ->options([
                                        'id' => 'Indonesia',
                                    ])
                                    ->required(),

                                Forms\Components\RichEditor::make('value')->hint("The value to be paired with its original content")
                                    ->label("Translation Value")
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsDirectory('attachments')
                                    ->fileAttachmentsVisibility('public')
                                    ->required()
                                    ->columnSpan('full'),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan([
                        'sm' => fn (?Translation $record) => $record === null ? 3 : 3,
                        'lg' => fn (?Translation $record) => $record === null ? 3 : 3
                    ]),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (Translation $record): string => $record->created_at->diffForHumans()),

                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (Translation $record): string => $record->updated_at->diffForHumans()),

                        // Forms\Components\Placeholder::make('author')
                        //     ->label('Author / created by')
                        //     ->content(fn (Translation $record): string => $record->author->name),
                    ])
                    ->columnSpan('full')
                    ->hidden(fn (?Translation $record) => $record === null),
            ])
            ->columns([
                'sm' => 3,
                'lg' => null,
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
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}

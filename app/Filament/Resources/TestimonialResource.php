<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Testimonial;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;

class TestimonialResource extends Resource
{
    use Translatable;

    protected static ?string $model = Testimonial::class;

    protected static ?string $modelLabel = 'Testimonials';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?string $navigationIcon = 'heroicon-o-annotation';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Card::make()
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

                                Forms\Components\Select::make('entity_id')->hint("The service that the testimonial is written for")
                                    ->relationship('entity', 'title')
                                    ->searchable()
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

                                // SpatieTagsInput::make('tags'),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan([
                        'sm' => fn (?Testimonial $record) => $record === null ? 3 : 3,
                        'lg' => fn (?Testimonial $record) => $record === null ? 3 : 3
                    ]),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (Testimonial $record): string => $record->created_at->diffForHumans()),

                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (Testimonial $record): string => $record->updated_at->diffForHumans()),
                    ])
                    ->columns(3)
                    ->hidden(fn (?Testimonial $record) => $record === null),
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
                Tables\Columns\TextColumn::make('name')
                    ->label('Rater Name')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('rating')
                    ->label('Rating Given')
                    ->formatStateUsing(
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
                        })->sortable(),

                Tables\Columns\TextColumn::make('source')
                    ->label('Source')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->color(static function ($state): string {
                        if ($state !== 'pram.dev') {
                            return 'success';
                        }

                        return 'secondary';
                    })
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->action(function () {
                        Notification::make()
                            ->title('Now, now, don\'t be cheeky, leave some records for others to play with!')
                            ->warning()
                            ->send();
                    }),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'id'];
    }
}

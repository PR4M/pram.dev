<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Entity;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\SpatieTagsInput;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\RelationManagers\TestimonialsRelationManager;

class ServiceResource extends Resource
{
    use Translatable;

    protected static ?string $model = Entity::class;

    protected static ?string $modelLabel = 'Services';

    protected static ?string $slug = '/services';

    protected static ?string $navigationGroup = 'Entity';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->lazy()
                                    ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->required()
                                    ->unique(Entity::class, 'slug', ignoreRecord: true),

                                Forms\Components\TextArea::make('summary')
                                    ->required()
                                    ->rows(3)
                                    ->columnSpan('full'),

                                Forms\Components\RichEditor::make('body')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsDirectory('attachments')
                                    ->fileAttachmentsVisibility('public')
                                    ->required()
                                    ->columnSpan('full'),

                                Forms\Components\Select::make('type')->hint("For now, it is auto-selected by default")
                                    ->options([
                                        'product' => "It's a product to sell",
                                        'service' => "It's a service to offer",
                                    ])
                                    ->default('service')
                                    ->disabled()
                                    ->required(),

                                Forms\Components\TextInput::make('total_orders')->hint("Count of the total order has been made so far")
                                    ->label('Orders')
                                    ->numeric()
                                    ->required(),

                                Forms\Components\TextInput::make('price')->hint("Pricing starts at")
                                    ->label('Price')
                                    ->mask(fn (TextInput\Mask $mask) => $mask
                                        ->patternBlocks([
                                            'money' => fn (TextInput\Mask $mask) => $mask
                                                ->numeric()
                                                ->thousandsSeparator(',')
                                                ->decimalSeparator('.'),
                                        ])
                                    ->pattern('$money')
                                )->required(),

                                Forms\Components\TextInput::make('ext_price')->hint("Pricing ends at")
                                    ->label('Pricing Ext')
                                    ->mask(fn (TextInput\Mask $mask) => $mask
                                        ->patternBlocks([
                                            'money' => fn (TextInput\Mask $mask) => $mask
                                                ->numeric()
                                                ->thousandsSeparator(',')
                                                ->decimalSeparator('.'),
                                        ])
                                    ->pattern('$money')
                                )->required(),

                                SpatieTagsInput::make('tags'),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->label('Image Thumbnail')
                                    ->image()
                                    ->disableLabel(),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('Order Channels')
                            ->schema([
                                Forms\Components\Repeater::make('order_channels')
                                ->schema([
                                    Forms\Components\Select::make('source')
                                        ->options([
                                            'upwork' => 'Upwork',
                                            'fiverr' => 'Fiverr',
                                        ])
                                        ->required(),
                                    TextInput::make('url')->required(),
                                ])
                                ->columns(2)
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('Meta Attributes')
                            ->schema([
                                Forms\Components\TextInput::make('work_duration')
                                    ->helperText('The work duration in hours')
                                    ->numeric()
                                    ->minValue(1)
                                    ->default(1)
                                    ->required(),

                                Forms\Components\TextInput::make('work_per')
                                    ->helperText('The work label / per for the price')
                                    ->placeholder('per website, per hour, etc')
                                    ->alpha()
                                    ->required(),

                                Forms\Components\TextInput::make('price_idr')
                                    ->helperText('The price in Rupiah / IDR')
                                    ->mask(fn (TextInput\Mask $mask) => $mask
                                        ->patternBlocks([
                                            'money' => fn (TextInput\Mask $mask) => $mask
                                                ->numeric()
                                                ->thousandsSeparator(',')
                                                ->decimalSeparator('.'),
                                        ])
                                        ->pattern('Rp money')
                                    )->required(),

                                Forms\Components\TextInput::make('price_euro')
                                    ->helperText('The price in Euro')
                                    ->mask(fn (TextInput\Mask $mask) => $mask
                                        ->patternBlocks([
                                            'money' => fn (TextInput\Mask $mask) => $mask
                                                ->numeric()
                                                ->thousandsSeparator(',')
                                                ->decimalSeparator('.'),
                                        ])
                                        ->pattern('€ money')
                                    )->required()

                            ])
                            ->columns(4),
                    ])
                    ->columnSpan([
                        'sm' => fn (?Entity $record) => $record === null ? 3 : 3,
                        'lg' => fn (?Entity $record) => $record === null ? 3 : 3
                    ]),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (Entity $record): string => $record->created_at->diffForHumans()),

                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (Entity $record): string => $record->updated_at->diffForHumans()),
                    ])
                    ->columnSpan('full')
                    ->hidden(fn (?Entity $record) => $record === null),
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
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->money('usd', true)
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('ext_price')
                    ->label('Price Ext')
                    ->money('usd', true)
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('total_orders')
                    ->label('Total Orders')
                    ->formatStateUsing(fn (string $state): string => "$state total order" )
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

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
            TestimonialsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'id'];
    }


}

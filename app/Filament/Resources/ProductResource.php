<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Entity;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\SpatieTagsInput;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Filament\RelationManagers\TestimonialsRelationManager;

class ProductResource extends Resource
{
    use Translatable;

    protected static ?string $model = Entity::class;

    protected static ?string $modelLabel = 'Products';

    protected static ?string $slug = '/products';

    protected static ?string $navigationGroup = 'Entity';

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationLabel = 'Products';

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

                                Forms\Components\Textarea::make('summary')
                                    ->required()
                                    ->rows(2)
                                    ->columnSpan('full'),

                                Forms\Components\RichEditor::make('body')
                                    ->columnSpan('full'),

                                Forms\Components\Select::make('type')->hint("For now, it is auto-selected by default")
                                    ->options([
                                        'product' => "It's a product to sell",
                                        'service' => "It's a service to offer",
                                    ])
                                    ->default('product')
                                    ->disabled()
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

                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Product Media')
                            ->schema([
                                Forms\Components\FileUpload::make('attachments')
                                    ->label('Product Galleries')
                                    ->acceptedFileTypes(['image/*', 'video/*'])
                                    ->multiple()
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('Meta Attributes')
                            ->schema([
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
                            ->columns(2),

                        Forms\Components\Section::make('Support')
                            ->schema([
                                Forms\Components\Checkbox::make('offer_support')
                                    ->default(true)
                                    ->label('Offer Customer Support'),

                                Forms\Components\Checkbox::make('has_docs')
                                    ->default(false)
                                    ->label('Has Documentation'),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([

                        Forms\Components\Section::make('Cover')
                            ->schema([
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->label('Image Cover')
                                    ->image(),
                            ]),

                        Forms\Components\Section::make('Status')
                            ->schema([
                                Forms\Components\DatePicker::make('published_at')
                                    ->label('Availability')
                                    ->default(now())
                                    ->required(),
                            ]),

                        Forms\Components\Section::make('Associations')
                            ->schema([
                                SpatieTagsInput::make('tags')
                                    ->label('Categories')
                                    ->placeholder('Product categories')
                                    ->type('product-categories'),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'id'];
    }
}

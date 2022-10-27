<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Customer;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CustomerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerResource\RelationManagers;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $modelLabel = 'Customers';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required(),

                                Forms\Components\TextInput::make('alias')->hint("The customer username, nickname, or an alias")
                                    ->required(),

                                Forms\Components\TextInput::make('email')
                                    ->unique(Customer::class, 'email', ignoreRecord: true),

                                Forms\Components\TextInput::make('phone')
                                    ->tel(),

                                Forms\Components\TextArea::make('about')
                                    ->required()
                                    ->rows(3)
                                    ->columnSpan('full'),

                                Forms\Components\Select::make('source')->hint("Where did I get to know this customer")
                                    ->options([
                                        'fiverr' => 'From Fiverr',
                                        'upwork' => 'From Upwork',
                                        'friend' => 'From A Friend',
                                    ])
                                    ->required(),

                                Forms\Components\TextInput::make('country')->hint("For now, write the country name, e.g: United States")
                                    ->required(),

                                Forms\Components\Toggle::make('repeat_buyer')->hint("Toggle on if this customer has ordered more than once")
                                    ->inline()
                                // SpatieTagsInput::make('tags'),
                            ])
                            ->columns(2),

                    ])
                    ->columnSpan([
                        'sm' => fn (?Customer $record) => $record === null ? 3 : 3,
                        'lg' => fn (?Customer $record) => $record === null ? 3 : 3
                    ]),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (Customer $record): string => $record->created_at->diffForHumans()),

                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (Customer $record): string => $record->updated_at->diffForHumans()),
                    ])
                    ->columnSpan('full')
                    ->hidden(fn (?Customer $record) => $record === null),
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
                    ->label('Name')
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('alias')
                    ->label('Nickname (Alias)')
                    ->searchable(),

                Tables\Columns\TextColumn::make('country')
                    ->label('Country')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('source')
                    ->label('Source')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\BadgeColumn::make('status')
                    ->getStateUsing(fn (Customer $record): string => $record->repeat_buyer == true ? 'Repeat Buyer' : 'One-time Buyer')
                    ->colors([
                        'success' => 'Repeat Buyer',
                    ]),
            ])
            ->filters([

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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}

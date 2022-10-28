<?php

namespace App\Filament\Resources\PortfolioResource\Pages;

use App\Filament\Resources\PortfolioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
class CreatePortfolio extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PortfolioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}

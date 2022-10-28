<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServices extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ServiceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

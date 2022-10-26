<?php

namespace App\Filament\Resources\SupportResource\Pages;

use App\Filament\Resources\SupportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupports extends ListRecords
{
    protected static string $resource = SupportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

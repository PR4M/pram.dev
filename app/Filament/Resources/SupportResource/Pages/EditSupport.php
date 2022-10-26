<?php

namespace App\Filament\Resources\SupportResource\Pages;

use App\Filament\Resources\SupportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupport extends EditRecord
{
    protected static string $resource = SupportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

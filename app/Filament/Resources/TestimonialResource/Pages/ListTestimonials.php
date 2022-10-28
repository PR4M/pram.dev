<?php

namespace App\Filament\Resources\TestimonialResource\Pages;

use App\Filament\Resources\TestimonialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonials extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TestimonialResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

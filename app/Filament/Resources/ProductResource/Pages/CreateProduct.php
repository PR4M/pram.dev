<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Pages\Actions;
use Filament\Support\Exceptions\Halt;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ProductResource;

class CreateProduct extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ProductResource::class;

    protected $metableData = [];

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->metableData['price_idr']         = (Double) $data['price_idr'];
        $this->metableData['price_euro']        = (Double) $data['price_euro'];
        $this->metableData['offer_support']     = (bool) $data['offer_support'];
        $this->metableData['has_docs']          = (bool) $data['has_docs'];

        // unset the meta value so that these don't stored into the model database
        unset(
            $data['price_idr'],
            $data['price_euro'],
            $data['offer_support'],
            $data['has_docs'],
        );

        return $data;
    }

    public function create(bool $another = false): void
    {
        $this->authorizeAccess();

        try {
            $this->callHook('beforeValidate');

            $data = $this->form->getState();

            $this->callHook('afterValidate');

            $data = $this->mutateFormDataBeforeCreate($data);

            $this->callHook('beforeCreate');

            $this->record = $this->handleRecordCreation($data);

            $this->form->model($this->record)->saveRelationships();

            $this->callHook('afterCreate');

            // our additional
            $this->record->createMeta(
                $this->metableData
            );

        } catch (Halt $exception) {
            return;
        }

        $this->getCreatedNotification()?->send();

        if ($another) {
            // Ensure that the form record is anonymized so that relationships aren't loaded.
            $this->form->model($this->record::class);
            $this->record = null;

            $this->fillForm();

            return;
        }

        $this->redirect($this->getRedirectUrl());
    }

}

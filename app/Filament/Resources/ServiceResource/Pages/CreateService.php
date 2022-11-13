<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use Filament\Pages\Actions;
use Filament\Support\Exceptions\Halt;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServiceResource;

class CreateService extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ServiceResource::class;

    protected $metableData = [];

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->metableData['work_duration']     = (int) $data['work_duration'];
        $this->metableData['work_per']          = (String) $data['work_per'];
        $this->metableData['price_idr']         = (int) $data['price_idr'];
        $this->metableData['price_euro']        = (int) $data['price_euro'];

        // unset the meta value so that these don't stored into the model database
        unset($data['work_duration'], $data['work_per'], $data['price_idr'], $data['price_euro']);

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

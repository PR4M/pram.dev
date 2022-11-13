<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use Filament\Pages\Actions;
use Filament\Support\Exceptions\Halt;
use Filament\Forms\Components\Component;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ServiceResource;

class EditService extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ServiceResource::class;

    protected $metableData = [];

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }

    // our overrides
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['work_duration']  = (int) $this->record->meta->work_duration;
        $data['work_per']       = (String) $this->record->meta->work_per;
        $data['price_idr']      = (int) $this->record->meta->price_idr;
        $data['price_euro']     = (int) $this->record->meta->price_euro;

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->metableData['work_duration']     = (int) $data['work_duration'];
        $this->metableData['work_per']          = (String) $data['work_per'];
        $this->metableData['price_idr']         = (int) $data['price_idr'];
        $this->metableData['price_euro']        = (int) $data['price_euro'];

        // unset the meta value so that these don't stored into the model database
        unset($data['work_duration'], $data['work_per'], $data['price_idr'], $data['price_euro']);

        return $data;
    }

    public function save(bool $shouldRedirect = true): void
    {
        $this->authorizeAccess();

        try {
            $this->callHook('beforeValidate');

            $data = $this->form->getState();

            $this->callHook('afterValidate');

            $data = $this->mutateFormDataBeforeSave($data);

            $this->callHook('beforeSave');

            $this->handleRecordUpdate($this->getRecord(), $data);

            $this->callHook('afterSave');

            // our additional
            $this->record->updateMeta(
                $this->metableData
            );
        } catch (Halt $exception) {
            return;
        }

        $this->getSavedNotification()?->send();

        if ($shouldRedirect && ($redirectUrl = $this->getRedirectUrl())) {
            $this->redirect($redirectUrl);
        }
    }

}

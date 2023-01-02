<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Pages\Actions;
use Filament\Support\Exceptions\Halt;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProductResource;

class EditProduct extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ProductResource::class;

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
        $data['price_idr']      = (int) $this->record->meta->price_idr;
        $data['price_euro']     = (int) $this->record->meta->price_euro;
        $data['offer_support']  = (bool) $this->record->meta->offer_support;
        $data['has_docs']       = (bool) $this->record->meta->has_docs;

        return $data;
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
            $this->record->setMeta(
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

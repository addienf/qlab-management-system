<?php

namespace App\Filament\Resources\SpesifikasiProductResource\Pages;

use App\Filament\Resources\SpesifikasiProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpesifikasiProduct extends EditRecord
{
    protected static string $resource = SpesifikasiProductResource::class;
    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            // Actions\ViewAction::make(),
            // Actions\DeleteAction::make(),
        ];
    }
}

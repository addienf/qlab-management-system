<?php

namespace App\Filament\Resources\SpesifikasiProductResource\Pages;

use App\Filament\Resources\SpesifikasiProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSpesifikasiProduct extends ViewRecord
{
    protected static string $resource = SpesifikasiProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
        ];
    }
}

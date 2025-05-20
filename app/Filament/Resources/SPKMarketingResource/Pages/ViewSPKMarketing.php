<?php

namespace App\Filament\Resources\SPKMarketingResource\Pages;

use App\Filament\Resources\SPKMarketingResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSPKMarketing extends ViewRecord
{
    protected static string $resource = SPKMarketingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

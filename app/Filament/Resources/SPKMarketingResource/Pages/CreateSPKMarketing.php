<?php

namespace App\Filament\Resources\SPKMarketingResource\Pages;

use App\Filament\Resources\SPKMarketingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSPKMarketing extends CreateRecord
{
    protected static string $resource = SPKMarketingResource::class;
    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

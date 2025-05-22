<?php

namespace App\Filament\Resources\SpesifikasiProductResource\Pages;

use App\Filament\Resources\SpesifikasiProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListSpesifikasiProducts extends ListRecords
{
    protected static string $resource = SpesifikasiProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('lihatFormPdf')
                ->label('Lihat Form PDF')
                ->url(SpesifikasiProductResource::getUrl('pdf'))
                ->openUrlInNewTab(true),
        ];
    }
}
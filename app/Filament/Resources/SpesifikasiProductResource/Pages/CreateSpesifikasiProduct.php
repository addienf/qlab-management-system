<?php

namespace App\Filament\Resources\SpesifikasiProductResource\Pages;

use App\Filament\Resources\SpesifikasiProductResource;
use App\Notifications\Sales\SpesifikasiProduct;
use Filament\Actions;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateSpesifikasiProduct extends CreateRecord
{
    protected static string $resource = SpesifikasiProductResource::class;
    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        $recipient = auth()->user();
        return Notification::make()
            ->title('Saved successfully')
            ->success()
            ->body('Changes to the post have been saved.')
            ->actions([
                Action::make('view')
                    ->button(),
            ])
            ->sendToDatabase($recipient);
    }

    protected function afterCreate(): void
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $user->notify(new SpesifikasiProduct());
    }
}

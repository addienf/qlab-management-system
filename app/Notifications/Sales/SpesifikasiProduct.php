<?php

namespace App\Notifications\Sales;

use App\Filament\Resources\SpesifikasiProductResource\Pages\ListSpesifikasiProducts;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SpesifikasiProduct extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Data Spesifikasi Product Berhasil Disimpan')
            ->greeting('Halo!')
            ->line('Data spesifikasi produk Anda telah berhasil disimpan ke dalam sistem kami.')
            ->action('Lihat Data Produk', ListSpesifikasiProducts::getUrl())
            ->line('Terima kasih telah menggunakan aplikasi kami!')
            ->salutation('Salam Hormat, PT Kinarya Sentosa');

    }

    // public function toDatabase(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //         ->subject('Data Spesifikasi Product Saved successfully')
    //         ->line('The introduction to the notification.')
    //         ->action('Notification Action', ListSpesifikasiProducts::getUrl())
    //         ->line('Thank you for using our application!');
    // }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
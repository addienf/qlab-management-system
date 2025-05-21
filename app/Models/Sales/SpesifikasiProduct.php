<?php

namespace App\Models\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpesifikasiProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department',
        'phone_number',
        'company_name',
        'company_address',
        'no_urs',
        'detail_spesification',
        'delivery_address',
        'pic_name',
        'pic_sign',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function productRequestItem()
    {
        return $this->hasMany(ProductRequesItem::class);
    }

    public function handleSignature(string $base64String, ?string $oldPath = null): string
    {
        if ($oldPath && Storage::disk('public')->exists($oldPath)) {
            Storage::disk('public')->delete($oldPath);
        }

        if (preg_match('/^data:image\/(png|jpe?g);base64,/', $base64String)) {
            $base64String = preg_replace('/^data:image\/(png|jpe?g);base64,/', '', $base64String);
        }

        $base64String = str_replace(' ', '+', $base64String);
        $imageData = base64_decode($base64String);

        $filename = 'signature_' . Str::random(10) . '.jpg';
        $relativePath = 'sales/spesifikasiProduct/signature' . $filename;

        Storage::disk('public')->put($relativePath, $imageData);

        return $relativePath;
    }

    protected static function booted(): void
    {
        static::deleting(function ($model) {
            if ($model->pic_sign && Storage::disk('public')->exists($model->pic_sign)) {
                Storage::disk('public')->delete($model->pic_sign);
            }
        });
    }
}

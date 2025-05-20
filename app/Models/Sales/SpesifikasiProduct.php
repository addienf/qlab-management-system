<?php

namespace App\Models\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'pic',
        'is_stock'
    ];

    // protected $casts = [
    //     'invoice_date' => 'date',
    // ];

    public function productRequestItem()
    {
        return $this->hasMany(ProductRequesItem::class);
    }
}

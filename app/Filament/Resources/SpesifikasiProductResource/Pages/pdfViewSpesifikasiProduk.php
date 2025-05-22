<?php

namespace App\Filament\Resources\SpesifikasiProductResource\Pages;

use App\Filament\Resources\SpesifikasiProductResource;
use Filament\Resources\Pages\Page;


class pdfViewSpesifikasiProduk extends Page
{
    protected static string $resource = SpesifikasiProductResource::class;

    protected static string $view = 'filament.resources.spesifikasi-product-resource.pages.pdf-view-spesifikasi-produk';
}
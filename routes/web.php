<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('filament.admin.auth.login');
});
Route::get('/spesifikasiProdukPDF', function () {
    return view('Sales.spesifikasiProdukPDF');
});
Route::get('/suratPerintahKerjaPDF', function () {
    return view('Sales.suratPerintahKerjaPDF');
});
Route::get('/incomingMaterialPDF', function () {
    return view('warehouse.incomingMaterialPDF');
});
Route::get('/formulirSerahTerimaBarangPDF', function () {
    return view('warehouse.formulirSerahTerimaBarangPDF');
});
Route::get('/formulirPermintaanBahanPDF', function () {
    return view('warehouse.formulirPermintaanBahanPDF');
});
Route::get('/formulirProdukMasukKeluarPDF', function () {
    return view('warehouse.formulirProdukMasukKeluarPDF');
});
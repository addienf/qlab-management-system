<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Permintaan Spesifikasi Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900 p-4 md:p-6">
    <div class="max-w-5xl mx-auto border border-gray-300 p-4 md:p-6 bg-white">
        <h2 class="text-center text-xl font-bold mb-6">
            Formulir Laporan Produk Jadi Masuk dan Keluar
        </h2>

        <!-- Header Table -->
        <div class="grid grid-cols-2 sm:grid-cols-5 gap-px border border-black mb-6 text-center text-sm">
            <!-- Logo -->
            <div class="border border-black row-span-2 flex items-center justify-center p-2 col-span-1 sm:col-span-1">
                <img src="asset/logo.png" alt="Logo" class="w-20 h-20 object-contain" />
            </div>

            <!-- Judul -->
            <div class="border border-black row-span-2 flex items-center justify-center col-span-1 sm:col-span-1">
                Formulir Laporan Produk Jadi Masuk dan Keluar
            </div>

            <!-- No Dokumen -->
            <div class="border border-black p-2 pt-6 col-span-2 sm:col-span-1">
                <div>No Dokumen:</div>
                <div class="font-semibold">XXXX</div>
            </div>

            <!-- Tanggal Rilis -->
            <div class="border border-black p-2 pt-6 col-span-2 sm:col-span-1">
                <div>Tanggal Rilis:</div>
                <div class="font-semibold">8 Mei 2025</div>
            </div>

            <!-- Revisi -->
            <div class="border border-black p-2 pt-6 col-span-2 sm:col-span-1">
                <div>Revisi:</div>
                <div class="font-semibold">13</div>
            </div>
        </div>
        <!-- Form Input: Kiri dan Kanan -->
        <h3 class="font-bold mb-3">A. Informasi Material</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
            <!-- Kolom Kiri -->
            <div class="space-y-3">
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium">Tanggal :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium">Penanggung Jawab :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
            </div>
        </div>
        <h3 class="font-bold mb-3 pt-6">B. Detail Laporan Produk</h3>
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse w-full text-sm text-center">
                <thead>
                    <tr class="bg-blue-200">
                        <th class="border border-gray-300 px-2 py-1">Nomor</th>
                        <th class="border border-gray-300 px-2 py-1">Nomor Produk</th>
                        <th class="border border-gray-300 px-2 py-1">Model/Type</th>
                        <th class="border border-gray-300 px-2 py-1">S/N</th>
                        <th class="border border-gray-300 px-2 py-1">Jenis Transaksi</th>
                        <th class="border border-gray-300 px-2 py-1">Jumlah</th>
                        <th class="border border-gray-300 px-2 py-1">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="border border-gray-300 px-2 py-1 h-10"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                    </tr>
                    <tr class="bg-blue-100">
                        <td class="border border-gray-300 px-2 py-1 h-10"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                        <td class="border border-gray-300 px-2 py-1"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 class="font-bold mb-3 pt-6">C. Syarat dan Ketentuan</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
            <!-- Kolom Kiri -->
            <div class="space-y-3">
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium">Total Produk Masuk :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium"> Total Produk Keluar :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium"> Sisa Stock :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
            </div>
    </div>
    <div class="flex justify-between mt-10">
        <!-- Kiri -->
        <div class="flex flex-col items-center">
            <div class="w-20 h-20 border border-black mb-2"></div>
            <p class="text-xs">Diserahkan Oleh</p>
            <p class="text-xs">Tanggal</p>
        </div>
    
        <!-- Kanan -->
        <div class="flex flex-col items-center">
            <div class="w-20 h-20 border border-black mb-2"></div>
            <p class="text-xs">Diterima Oleh</p>
            <p class="text-xs">Tanggal</p>
        </div>
    </div>
</body>
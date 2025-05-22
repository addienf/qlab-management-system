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
            Serah Terima Barang
        </h2>

        <!-- Header Table -->
        <div class="grid grid-cols-2 sm:grid-cols-5 gap-px border border-black mb-6 text-center text-sm">
            <!-- Logo -->
            <div class="border border-black row-span-2 flex items-center justify-center p-2 col-span-1 sm:col-span-1">
                <img src="asset/logo.png" alt="Logo" class="w-20 h-20 object-contain" />
            </div>

            <!-- Judul -->
            <div class="border border-black row-span-2 flex items-center justify-center col-span-1 sm:col-span-1">
                Serah Terima Barang
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
            <!-- Kolom Kiri -->
            <div class="space-y-3">
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium">Nomor :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium">Dari :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="space-y-3">
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium">Tanggal :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
                <div class="flex gap-4">
                    <label class="w-32 md:w-40 font-medium">Kepada :</label>
                    <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1" />
                </div>
            </div>
        </div>
        <div class="text-sm space-y-4 mt-6">
            <p>Dengan hormat.</p>
            <p>
                Berdasarkan Permintaan Barang No... dari Dept ..., Mohon bantuan untuk memenuhi kebutuhan bahan untuk sparepart
                dengan rincian sebagai berikut:
            </p>
        
            <div class="overflow-x-auto">
                <table class="table-auto border-collapse w-full text-sm text-center">
                    <thead>
                        <tr class="bg-blue-200">
                            <th class="border border-gray-300 px-2 py-1">Nomor</th>
                            <th class="border border-gray-300 px-2 py-1">Nama Bahan</th>
                            <th class="border border-gray-300 px-2 py-1">Spesifikasi</th>
                            <th class="border border-gray-300 px-2 py-1">Jumlah</th>
                            <th class="border border-gray-300 px-2 py-1">Keperluan Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="border border-gray-300 px-2 py-1 h-10"></td>
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
                        </tr>
                    </tbody>
                </table>
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
        </div> 
    </div>
</body>

</html>
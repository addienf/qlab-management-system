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
        <h2 class="text-center text-xl font-bold mb-6">Incoming Material & Serah Terima Barang</h2>

        <!-- Header Table -->
        <div class="grid grid-cols-2 sm:grid-cols-5 gap-px border border-black mb-6 text-center text-sm py">
            <div class="border border-black row-span-2 flex items-center justify-center p-2 col-span-1 sm:col-span-1">
                <img src="asset/logo.png" alt="Logo" class="w-20 h-20 object-contain" />
            </div>
            <div class="border border-black row-span-2 flex items-center justify-center col-span-1 sm:col-span-1">
                Incoming Material & Serah Terima Barang
            </div>
            <div class="border border-black p-2 pt-6 col-span-2 sm:col-span-1">
                <div>No Dokumen:</div>
                <div class="font-semibold">XXXX</div>
            </div>
            <div class="border border-black p-2 pt-6 col-span-2 sm:col-span-1">
                <div>Tanggal Rilis:</div>
                <div class="font-semibold">8 Mei 2025</div>
            </div>
            <div class="border border-black p-2 pt-6 col-span-2 sm:col-span-1">
                <div>Revisi:</div>
                <div class="font-semibold">13</div>
            </div>
        </div>
        <div class="space-y-3 text-sm">
            <div class="flex gap-4">
                <label class="w-40 font-medium">No :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
            <div class="flex gap-4">
                <label class="w-40 font-medium">Nama :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
        </div>
        <div class="overflow-x-auto pt-6">
            <h3 class="font-bold mb-3">A. Informasi Material</h3>
            <table class="min-w-full border border-gray-300 text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Nomor</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Material</th>
                        <th class="border border-gray-300 px-4 py-2">Batch No</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah Diterima</th>
                        <th class="border border-gray-300 px-4 py-2">Satuan</th>
                        <th class="border border-gray-300 px-4 py-2">Kondisi Material</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">Produk A</td>
                        <td class="border border-gray-300 px-4 py-2">10</td>
                        <td class="border border-gray-300 px-4 py-2">URS-001</td>
                        <td class="border border-gray-300 px-4 py-2">10</td>
                        <td class="border border-gray-300 px-4 py-2">Baik</td>
                        <td class="border border-gray-300 px-4 py-2">Oke</td>
                    </tr>
                    <!-- Tambahkan baris lainnya -->
                </tbody>
            </table>
        </div>
        <div class="grid grid-cols-2 gap-6 text-sm mt-10">
            <!-- Kiri -->
            <div class="flex flex-col justify-between">
                <div class="space-y-4">
                    <div>
                        <h3 class="font-bold">B. Pemeriksaan Material</h3>
                        <p class="mb-1">Kondisi Material</p>
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-4 h-4 bg-blue-500 border border-black"></div>
                            <span>Ya</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 border border-black"></div>
                            <span>Tidak</span>
                        </div>
                    </div>
        
                    <div>
                        <h3 class="font-bold">C. Status Penerimaan</h3>
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-4 h-4 bg-blue-500 border border-black"></div>
                            <span>Diterima</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 border border-black"></div>
                            <span>Ditolak atau dikembalikan</span>
                        </div>
                    </div>
                </div>
        
                <!-- QR Placeholder kiri -->
                <div class="flex flex-col items-center mt-10">
                    <div class="w-20 h-20 border border-black mb-2"></div>
                    <p class="text-xs">Diserahkan Oleh</p>
                </div>
            </div>
        
            <!-- Kanan -->
            <div class="flex flex-col justify-between">
                <div>
                    <h3 class="font-bold">D. Dokumen Pendukung</h3>
                    <div class="mt-2 border border-gray-400 rounded-md p-4 flex items-center gap-3 max-w-sm">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-100 border border-gray-300">
                            <span class="text-xs font-bold">PDF</span>
                        </div>
                        <span>ABC.pdf</span>
                    </div>
                </div>
        
                <!-- QR Placeholder kanan -->
                <div class="flex flex-col items-center mt-10">
                    <div class="w-20 h-20 border border-black mb-2"></div>
                    <p class="text-xs">Diterima Oleh</p>
                </div>
            </div>    </div>
    </div>
    
</body>
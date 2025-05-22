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
        <h2 class="text-center text-xl font-bold mb-6">Surat Perintah Kerja</h2>

        <!-- Header Table -->
        <div class="grid grid-cols-2 sm:grid-cols-5 gap-px border border-black mb-6 text-center text-sm">
            <div class="border border-black row-span-2 flex items-center justify-center p-2 col-span-1 sm:col-span-1">
                <img src="asset/logo.png" alt="Logo" class="w-20 h-20 object-contain" />
            </div>
            <div class="border border-black row-span-2 flex items-center justify-center col-span-1 sm:col-span-1">
                Surat Perintah Kerja
            </div>
            <div class="border border-black p-2 pt-6 col-span-2 sm:col-span-1 ">
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

        <!-- Form Kiri-Kanan -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-3 text-sm mb-6">
            <div class="flex flex-col md:flex-row gap-2 md:gap-4 items-start md:items-center">
                <label class="md:w-40 font-medium">No :</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1 flex-1" />
            </div>
            <div class="flex flex-col md:flex-row gap-2 md:gap-4 items-start md:items-center">
                <label class="md:w-40 font-medium">Nama :</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1 flex-1" />
            </div>
            <div class="flex flex-col md:flex-row gap-2 md:gap-4 items-start md:items-center">
                <label class="md:w-40 font-medium">Department :</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1 flex-1" />
            </div>
            <div class="flex flex-col md:flex-row gap-2 md:gap-4 items-start md:items-center">
                <label class="md:w-40 font-medium">Phone Number :</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1 flex-1" />
            </div>
            <div class="flex flex-col md:flex-row gap-2 md:gap-4 items-start md:items-center">
                <label class="md:w-40 font-medium">Company Name :</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1 flex-1" />
            </div>
            <div class="flex flex-col md:flex-row gap-2 md:gap-4 items-start md:items-center">
                <label class="md:w-40 font-medium">Company Address :</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1 flex-1" />
            </div>
        </div>

        <!-- Tabel Produk -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Nomor</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Produk</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah Pesanan</th>
                        <th class="border border-gray-300 px-4 py-2">No URS</th>
                        <th class="border border-gray-300 px-4 py-2">Rencana Pengiriman</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">Produk A</td>
                        <td class="border border-gray-300 px-4 py-2">10</td>
                        <td class="border border-gray-300 px-4 py-2">URS-001</td>
                        <td class="border border-gray-300 px-4 py-2">10 Juni 2025</td>
                    </tr>
                    <!-- Tambahkan baris lainnya -->
                </tbody>
            </table>
        </div>
        <div class="mt-10 text-sm">
            <p class="mb-4">*Salinan URS Wajib diberikan kepada Departemen Produksi</p>
            <div class="flex justify-between items-start gap-4">
                <!-- Kiri -->
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 border border-black mb-2"></div>
                    <p>Yang Membuat</p>
                    <p class="mt-1 font-semibold">Marketing</p>
                </div>
                <!-- Kanan -->
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 border border-black mb-2"></div>
                    <p>Yang Menerima</p>
                    <p class="mt-1 font-semibold">Produksi</p>
                </div>
            </div>   
        </div>
    </div>
</body>

</html>
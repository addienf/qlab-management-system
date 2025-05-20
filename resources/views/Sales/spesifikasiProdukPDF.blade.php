<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Permintaan Spesifikasi Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900 p-6">
    <div class="max-w-4xl mx-auto border border-gray-300 p-6 bg-white">
        <h2 class="text-center text-xl font-bold mb-6">Detail Permintaan Spesifikasi Produk</h2>

        <!-- Header Table -->
        <div class="grid grid-cols-5 gap-px border border-black mb-6 text-center text-sm">
            <div class="border border-black row-span-2 flex items-center justify-center p-2">
                <img src="logo.png" alt="Logo" class="w-12 h-12 object-contain">
            </div>
            <div class="border border-black col-span-1 row-span-2 flex items-center justify-center">
                Surat Perintah Kerja
            </div>
            <div class="border border-black col-span-1 p-2">
                <div>No Dokumen:</div>
                <div class="font-semibold">XXXX</div>
            </div>
            <div class="border border-black col-span-1 p-2">
                <div>Tanggal Rilis:</div>
                <div class="font-semibold">8 Mei 2025</div>
            </div>
            <div class="border border-black col-span-1 p-2">
                <div>Revisi:</div>
                <div class="font-semibold">0</div>
            </div>
        </div>

        <!-- Form -->
        <div class="space-y-3 text-sm">
            <div class="flex gap-4">
                <label class="w-40 font-medium">No :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
            <div class="flex gap-4">
                <label class="w-40 font-medium">Nama :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
            <div class="flex gap-4">
                <label class="w-40 font-medium">Department :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
            <div class="flex gap-4">
                <label class="w-40 font-medium">Phone Number :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
            <div class="flex gap-4">
                <label class="w-40 font-medium">Company Name :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
            <div class="flex gap-4">
                <label class="w-40 font-medium">Company Address :</label>
                <input type="text" class="flex-1 border border-gray-300 rounded px-2 py-1">
            </div>
        </div>

        <!-- Item Request -->
        <h3 class="font-semibold text-base mt-6 mb-2">Item Request :</h3>

        <div class="grid grid-cols-2 gap-4 text-sm">
            <div>
                <label class="block mb-1">Nama Item</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <div>
                <label class="block mb-1">Quantity</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <div>
                <label class="block mb-1">Temperature</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <div>
                <label class="block mb-1">Detail Information</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <div>
                <label class="block mb-1">Humidity</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <div>
                <label class="block mb-1">Detail Spesification</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <div class="col-span-2">
                <label class="block mb-1">Room Dimension</label>
                <input type="text" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
        </div>

        <div class="mt-10">
            <label class="block text-sm font-medium mb-2">Penanggung Jawab</label>
            <div
                class="right-2 w-24  h-20 border border-gray-400 rounded bg-white flex items-center justify-center text-xs text-gray-500">
                Paraf     
            </div>
            <label class="block text-sm font-medium mb-2">Tanggal</label>
        </div>
        
</body>
<div class="mt-6 text-right">
    <button onclick="window.print()"
        class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        <!-- Heroicon: Desktop Computer -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M4 3a1 1 0 00-1 1v9a1 1 0 001 1h5v2H7a1 1 0 100 2h6a1 1 0 100-2h-2v-2h5a1 1 0 001-1V4a1 1 0 00-1-1H4z" />
        </svg>
        Print
    </button>
</div>
</html>
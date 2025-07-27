@extends('admin.layouts.admin')

@section('title', 'Tambah Kendaraan Rental')

@section('content')
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Kendaraan Rental</h2>

    <form action="{{ route('rents.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Kendaraan</label>
            <input required type="text" name="name" id="name" placeholder="Contoh: Avanza 2022"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">Tipe Kendaraan</label>
            <select name="type" id="type"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
                <option value="mobil">Mobil</option>
                <option value="motor">Motor</option>
            </select>
        </div>

        <div>
            <label for="brand" class="block text-sm font-medium text-gray-700">Merk</label>
            <input required type="text" name="brand" id="brand" placeholder="Contoh: Honda"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="plate" class="block text-sm font-medium text-gray-700">Plat Nomor</label>
            <input required type="text" name="plate" id="plate" placeholder="Contoh: B 1234 AB"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Harga Sewa</label>
            <input required type="number" name="price" id="price" placeholder="Contoh: 150000"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea required name="description" id="description" rows="3" placeholder="Deskripsi kendaraan..."
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none"></textarea>
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar Kendaraan</label>
            <input required type="file" name="image" id="image"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
                <option value="tersedia">Tersedia</option>
                <option value="disewa">Disewa</option>
                <option value="maintenance">Maintenance</option>
            </select>
        </div>

        <div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
@endsection

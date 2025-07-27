@extends('admin.layouts.admin')

@section('title', 'Tambah Property')

@section('content')
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Property</h2>

    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Nama Property</label>
            <input required  type="text" name="title" id="title" placeholder="Masukkan nama property"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>


        <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Lokasi</label>
            <input required  type="text" name="address" id="address" placeholder="Masukkan lokasi"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea required  name="description" id="description" rows="4" placeholder="Masukkan deskripsi"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none"></textarea>
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
            <input required  type="number" name="price" id="price" placeholder="Masukkan harga"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
            <input required type="file" name="image" id="image"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
@endsection

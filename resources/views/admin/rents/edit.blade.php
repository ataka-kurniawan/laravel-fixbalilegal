@extends('admin.layouts.admin')

@section('title', 'Edit Kendaraan Rental')

@section('content')
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Kendaraan Rental</h2>

    <form action="{{ route('rents.update', $rent->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Kendaraan</label>
            <input required type="text" name="name" id="name" value="{{ old('name', $rent->name) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">Tipe Kendaraan</label>
            <select name="type" id="type"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
                <option value="mobil" {{ $rent->type == 'mobil' ? 'selected' : '' }}>Mobil</option>
                <option value="motor" {{ $rent->type == 'motor' ? 'selected' : '' }}>Motor</option>
            </select>
        </div>

        <div>
            <label for="brand" class="block text-sm font-medium text-gray-700">Merk</label>
            <input  required type="text" name="brand" id="brand" value="{{ old('brand', $rent->brand) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="plate" class="block text-sm font-medium text-gray-700">Plat Nomor</label>
            <input  required type="text" name="plate" id="plate" value="{{ old('plate', $rent->plate) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Harga Sewa</label>
            <input required type="number" name="price" id="price" value="{{ old('price', $rent->price) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea required name="description" id="description" rows="3"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">{{ old('description', $rent->description) }}</textarea>
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar Kendaraan</label>
            @if ($rent->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $rent->image) }}" alt="Gambar Kendaraan" class="h-24 w-auto rounded">
                </div>
            @endif
            <input required  type="file" name="image" id="image"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
                <option value="tersedia" {{ $rent->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="disewa" {{ $rent->status == 'disewa' ? 'selected' : '' }}>Disewa</option>
                <option value="maintenance" {{ $rent->status == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
            </select>
        </div>

        <div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
@endsection

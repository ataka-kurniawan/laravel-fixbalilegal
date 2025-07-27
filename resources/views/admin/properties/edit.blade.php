@extends('admin.layouts.admin')

@section('title', 'Edit Property')

@section('content')
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Property</h2>

    <form action="{{ route('properties.update', $property->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Nama Property</label>
            <input required  type="text" name="title" id="title" value="{{ old('title', $property->title) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Lokasi</label>
            <input required  type="text" name="address" id="address" value="{{ old('address', $property->address) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea required  name="description" id="description" rows="4"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">{{ old('description', $property->description) }}</textarea>
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
            <input required  type="number" name="price" id="price" value="{{ old('price', $property->price) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
            @if ($property->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" class="h-32 w-48 object-cover rounded">
                </div>
            @endif
            <input type="file" name="image" id="image"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
            <p class="text-sm text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</p>
        </div>

        <div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
@endsection

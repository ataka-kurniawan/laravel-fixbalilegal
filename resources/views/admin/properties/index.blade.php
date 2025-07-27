@extends('admin.layouts.admin')

@section('title', 'Kelola Properti')

@section('content')
<x-alert-success />
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-blue-800">Kelola Properti</h2>
            <a href="{{ route('properties.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                + Tambah Properti
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Gambar</th>
                        <th class="py-2 px-4 text-left">Judul</th>
                        <th class="py-2 px-4 text-left">Harga</th>
                        <th class="py-2 px-4 text-left">Alamat</th>
                        <th class="py-2 px-4 text-left">Deskripsi</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($properties as $property)
                        <tr class="border-t">
                            <td class="py-2 px-4">
                                <img src="{{ asset('storage/' . $property->image) }}" alt="Gambar"
                                    class="h-16 w-24 object-cover rounded">
                            </td>
                            <td class="py-2 px-4">{{ $property->title }}</td>
                            <td class="py-2 px-4">Rp{{ number_format($property->price) }}</td>
                            <td class="py-2 px-4">{{ $property->address }}</td>
                            <td class="py-2 px-4">{{ Str::limit(strip_tags($property->description), 50) }}</td>
                            <td class="py-2 px-4 space-x-2">
                                <a href="{{ route('properties.edit', $property->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('properties.destroy', $property->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus properti ini?')" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('admin.layouts.admin')

@section('title', 'kelola rental')

@section('content')
<x-alert-success />
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-blue-800">Kelola Rental</h2>
            <a href="{{ route('rents.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">+ Tambah
                Rental</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Gambar</th>
                        <th class="py-2 px-4 text-left">Nama</th>
                        <th class="py-2 px-4 text-left">Jenis</th>
                        <th class="py-2 px-4 text-left">Merek</th>
                        <th class="py-2 px-4 text-left">Plat</th>
                        <th class="py-2 px-4 text-left">Harga</th>
                        <th class="py-2 px-4 text-left">Status</th>
                        <th class="py-2 px-4 text-left">Deskripsi</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rents as $rent)
                        <tr class="border-t">


                            <td class="py-2 px-4">
                                <img src="{{ asset('storage/' . $rent->image) }}" alt="Kendaraan"
                                    class="h-16 w-24 object-cover rounded">
                            </td>

                            <td class="py-2 px-4">{{ $rent->name }}</td>
                            <td class="py-2 px-4">{{ $rent->type }}</td>
                            <td class="py-2 px-4">{{ $rent->brand }}</td>
                            <td class="py-2 px-4">{{ $rent->plate }}</td>
                            <td class="py-2 px-4">{{ $rent->price }}</td>
                            <td class="py-2 px-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs bg-green-200 text-green-800 rounded">{{ $rent->status }}</span>
                            </td>
                            <td class="py-2 px-4">{{ $rent->description }}</td>
                            <td class="py-2 px-4 space-x-2">
                                <a href="{{ route('rents.edit', $rent->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('rents.destroy', $rent->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>

                            </td>


                        </tr>
                    @endforeach
                    <!-- Tambahkan baris lain sesuai data -->
                </tbody>
            </table>
        </div>
    </div>



@endsection

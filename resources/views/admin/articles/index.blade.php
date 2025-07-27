@extends('admin.layouts.admin')

@section('title', 'kelola Artikel')

@section('content')
<x-alert-success />

    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-blue-800">Kelola Artikel</h2>
            <a href="{{ route('articles.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">+ Tambah
                Artikel</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Gambar</th>
                        <th class="py-2 px-4 text-left">Judul</th>
                        <th class="py-2 px-4 text-left">Slug</th>
                        <th class="py-2 px-4 text-left">Konten</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr class="border-t">


                            <td class="py-2 px-4">
                                <img src="{{ asset('storage/' . $article->image) }}" alt="Kendaraan"
                                    class="h-16 w-24 object-cover rounded">
                            </td>

                            <td class="py-2 px-4">{{ $article->title }}</td>
                            <td class="py-2 px-4">{{ $article->slug }}</td>
                            <td class="py-2 px-4">{{ $article->content }}</td>
                            <td class="py-2 px-4 space-x-2">
                                <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
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

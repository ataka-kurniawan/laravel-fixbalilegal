@extends('admin.layouts.admin')

@section('title', 'Tambah Artikel')

@section('content')
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Artikel</h2>

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Judul Artikel</label>
            <input required type="text" name="title" id="title" placeholder="Masukan Judul Artikel"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>



        <div>
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input required  type="text" name="slug" id="slug" placeholder="Masukan Slug Artikel"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
            <textarea required  name="content" id="content" rows="6" placeholder="Masukkan konten artikel"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none"></textarea>
        </div>


        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
            <input required  type="file" name="image" id="image"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>


        <div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
@endsection

@extends('admin.layouts.admin')

@section('title', 'Edit Artikel')

@section('content')
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Artikel</h2>

    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Judul Artikel</label>
            <input required  type="text" name="title" id="title" value="{{ old('title', $article->title) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>



        <div>
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input required  type="text" name="slug" id="slug" value="{{ old('slug', $article->slug) }}"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Konten Artikel</label>
            <textarea required  name="content" id="content" rows="6"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">{{ old('content', $article->content) }}</textarea>
        </div>



        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
            @if ($article->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="Gambar Kendaraan" class="h-24 w-auto rounded">
                </div>
            @endif
            <input  type="file" name="image" id="image"
                class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
@endsection

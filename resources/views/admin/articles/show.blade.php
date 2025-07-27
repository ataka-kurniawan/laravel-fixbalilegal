@extends('layouts.app')
@section('title', $article->title)

@section('content')
<section class="container mx-auto px-4 py-16 max-w-3xl">
    <!-- Judul dan Slug -->
    <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">{{ $article->title }}</h1>
        <p class="text-sm text-gray-500">{{ $article->slug }}</p>
    </div>

    <!-- Gambar -->
    <div class="mb-10">
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full max-h-[400px] object-cover mx-auto rounded-lg shadow">
    </div>

    <!-- Konten -->
    <div class="prose max-w-none text-gray-700 leading-relaxed">
        {!! nl2br(e($article->content)) !!}

    </div>
</section>
@endsection

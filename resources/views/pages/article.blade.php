@extends('layouts.app')
@section('title','article')
    
@section('content')
<!-- Hero / Banner -->
<x-header2 path="cover3.jpg" subtitle="Get the latest tips and updates about lifestyle, property, and transportation" title="Article And News"/>
<!-- Daftar Artikel -->
<section class="container mx-auto px-4 py-16">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
    @foreach ($articles as $article)
        
   
     <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-56 object-cover">

                <div class="p-5">
                    <span class="text-sm text-gray-500">{{ $article->created_at->format('d M Y') }}</span>
                    <h2 class="text-2xl font-bold text-gray-800 mt-2 mb-2 hover:text-blue-600 transition">
                        {{ $article->title }}
                    </h2>
                    
                    {{-- Konten dipotong maksimal 200 karakter --}}
                    <p class="text-gray-600 mb-4">
                        {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 200, '...') }}
                    </p>
                    
                    <a href="{{ route('articles.show', $article->slug) }}" class="text-blue-600 font-semibold hover:underline">
                       Read More →
                    </a>
                </div>
            </div>
     @endforeach

 

  </div>
</section>

    
@endsection
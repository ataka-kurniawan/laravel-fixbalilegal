@extends('layouts.app')
@section('title', $property->title)

@section('content')
<section class="container mx-auto px-4 py-16 max-w-6xl">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
        <!-- Gambar (Kiri) -->
        <div class="w-full">
            <img src="{{ asset('storage/' . $property->image) }}" 
                 alt="{{ $property->title }}" 
                 class="w-full max-h-[500px] object-cover rounded-lg shadow">
        </div>

        <!-- Detail Properti (Kanan) -->
        <div class="space-y-6">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">{{ $property->title }}</h1>
            <p class="text-gray-500 text-sm">{{ $property->address }}</p>

            <div class="text-2xl font-semibold text-blue-600">
                Rp {{ number_format($property->price, 0, ',', '.') }}
            </div>

            <div class="prose max-w-none text-gray-700">
                {!! nl2br(e($property->description)) !!}
            </div>

            <!-- Tombol Hubungi Kami -->
            <div>
                <a href="https://wa.link/teopvc"
                                class="inline-flex items-center bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi Kami
                            </a>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.app')

@section('title', $rent->name)

@section('content')
<section class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
        <!-- Gambar -->
        <div class="w-full">
            <img src="{{ asset('storage/' . $rent->image) }}" alt="{{ $rent->name }}" class="rounded-xl w-full object-cover h-[400px]">
        </div>

        <!-- Detail -->
        <div class="space-y-4">
            <h1 class="text-3xl font-bold text-gray-800">{{ $rent->name }}</h1>

            <div class="text-gray-600">
                <p><strong>Type:</strong> {{ $rent->type }}</p>
                <p><strong>Brand:</strong> {{ $rent->brand }}</p>
                <p><strong>Plate:</strong> {{ $rent->plate }}</p>
                <p><strong>Status:</strong> 
                    @if ($rent->status == 'available')
                        <span class="text-green-600 font-semibold">Tersedia</span>
                    @else
                        <span class="text-red-600 font-semibold">Tidak Tersedia</span>
                    @endif
                </p>
                <p><strong>Harga Sewa:</strong> Rp {{ number_format($rent->price, 0, ',', '.') }} / hari</p>
            </div>

            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-2">Deskripsi</h2>
                <p class="text-gray-700">{{ $rent->description }}</p>
            </div>

            <!-- Tombol Hubungi -->
            <div class="mt-8">
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($rent->name) }}" 
                   target="_blank" 
                   class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-xl transition">
                    <i class="fa-brands fa-whatsapp mr-2"></i> Hubungi kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

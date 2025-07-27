@extends('layouts.app')
@section('title', 'Motorbike & Car Rental')

@section('content')

    <!-- Header -->
    <x-header2
        subtitle="Rent a vehicle at an affordable price with well-maintained fleets for your daily needs, tourism, or business."
        title="Motorbike & Car Rental" path="cover.jpg" />
    <!-- Badges Kategori -->
    <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Choose Vehicle Type</h2>
        <div class="flex justify-center gap-6">
            <a href="{{ route('rents.filter', ['type' => 'all']) }}"> <span
                    class="px-5 py-2 rounded-full bg-gray-600 text-white font-medium flex items-center gap-2 ring-2 ring-blue-400 hover:ring-offset-2 hover:bg-gray-700 transition cursor-pointer">
                    <i class="fas fa-layer-group "></i>All
                </span></a>
            <a href="{{ route('rents.filter', ['type' => 'mobil']) }}"> <span
                    class="px-5 py-2 rounded-full bg-blue-600 text-white font-medium flex items-center gap-2 ring-2 ring-blue-400 hover:ring-offset-2 hover:bg-blue-700 transition cursor-pointer">
                    <i class="fas fa-car"></i> Car
                </span></a>
            <a href="{{ route('rents.filter', ['type' => 'motor']) }}"><span
                class="px-5 py-2 rounded-full bg-green-600 text-white font-medium flex items-center gap-2 ring-2 ring-green-400 hover:ring-offset-2 hover:bg-green-700 transition cursor-pointer">
                <i class="fas fa-motorcycle"></i> Motorbike
            </span></a>
        </div>
    </div>

    <!-- Section Card Kendaraan -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4" data-aos="fade-up" data-aos-duration="2000">
            <div class="grid md:grid-cols-3 gap-10">

                @foreach ($rents as $rent)
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-transform transform hover:scale-105 relative">
                        <img src="{{ asset('storage/' . $rent->image) }}" alt="{{ $rent->vehicle_name }}"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-3 left-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">{{ $rent->type }}</span>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold mb-1"><a
                                    href="{{ route('rents.show', $rent->id) }}">{{ $rent->name }}</a></h3>
                            <p class="text-sm text-gray-500 mb-2">{{ $rent->price }}/ hari</p>
                            <p class="text-gray-600 text-sm mb-4">{{ $rent->description }}</p>
                            <a href="https://wa.link/teopvc"
                                class="inline-flex items-center bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                                <i class="fab fa-whatsapp mr-2"></i> Pesan Sekarang
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>

@endsection

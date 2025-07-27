@extends('layouts.app')
@section('title', 'Property')
@section('content')
    <!-- Banner / Hero -->
    <x-header2 path="cover2.jpg"
        subtitle="Find a wide selection of houses, land, and apartments at the best prices and strategic locations."
        title="Property Sales" />


    <!-- Daftar Properti -->
    <section class="container mx-auto px-4 py-16">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Latest Property Listings</h2>
            <p class="text-gray-500 max-w-xl mx-auto">We offer quality property options for your personal needs or long-term investments.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up" data-aos-duration="2000">
            @foreach ($properties as $property)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                   <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="w-full h-56 object-cover">

                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{$property->title}}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{$property->description}}</p>
                        <a href="{{ route('properties.show', $property->id) }}" class="text-blue-600 font-semibold hover:underline">Lihat Detail →</a>
                    </div>
                </div>
            @endforeach



        </div>
    </section>




@endsection

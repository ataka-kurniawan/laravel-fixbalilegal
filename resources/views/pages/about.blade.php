@extends('layouts.app')

@section('title', 'About-Us')

@section('content')
    {{-- Header Section --}}
    <x-header page="About Us" title="ABOUT US" />

    {{-- Section: Tentang Kami, Visi & Misi --}}
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">
            {{-- Kiri: Gambar --}}
            <div data-aos="fade-right" data-aos-duration="1000" class="-my-15">
                <img src="/images/about.png" alt="Tentang Kami" class="">
            </div>

            {{-- Kanan: Konten --}}
            <div data-aos="fade-left" data-aos-duration="1000">
                <h3 class="text-2xl font-bold text-blue-700 mb-4">About Us</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    We are a team of professionals focused on legal business services such as establishing PT, CV, and
                    handling other legal documents.
                    We believe that legality is a crucial foundation for sustainable and healthy business growth.
                </p>

                <h4 class="text-xl font-semibold text-gray-800 mb-2"><i class="fas fa-eye text-blue-500 mr-2"></i>Vision
                </h4>
                <p class="text-gray-600 mb-4">
                    To become a trusted legal firm that makes legal services more accessible with high professionalism.
                </p>

                <h4 class="text-xl font-semibold text-gray-800 mb-2"><i
                        class="fas fa-bullseye text-blue-500 mr-2"></i>Mission
                </h4>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <li>Provide legal business services that are easy, fast, and reliable.
                    </li>
                    <li>Prioritize integrity and clarity in every process.</li>
                    <li>Educate entrepreneurs in Indonesia about legal knowledge.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h3 class="text-2xl font-bold text-blue-700 mb-10">Why Choose Us?</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <i class="fas fa-balance-scale text-3xl text-blue-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Professional</h4>
                    <p class="text-gray-600">Experienced team in business and property law.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <i class="fas fa-clock text-3xl text-blue-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Fast & Efficient</h4>
                    <p class="text-gray-600">Quick service without compromising legal quality.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <i class="fas fa-shield-alt text-3xl text-blue-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Safe & Trusted</h4>
                    <p class="text-gray-600">Official documents and processes in accordance with applicable law.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- Section: Call To Action --}}
    <x-cta />








@endsection

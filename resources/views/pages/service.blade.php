@extends('layouts.app')

@section('title', 'Service')

@section('content')
    <x-header page="Service" title="OUR SERVICES" />

    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            {{-- Section Title --}}
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="1000">
                <h2  class="text-sm text-blue-600 font-semibold uppercase tracking-wide mb-2">What We Offer</h2>
                <p class="text-3xl font-bold text-gray-800">OUR SERVICES</p>
            </div>

            {{-- Card Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-duration="3000">
                <!-- Layanan 1 -->
                <x-service-card 
                    icon="fas fa-gavel" 
                    title="PT & CV Establishment"
                    desc="Comprehensive services for establishing PTs, CVs, and other legal documents." 
                />

                <x-service-card 
                    icon="fas fa-file-signature" 
                    title="Business Licensing"
                    desc="Assistance with licenses such as NIB, SIUP, and other legal permits quickly and legally." 
                />

                <x-service-card 
                    icon="fas fa-home" 
                    title="Property Legalization"
                    desc="Handling of certificates, sale and purchase deeds (AJB), building permits (IMB), and other official property documents" 
                />

                <x-service-card 
                    icon="fas fa-globe" 
                    title="Services for Foreigners"
                    desc="KITAS processing, stay permits, and legal documents for expatriates in Bali." 
                />

                <x-service-card 
                    icon="fas fa-hand-holding-heart" 
                    title="Foundation Legalization"
                    desc="stablishment and legalization of foundations or non-profit organizations officially and safely." 
                />

                <x-service-card 
                    icon="fas fa-scale-balanced" 
                    title="Legal Consultation"
                    desc="Business and property legal consultation by professional and trusted experts." 
                />
            </div>

            {{-- CTA Button --}}
            <div class="text-center mt-12">
                <a href="https://wa.link/teopvc" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full text-sm font-semibold transition duration-300">
                   Get a Free Consultation Now <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection

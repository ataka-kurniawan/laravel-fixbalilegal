@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- hero section --}}
    <section class="relative bg-cover bg-center bg-no-repeat h-[80vh]" style="background-image: url('/images/hero.jpg');"
        data-aos="fade-up" data-aos-duration="3000">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-blue-500/60"></div>

        <!-- Konten utama -->
        <div class="relative z-10 flex items-center justify-center h-full text-white text-center px-4">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Trusted Legal and Property Solutions in Bali</h1>
                <p class="text-lg md:text-xl mb-6">rom handling legal documents to buying/selling property and vehicle
                    rentals — we are here to assist all your needs safely and easily in Bali.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/service" class="bg-blue-600 text-white hover:bg-blue-800 px-6 py-3 rounded-full font-medium">
                        View Services
                    </a>

                    <a href="https://wa.link/teopvc"
                        class="bg-white hover:bg-gray-300 text-blue-500 px-6 py-3 rounded-full font-medium">
                        Contact Us
                    </a>

                </div>
            </div>
        </div>
    </section>




    <!-- Card Section (Floating Cards) -->
    <section class="relative z-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="-mt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-blue-800 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300"
                    data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-xl md:text-2xl font-semibold mb-2">Guaranteed Legality</div>
                    <p class="text-sm md:text-base">Our company is officially registered with the OJK and holds a valid
                        business license.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-blue-800 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300"
                    data-aos="fade-up" data-aos-duration="2000">
                    <div class="text-xl md:text-2xl font-semibold mb-2">Transaction Security</div>
                    <p class="text-sm md:text-base">We guarantee data protection and transparency in every customer
                        transaction.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-blue-800 text-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300"
                    data-aos="fade-up" data-aos-duration="3000">
                    <div class="text-xl md:text-2xl font-semibold mb-2">Officially Verified</div>
                    <p class="text-sm md:text-base">Our office address, organizational structure, and all operations have
                        been verified by the relevant authorities.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- About Us Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <!-- Konten Kiri -->
            <div data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">About Us</h2>
                <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                    We are a leading legal and property services company in Bali, dedicated to helping you manage various
                    administrative and property-related needs professionally and reliably. With years of experience and a
                    team of experts, we ensure every process runs smoothly, quickly, and securely.
                </p>
                <a href="/tentang-kami"
                    class="inline-block bg-blue-800 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-900 transition duration-300">
                    Learn More
                </a>
            </div>

            <!-- Gambar Kanan -->
            <div data-aos="fade-left" data-aos-duration="1000" class="flex justify-center">
                <img src="/images/about-us.png" alt="Tentang Kami" class="rounded-xl w-full max-w-md md:max-w-full">
            </div>
        </div>
    </section>

    <!-- Section konten lanjutan -->
    <section class="py-16 bg-gray-100" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up" data-aos-duration="2000">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">Our Services </h2>
                <p class="mt-4 text-gray-600 text-sm sm:text-base">
                    We provide trusted and secure services to meet your legal and transaction needs.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-duration="3000">
                <!-- Layanan 1 -->
                <x-service-card icon="fas fa-gavel" title="Company Establishment (PT & CV)"
                    desc="Complete service for establishing PT, CV, and other legal documents." />

                <x-service-card icon="fas fa-file-signature" title="Business Licensing"
                    desc="Assistance with business permits such as NIB, SIUP, and others quickly and legally." />

                <x-service-card icon="fas fa-home" title="Property Legality"
                    desc="Handling of certificates, AJB, IMB, and official property documents." />

                <x-service-card icon="fas fa-globe" title="Services for Foreigners"
                    desc="KITAS services, residence permits, and legal documents for expatriates in Bali." />

                <x-service-card icon="fas fa-hand-holding-heart" title="Foundation Legality"
                    desc="Official and safe processing for establishing and legalizing foundations or non-profit organizations." />

                <x-service-card icon="fas fa-scale-balanced" title="Legal Consultation"
                    desc="Business and property legal consultations by professional and trusted experts." />

            </div>
        </div>
    </section>

    {{-- Section: Kenapa Memilih Kami --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Image -->
            <div class="w-full" data-aos="fade-right" data-aos-duration="1000">
                <img src="/images/choose.png" alt="Kenapa Memilih Kami" class="w-full rounded-xl ">
            </div>

            <!-- Right Content -->
            <div data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-6">Why Choose Us</h2>
                <p class="text-gray-600 text-lg mb-6">
                    We are your trusted partner for legal and property matters in Bali. Prioritizing integrity, experience,
                    and quality service.
                </p>

                <div class="space-y-6">
                    <!-- Item 1 -->
                    <div class="flex items-start space-x-4">
                        <div class="text-blue-600 text-3xl">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-800">Official Legality</h3>
                            <p class="text-gray-600 text-sm">We are officially registered and trusted by national and
                                international clients.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start space-x-4">
                        <div class="text-blue-600 text-3xl">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-800">Professional Team</h3>
                            <p class="text-gray-600 text-sm">Our team of experienced legal and property experts is ready to
                                assist you to the fullest.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex items-start space-x-4">
                        <div class="text-blue-600 text-3xl">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-800">Transparency & Trust</h3>
                            <p class="text-gray-600 text-sm">Open and professional processes that build long-term trust
                                with clients.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="flex items-start space-x-4">
                        <div class="text-blue-600 text-3xl">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-800">Fast Service</h3>
                            <p class="text-gray-600 text-sm">We prioritize time efficiency without compromising service
                                quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section: Testimoni Klien --}}
    <section class="bg-gray-50 py-20">
        <div class="max-w-6xl mx-auto px-4 text-center mb-12" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">What Our Clients Say</h2>
            <p class="text-gray-600 text-lg">Testimonials from clients who have experienced our best services.</p>
        </div>

        <div class="max-w-6xl mx-auto grid gap-8 grid-cols-1 md:grid-cols-3 px-4" data-aos="fade-up"
            data-aos-duration="2000">
            <!-- Testimoni 1 -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="mb-4">
                    <p class="text-gray-600 italic">“Very fast and transparent service. My property legality process in
                        Bali was handled very professionally.”
                    </p>
                </div>
                <div class="flex items-center space-x-4 mt-6">
                    <img src="https://i.pravatar.cc/60?img=1" alt="Klien 1" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="text-blue-800 font-semibold">Andi Wijaya</p>
                        <p class="text-sm text-gray-500">Property Investor</p>
                    </div>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="mb-4">
                    <p class="text-gray-600 italic">“The team is very professional and communicative. I felt secure
                        entrusting my legal matters to them.”</p>
                </div>
                <div class="flex items-center space-x-4 mt-6">
                    <img src="https://i.pravatar.cc/60?img=2" alt="Klien 2" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="text-blue-800 font-semibold">Sarah Lestari</p>
                        <p class="text-sm text-gray-500">Villa Owner</p>
                    </div>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <div class="mb-4">
                    <p class="text-gray-600 italic">“My property legality process was completed without issues. The process
                        was easy to understand and clear.”</p>
                </div>
                <div class="flex items-center space-x-4 mt-6">
                    <img src="https://i.pravatar.cc/60?img=3" alt="Klien 3" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="text-blue-800 font-semibold">John Leonard</p>
                        <p class="text-sm text-gray-500"> Expatriate & Entrepreneur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section: Call To Action --}}
    <x-cta />









@endsection

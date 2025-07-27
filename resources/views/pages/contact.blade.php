@extends('layouts.app')
@section('title', 'contact')

@section('content')
    <x-header page="contact" title="CONTACT US" />
    <section class="py-16 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                <!-- Kiri: Konten -->
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Contact Us</h2>
                    <p class="text-gray-600 mb-6">
                        If you have any questions, need assistance, or want to discuss further, don’t hesitate to contact us. We’re ready to help you.
                    </p>
                    <a href="https://wa.link/teopvc" target="_blank"
                        class="inline-flex items-center px-5 py-3 mb-10 bg-green-500 text-white font-semibold rounded-full shadow hover:bg-green-600 transition duration-200">
                        <i class="fab fa-whatsapp text-xl mr-2"></i>
                       Contact Us
                    </a>


                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Follow us on social media:</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-xl">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-sky-400 hover:text-sky-600 text-xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-pink-600 hover:text-pink-800 text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-red-600 hover:text-red-800 text-xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Kanan: Gambar -->
                <div data-aos="fade-left" data-aos-duration="1000" class="flex justify-center">
                    <img src="/images/contact.png" alt="Ilustrasi Kontak" class="w-full max-w-md">
                </div>

            </div>
        </div>
    </section>

@endsection

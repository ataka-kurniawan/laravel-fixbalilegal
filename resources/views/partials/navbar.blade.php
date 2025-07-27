<!-- Navbar -->
<nav class="bg-white shadow-md px-6 py-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="/images/logo.jpg" alt="Fast Legal Logo" class="h-8 w-auto">
            <span class="text-xl font-bold text-black">
                <a href="/">FIX BALI LEGAL</a><span class="text-blue-600">.com</span>
            </span>
        </div>

        <!-- Hamburger (Mobile) -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation & Buttons -->
        <div class="hidden md:flex items-center space-x-4">
            <!-- Navigation Links (Desktop) -->
            <ul class="flex space-x-4 text-sm font-semibold text-gray-800">
                <li class="px-4 py-2 hover:text-blue-600"><a href="/">HOME</a></li>
                <li class="relative group px-4 py-2">
                    <span class="flex items-center gap-1 hover:text-blue-600 cursor-pointer">
                        SERVICES
                        <span class="text-sm">▼</span>
                    </span>
                    <!-- Dropdown Menu -->
                    <ul
                        class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200 z-50">
                        <li class="px-4 py-2 hover:bg-gray-100 hover:text-blue-600">
                            <a href="/service">Business Legality</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-100 hover:text-blue-600">
                            <a href="{{ route('pages.rent') }}">Car & Motorbike Rental</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-100 hover:text-blue-600">
                            <a href="/property">Property Sales</a>
                        </li>
                    </ul>
                </li>
                <li class="px-4 py-2 hover:text-blue-600"><a href="/about-us">ABOUT US</a></li>
                <li class="px-4 py-2 hover:text-blue-600"><a href="/contact">CONTACT</a></li>
                <li class="px-4 py-2 hover:text-blue-600"><a href="{{ route('pages.articles') }}">ARTICLE</a></li>
            </ul>
            <!-- WhatsApp Contact Button -->
            <a href="https://wa.link/teopvc"
                class="px-4 py-2 border border-blue-500 text-blue-600 rounded-md font-semibold text-sm hover:bg-blue-500 hover:text-white">
                CONTACT US
            </a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4">
        <ul class="flex flex-col space-y-2 text-sm font-semibold text-gray-800">
            <li><a href="/" class="block px-4 py-2 hover:bg-gray-100">HOME</a></li>
            <li class="relative group">
                <details class="block">
                    <summary class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 cursor-pointer">
                        SERVICES
                        <span class="text-sm">▼</span>
                    </summary>
                    <ul class="pl-4">
                        <li><a href="/service" class="block px-4 py-2 hover:bg-gray-100">Business Legality</a></li>
                        <li><a href="{{ route('pages.rent') }}" class="block px-4 py-2 hover:bg-gray-100">Car & Motorbike Rental</a></li>
                        <li><a href="/property" class="block px-4 py-2 hover:bg-gray-100">Property Sales</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="/about-us" class="block px-4 py-2 hover:bg-gray-100">ABOUT US</a></li>
            <li><a href="/contact" class="block px-4 py-2 hover:bg-gray-100">CONTACT</a></li>
            <li><a href="{{ route('pages.articles') }}" class="block px-4 py-2 hover:bg-gray-100">ARTICLE</a></li>
            <li>
                <a href="https://wa.link/teopvc"
                    class="block text-center border border-blue-500 text-blue-600 py-2 mx-4 rounded-md font-semibold">
                    CONTACT US
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- JS Toggle -->
<script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

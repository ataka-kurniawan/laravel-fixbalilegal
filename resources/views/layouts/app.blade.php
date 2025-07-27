<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fix Bali Legal')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.7.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon"/>

</head>

<body class="bg-white text-gray-800">

    @include('partials.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>



    @include('partials.footer')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    
</body>

</html>

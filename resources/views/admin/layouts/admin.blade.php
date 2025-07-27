<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.7.2-web/css/all.min.css')}}">
</head>
<body class="bg-white flex min-h-screen">

    @include('admin.partials.sidebar')

    <div class="flex-1 flex flex-col">
        @include('admin.partials.navbar')

        <main class="p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>

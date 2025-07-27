<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.7.2-web/css/all.min.css')}}">
</head>
<body class="bg-blue-500 min-h-screen flex items-center justify-center">
    <form method="POST" action="/login" class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        @csrf
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        @if ($errors->any())
            <div class="text-red-500 text-sm mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700">
            Masuk
        </button>
    </form>
</body>
</html>

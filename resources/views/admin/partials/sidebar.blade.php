<aside class="w-64 bg-blue-800 text-white flex flex-col p-4 space-y-2">
    <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>
<nav class="space-y-2 text-white">
    <a href="{{route('admin.dashboard')}}" class="flex items-center gap-3 p-2 hover:bg-blue-900 rounded">
        <i class="fas fa-home w-5 text-white"></i> Dashboard
    </a>
    <a href="{{route('rents.index')}}" class="flex items-center gap-3 p-2 hover:bg-blue-900 rounded">
        <i class="fas fa-car w-5 text-white"></i> Rental
    </a>
    <a href="{{route('properties.index')}}" class="flex items-center gap-3 p-2 hover:bg-blue-900 rounded">
        <i class="fas fa-building w-5 text-white"></i> Properti
    </a>
    <a href="{{route('articles.index')}}" class="flex items-center gap-3 p-2 hover:bg-blue-900 rounded">
        <i class="fas fa-newspaper w-5 text-white"></i> Artikel
    </a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="flex items-center gap-3 w-full text-left p-2 hover:bg-blue-900 rounded">
            <i class="fas fa-sign-out-alt w-5 text-white"></i> Logout
        </button>
    </form>
</nav>

</aside>

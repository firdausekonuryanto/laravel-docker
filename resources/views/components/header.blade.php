<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
    <div class="flex items-center">
        <button class="text-gray-500 focus:outline-none lg:hidden">
            {{-- Tombol untuk toggling sidebar di mobile --}}
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">...</svg>
        </button>
        <h2 class="text-xl font-semibold text-gray-800 ml-4">Dashboard Proyek</h2>
    </div>

    <div class="flex items-center">
        @auth
            <span class="text-sm text-gray-700 mr-4">Halo, {{ Auth::user()->name }}</span>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700">Login</a>
        @endauth
    </div>
</header>

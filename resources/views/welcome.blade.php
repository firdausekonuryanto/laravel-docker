<x-app-layout>

    {{-- $slot yang ada di layouts/app.blade.php akan diisi oleh konten di sini --}}

    <div class="text-center p-8 bg-white rounded-lg shadow-xl">
        <h1 class="text-4xl font-extrabold text-indigo-700 mb-4">
            Selamat Datang di Proyek Laravel Docker!
        </h1>

        <p class="text-lg text-gray-600 mb-6">
            Anda berhasil menjalankan aplikasi dengan template layout kustom.
        </p>

        <div class="space-x-4">
            {{-- Tampilkan tombol yang berbeda tergantung status login --}}
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                    Buka Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                    Log In
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Daftar Akun
                    </a>
                @endif
            @endauth
        </div>
    </div>

</x-app-layout>

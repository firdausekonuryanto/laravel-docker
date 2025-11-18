<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div id="app" class="flex h-screen">

        @include('components.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">

            @include('components.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">

                    {{ $slot }}
                    {{-- Ini adalah slot konten utama yang akan diisi oleh halaman yang memanggil layout ini --}}

                </div>
            </main>

            @include('components.footer')

        </div>
    </div>

</body>

</html>

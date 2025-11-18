<div class="flex flex-col w-64 bg-gray-800">
    <div class="flex items-center justify-center h-20 shadow-md">
        <span class="text-white text-xl font-bold uppercase">Logo Proyek</span>
    </div>

    <nav class="flex-1 px-2 py-4 space-y-2 overflow-y-auto">
        <a href="/"
            class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 rounded-lg {{ request()->is('/') ? 'bg-gray-900' : '' }}">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">...</svg>
            Dashboard
        </a>
        <a href="/users"
            class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 rounded-lg {{ request()->is('users*') ? 'bg-gray-900' : '' }}">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">...</svg>
            Manajemen User
        </a>
    </nav>
</div>

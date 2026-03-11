<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Real Estate</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50" x-data="{ sidebarOpen: false }">
    <div class="min-h-screen flex">
        <!-- Mobile Menu Overlay -->
        <div x-show="sidebarOpen" 
             @click="sidebarOpen = false"
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"
             style="display: none;"></div>

        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
               class="fixed md:static inset-y-0 left-0 z-50 w-64 bg-slate-900 text-white flex-shrink-0 flex flex-col transition-transform duration-300 ease-in-out md:translate-x-0">
            <div class="p-6 flex items-center justify-between">
                <h1 class="text-2xl font-bold text-blue-400 italic uppercase">Royal Jetski</h1>
                <button @click="sidebarOpen = false" class="md:hidden text-gray-400 hover:text-white">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <nav class="flex-1 px-4 space-y-2 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-800 transition {{ request()->routeIs('admin.dashboard') ? 'bg-slate-800 border-l-4 border-blue-400' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.properties.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-800 transition {{ request()->routeIs('admin.properties.*') ? 'bg-slate-800 border-l-4 border-blue-400' : '' }}">
                    <i class="fas fa-building"></i>
                    <span>Properties</span>
                </a>
                <a href="{{ route('admin.categories.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-800 transition {{ request()->routeIs('admin.categories.*') ? 'bg-slate-800 border-l-4 border-blue-400' : '' }}">
                    <i class="fas fa-tags"></i>
                    <span>Categories</span>
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-800 transition {{ request()->routeIs('admin.inquiries.*') ? 'bg-slate-800 border-l-4 border-blue-400' : '' }}">
                    <i class="fas fa-envelope"></i>
                    <span>Inquiries</span>
                </a>
            </nav>
            <div class="p-4 border-t border-slate-800">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center space-x-3 p-3 w-full text-left hover:text-red-400 transition">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-w-0">
            <!-- Top Header -->
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-6">
                <div class="flex items-center space-x-4">
                    <button @click="sidebarOpen = true" class="md:hidden text-gray-600 hover:text-gray-900">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600 hidden sm:inline">Admin User</span>
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=3b82f6&color=fff" class="w-8 h-8 rounded-full" alt="Avatar">
                </div>
            </header>

            <!-- Content Area -->
            <div class="p-6 md:p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>

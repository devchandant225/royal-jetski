<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Dubai Jetski') }} - Premium Jetski Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .bg-royal-blue { background-color: #002366; }
        .text-royal-blue { color: #002366; }
        .border-royal-blue { border-color: #002366; }
        .hover-bg-royal-blue:hover { background-color: #003399; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">
    <nav class="bg-royal-blue text-white shadow-lg sticky top-0 z-50" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tighter uppercase italic">
                        Dubai <span class="text-blue-400">Jetski</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-blue-300 transition">Home</a>
                    <a href="{{ route('fleet') }}" class="hover:text-blue-300 transition">Our Fleet</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-300 transition">About Us</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-300 transition">Contact</a>
                    <a href="https://wa.me/971500000000" class="bg-green-500 hover:bg-green-600 px-6 py-2 rounded-full font-bold transition flex items-center">
                        <i class="fab fa-whatsapp mr-2"></i> Book Now
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button @click="open = !open" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div x-show="open" class="md:hidden bg-royal-blue border-t border-blue-900 px-4 py-4 space-y-2">
            <a href="{{ route('home') }}" class="block py-2 hover:text-blue-300">Home</a>
            <a href="{{ route('fleet') }}" class="block py-2 hover:text-blue-300">Our Fleet</a>
            <a href="{{ route('about') }}" class="block py-2 hover:text-blue-300">About Us</a>
            <a href="{{ route('contact') }}" class="block py-2 hover:text-blue-300">Contact</a>
            <a href="https://wa.me/971500000000" class="inline-block bg-green-500 px-6 py-2 rounded-full font-bold mt-2">
                <i class="fab fa-whatsapp mr-2"></i> WhatsApp Us
            </a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <h3 class="text-2xl font-bold mb-4 italic uppercase">Royal Jetski</h3>
                    <p class="text-gray-400 leading-relaxed">Experience the thrill of the waves with Dubai's premier jetski rental service. We offer top-of-the-line equipment and expert guidance for an unforgettable adventure.</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('fleet') }}" class="hover:text-white transition">Our Fleet</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-400"></i>
                            <span>Kite Beach - Umm Suqeim First - Jumeirah 3 - Dubai - UAE</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-blue-400"></i>
                            <a href="tel:+971503102976" class="hover:text-white transition">+971 50 310 2976</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-blue-400"></i>
                            <a href="mailto:contact@royaljetski.com" class="hover:text-white transition">contact@royaljetski.com</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-blue-400"></i>
                            <span>7:00 AM - 5:30 PM (Everyday)</span>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="https://wa.me/+971503102976" class="inline-block bg-green-500 hover:bg-green-600 px-6 py-2 rounded-full font-bold transition">
                            <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500">
                <p>&copy; {{ date('Y') }} Royal Jetski. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
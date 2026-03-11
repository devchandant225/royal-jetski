@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1920&q=80"
                 alt="Royal Jetski Adventure"
                 class="w-full h-full object-cover brightness-50">
        </div>
        <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
            <span class="text-blue-400 font-bold tracking-widest uppercase text-sm mb-4 block">Premium Water Adventures</span>
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Dubai's Premier <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300 italic">Jetski Experience</span>
            </h1>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-16 items-center">
                <div class="md:w-1/2">
                    <span class="text-royal-blue font-bold tracking-widest uppercase text-sm mb-2 block">Our Story</span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">A Legacy of Thrills & Excellence</h2>
                    <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                        <p>
                            Founded in 2015, Royal Jetski began with a passion for marine adventures and a commitment to providing the safest, most thrilling water experiences in Dubai. We recognized that the crystal-clear waters of Dubai deserve to be explored with the finest equipment and expert guidance.
                        </p>
                        <p>
                            Over the years, we have provided unforgettable experiences to thousands of tourists and locals alike, exploring the stunning coastlines near Burj Al Arab, Palm Jumeirah, and other iconic Dubai landmarks. Our approach combines top-of-the-line equipment with professional safety standards.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2 grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1610448721566-47369c768e70?auto=format&fit=crop&w=600&q=80" class="w-full h-64 object-cover rounded-xl" alt="Jetski Fleet">
                    <img src="https://images.unsplash.com/photo-1584730904470-3b22e4c0e1bc?auto=format&fit=crop&w=600&q=80" class="w-full h-64 object-cover rounded-xl" alt="Water Adventure">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1920&q=80" 
                 alt="Royal Jetski CTA" 
                 class="w-full h-full object-cover brightness-[0.4]">
            <div class="absolute inset-0 bg-gradient-to-b from-royal-blue/60 to-black/80"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-[3rem] p-8 md:p-16 text-center shadow-2xl">
                <span class="text-blue-400 font-bold tracking-widest uppercase text-sm mb-4 block">Ready for the Thrill?</span>
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-8 leading-tight uppercase italic">
                    Book Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Ultimate Adventure</span> Today
                </h2>
                <p class="text-xl md:text-2xl mb-12 text-blue-100 max-w-2xl mx-auto font-medium">
                    Experience Dubai's iconic landmarks from the water. Professional instructors, premium equipment, and unforgettable memories await.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                    <a href="{{ route('fleet') }}" class="group bg-white text-royal-blue px-10 py-5 rounded-2xl font-black uppercase tracking-tighter hover:bg-blue-50 transition-all duration-300 shadow-xl shadow-white/10 flex items-center transform hover:-translate-y-1">
                        Explore Fleet
                        <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="https://wa.me/+971503102976" class="group bg-green-500 text-white px-10 py-5 rounded-2xl font-black uppercase tracking-tighter hover:bg-green-600 transition-all duration-300 shadow-xl shadow-green-500/20 flex items-center transform hover:-translate-y-1">
                        <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                        Book via WhatsApp
                    </a>
                </div>
                
                <div class="mt-12 flex flex-wrap justify-center gap-8 text-blue-200/80 text-sm font-bold uppercase tracking-widest">
                    <div class="flex items-center"><i class="fas fa-check-circle text-blue-400 mr-2"></i> No Hidden Fees</div>
                    <div class="flex items-center"><i class="fas fa-check-circle text-blue-400 mr-2"></i> Free Photos</div>
                    <div class="flex items-center"><i class="fas fa-check-circle text-blue-400 mr-2"></i> Safety First</div>
                </div>
            </div>
        </div>
    </section>
@endsection
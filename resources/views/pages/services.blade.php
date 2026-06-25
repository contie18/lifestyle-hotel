<?php

use Livewire\Component;

new class extends Component
{
    // Handle state or dynamic facility/service filtering if needed later
};
?>

<x-base-layout title="Premium Services & Experiences | Lifestyle Hotel">

    <!-- SUB-HERO BANNER -->
    <section id="services-hero" class="relative h-[40vh] flex items-center justify-center bg-cover bg-center shadow-md"
        style="background-image: url('https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-black/50"></div>
        
        <div class="relative z-10 text-center text-white">
            <h1 class="services-hero-fade text-4xl md:text-5xl font-serif font-bold tracking-wide drop-shadow-md">
                Guest Services
            </h1>
            <p class="services-hero-fade text-amber-400 uppercase tracking-widest text-xs font-semibold mt-2">
                Uncompromising Hospitality Curated Around You
            </p>
        </div>
    </section>

    <!-- CONTENT CONTAINER -->
    <div class="bg-slate-50 px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 py-24 max-w-[1920px] mx-auto space-y-24">
        
        <!-- SECTION: THE EXPERIENCE OVERVIEW -->
        <section class="scroll-section py-16 bg-white rounded-2xl border border-slate-100 shadow-sm">
            <div class="container mx-auto px-6 lg:px-12 text-center max-w-3xl">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-500">The Lifestyle Standard</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-slate-950 mt-3 leading-tight">
                    Every Detail Meticulously Attended To
                </h2>
                <p class="text-slate-600 font-light mt-4 text-sm md:text-base leading-relaxed">
                    Our luxury ethos goes beyond physical spaces. We provide a fully synchronized network of hospitality, wellness, and culinary services engineered to offer an effortless escape from the ordinary.
                </p>
            </div>
        </section>

        <!-- GRID SECTION: DETAILED SERVICES -->
        <section id="services-page-grid" class="py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Service Card 1 -->
                <div class="service-page-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1485254767195-60704c46702e?auto=format&fit=crop&w=600&q=80" 
                             alt="Private Airport Chauffeur Service" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-xs font-semibold text-amber-500 uppercase tracking-wider">Transport</span>
                        <h3 class="text-xl font-serif font-bold text-slate-950">Luxury Chauffeur & Transfers</h3>
                        <p class="text-slate-500 font-light text-xs leading-relaxed">
                            Arrive in comfort. Our fleet of premium electric luxury sedans provides seamless airport terminal transfers and on-demand urban transport.
                        </p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="service-page-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1590674899484-d5640e854abe?auto=format&fit=crop&w=600&q=80" 
                             alt="In-Suite Premium Fine Dining" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-xs font-semibold text-amber-500 uppercase tracking-wider">Gastronomy</span>
                        <h3 class="text-xl font-serif font-bold text-slate-950">24/7 Fine Dining In-Suite</h3>
                        <p class="text-slate-500 font-light text-xs leading-relaxed">
                            Order custom gastronomic masterpieces directly to your door at any hour, curated by our award-winning resident culinary chefs.
                        </p>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="service-page-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80" 
                             alt="Bespoke Wellness & Hydrotherapy" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-xs font-semibold text-amber-500 uppercase tracking-wider">Wellness</span>
                        <h3 class="text-xl font-serif font-bold text-slate-950">Tailored Spa & Hydrotherapy</h3>
                        <p class="text-slate-500 font-light text-xs leading-relaxed">
                            Rejuvenate with custom bodywork treatments, clinical holistic therapies, and restorative water immersion clinics completely optimized to your biological profile.
                        </p>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="service-page-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=80" 
                             alt="Exclusive Venue Bookings" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-xs font-semibold text-amber-500 uppercase tracking-wider">Events</span>
                        <h3 class="text-xl font-serif font-bold text-slate-950">Private Venues & Gatherings</h3>
                        <p class="text-slate-500 font-light text-xs leading-relaxed">
                            From panoramic rooftop networking gatherings to intimate high-profile boardroom discussions, configure our highly automated spaces seamlessly.
                        </p>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="service-page-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=600&q=80" 
                             alt="Personal Butler & Laundry Valet" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-xs font-semibold text-amber-500 uppercase tracking-wider">Assistance</span>
                        <h3 class="text-xl font-serif font-bold text-slate-950">Butler & Express Valet Service</h3>
                        <p class="text-slate-500 font-light text-xs leading-relaxed">
                            Experience pristine wardrobe maintenance and meticulous garment layout services. Our custom butler valet ensures your physical presentation is flawless.
                        </p>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="service-page-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1463797221720-6b07e6426c24?auto=format&fit=crop&w=600&q=80" 
                             alt="Local Curated Itineraries" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-xs font-semibold text-amber-500 uppercase tracking-wider">Curation</span>
                        <h3 class="text-xl font-serif font-bold text-slate-950">Bespoke Local Experiences</h3>
                        <p class="text-slate-500 font-light text-xs leading-relaxed">
                            Gain access to sold-out metropolitan galleries, private collection openings, and hard-to-book Michelin-starred kitchen counters curated exclusively by our desk.
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </div>

</x-base-layout>
<?php
use Livewire\Component;

new class extends Component
{
    //
};
?>

<x-base-layout title="Lifestyle Hotel | Luxury & Comfort in the Heart of the City">

        <div class="absolute inset-0 bg-black/40"></div>

        <section id="hero" class="relative h-screen flex items-center justify-center bg-cover bg-center shadow-md" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1920&q=80');">
            <div class="absolute inset-0 bg-black/40"></div>

            <div class="container mx-auto px-4 relative z-10 text-center text-white pb-16">
                <span class="hero-fade inline-block text-sm uppercase tracking-widest bg-amber-500/80 px-3 py-1 rounded-full text-white font-semibold">
                    Luxury & Comfort
                </span>
                <h1 class="hero-fade text-4xl md:text-6xl font-serif font-bold mt-4 tracking-wide drop-shadow-md">
                    Welcome to Lifestyle Hotel
                </h1>
                <p class="hero-fade text-lg md:text-xl max-w-2xl mx-auto mt-4 text-gray-200 font-light drop-shadow">
                    Experience a premier destination where modern luxury meets timeless elegance. Your perfect escape awaits.
                </p>

                <div class="hero-fade mt-8">
                    <a href="/rooms"
                        class="bg-amber-500 hover:bg-amber-600 text-white font-medium px-8 py-3 rounded-md transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg inline-block">
                        Explore Rooms
                    </a>
                </div>
            </div>

            <div class="hero-bar absolute bottom-15 left-0 right-0 transform translate-y-1/2 z-20 max-w-5xl mx-auto px-6 hidden md:block">
                <div class="bg-white rounded-xl shadow-2xl p-6 grid grid-cols-4 gap-4 items-end border border-gray-100/80 backdrop-blur-sm">
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">Check-In</label>
                        <input type="date"
                            class="w-full text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded p-2 focus:outline-amber-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">Check-Out</label>
                        <input type="date"
                            class="w-full text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded p-2 focus:outline-amber-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">Guests</label>
                        <select
                            class="w-full text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded p-2 focus:outline-amber-500 transition-colors">
                            <option>1 Guest</option>
                            <option selected>2 Guests</option>
                            <option>3+ Guests</option>
                        </select>
                    </div>
                    <button class="bg-slate-900 hover:bg-slate-800 text-white font-semibold py-2.5 rounded transition duration-300 w-full text-sm uppercase tracking-wider h-[38px]">
                        Check Availability
                    </button>
                </div>
            </div>
        </section>

    <div class="bg-slate-50 min-h-screen px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 py-24 max-w-[1920px] mx-auto space-y-24">
        
        <section id="about-us" class="scroll-section py-16 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="container mx-auto px-6 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                    <div class="space-y-6">
                        <div class="space-y-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-amber-500">Our Story</span>
                            <h2 class="text-3xl md:text-4xl font-serif font-bold text-slate-950 leading-tight">
                                A Sanctuary Crafted for <br class="hidden md:inline">the Modern Traveler
                            </h2>
                        </div>

                        <p class="text-slate-600 leading-relaxed font-light">
                            Founded on the principles of refined elegance and mindful hospitality, Lifestyle Hotel redefines the boutique hotel experience. Nestled in the vibrant heart of the city, we provide an oasis of calm amidst the urban energy.
                        </p>

                        <p class="text-slate-600 leading-relaxed font-light">
                            Every corner of our property has been meticulously designed to inspire and rejuvenate. From our hand-selected local artwork to our custom-designed bedding, we blend world-class luxury with the intimate comforts of home.
                        </p>

                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <div class="flex items-start gap-3">
                                <span class="text-amber-500 text-xl mt-0.5">✦</span>
                                <div>
                                    <h4 class="font-semibold text-slate-950 text-sm">Prime Location</h4>
                                    <p class="text-xs text-slate-500 mt-1">Steps away from premier cultural and culinary hotspots.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-amber-500 text-xl mt-0.5">✦</span>
                                <div>
                                    <h4 class="font-semibold text-slate-950 text-sm">24/7 Concierge</h4>
                                    <p class="text-xs text-slate-500 mt-1">Tailored experiences curated entirely around your schedule.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex items-center justify-center h-[450px] lg:h-[500px]">
                        <div class="w-3/4 h-[85%] rounded-lg overflow-hidden shadow-xl transform -translate-x-6 transition-transform duration-500 hover:scale-[1.02]">
                            <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80"
                                alt="Luxury hotel lobby lounge" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute bottom-4 right-4 w-1/2 h-[60%] rounded-lg overflow-hidden shadow-2xl border-4 border-white transition-transform duration-500 hover:scale-[1.05]">
                            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80"
                                alt="Boutique hospitality experience" class="w-full h-full object-cover">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="rooms" class="scroll-section py-16 bg-white rounded-2xl border border-slate-100 shadow-sm">
            <div class="container mx-auto px-6 lg:px-12">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-500">Accommodations</span>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-slate-950 mt-2">Reside in Pure Comfort</h2>
                    <p class="text-slate-600 font-light mt-4">
                        Each room is curated with minimalist design paradigms, luxurious textures, and state-of-the-art automated living systems.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="room-card">
                        <livewire:room-card roomType="Deluxe King Room"
                            roomDescription="Perfect for weekend getaways, offering a plush king bed and view of the inner courtyard garden."
                            roomImage="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=600&q=80"
                            roomPrice="290000" roomCapacity="2" />
                    </div>

                    <div class="room-card">
                        <livewire:room-card roomType="Executive Skyline Suite"
                            roomDescription="Panoramic city skyline views, separated living area, and complimentary access to the executive spa lounge."
                            roomImage="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80"
                            roomPrice="450000" roomCapacity="3" />
                    </div>

                    <div class="room-card">
                        <livewire:room-card roomType="Presidential Suite"
                            roomDescription="The pinnacle of luxury, featuring a private terrace, jacuzzi, and personalized butler service."
                            roomImage="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80"
                            roomPrice="1200000" roomCapacity="4" />
                    </div>
                </div>
            </div>
        </section>

        <section id="video-banner" class="scroll-section relative h-[550px] rounded-2xl overflow-hidden flex items-center justify-center bg-cover bg-center bg-fixed shadow-inner"
            style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1920&q=80');">
            <div class="absolute inset-0 bg-slate-950/50"></div>

            <div class="relative z-10 text-center text-white px-4 max-w-3xl mx-auto">
                <button class="w-20 h-20 bg-white/20 hover:bg-amber-500 text-white rounded-full flex items-center justify-center backdrop-blur-md mx-auto transition-all duration-300 group shadow-lg border border-white/40 transform hover:scale-105">
                    <span class="text-2xl transition-transform duration-300 group-hover:scale-110 ml-1">▶</span>
                </button>

                <h2 class="text-2xl md:text-4xl font-serif mt-8 tracking-wide">Take a Virtual Cinematic Tour</h2>
                <p class="text-sm md:text-base text-slate-200 font-light mt-3 max-w-xl mx-auto">
                    Step through our doors from anywhere in the world and view the meticulous details that define the Lifestyle aesthetic.
                </p>
            </div>
        </section>

        <section id="facilities" class="scroll-section py-16 bg-white rounded-2xl border border-slate-100 shadow-sm">
            <div class="container mx-auto px-6 lg:px-12">
                <div class="text-center max-w-2xl mx-auto mb-20">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-600">The Experience</span>
                    <h2 class="text-3xl md:text-5xl font-serif font-bold text-slate-950 mt-3">World-Class Amenities</h2>
                    <p class="text-slate-600 font-light mt-4 text-sm md:text-base leading-relaxed">
                        Rejuvenate your senses and culinary curiosities. Experience profound luxury designed to satisfy your every desire.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="facility-card">
                        <livewire:facilities-card facilityType="Swimming Pool"
                            facilityDescription="Relax and unwind in our pristine swimming pool surrounded by luxury lounges."
                            facilityImage="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?auto=format&fit=crop&w=600&q=80" />
                    </div>
                    <div class="facility-card">
                        <livewire:facilities-card facilityType="Spa & Wellness"
                            facilityDescription="Indulge in our world-class spa treatments and wellness programs."
                            facilityImage="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80" />
                    </div>
                    <div class="facility-card">
                        <livewire:facilities-card facilityType="Fitness Center"
                            facilityDescription="Stay fit with our state-of-the-art fitness center and personal training sessions."
                            facilityImage="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=600&q=80" />
                    </div>
                    <div class="facility-card">
                        <livewire:facilities-card facilityType="Restaurant"
                            facilityDescription="Savor exquisite cuisine crafted by our award-winning chefs."
                            facilityImage="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=80" />
                    </div>
                </div>
            </div>
        </section>

    </div>

</x-base-layout>



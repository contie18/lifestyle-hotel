<?php

use Livewire\Component;

new class extends Component
{
    // You can manage room-type filters or live sorting states here later
};
?>

<x-base-layout title="Rooms & Luxury Suites | Lifestyle Hotel">

    <!-- SUB-HERO BANNER -->
    <section id="rooms-hero" class="relative h-[40vh] flex items-center justify-center bg-cover bg-center shadow-md"
        style="background-image: url('https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-black/50"></div>
        
        <div class="relative z-10 text-center text-white">
            <h1 class="rooms-hero-fade text-4xl md:text-5xl font-serif font-bold tracking-wide drop-shadow-md">
                Our Accommodations
            </h1>
            <p class="rooms-hero-fade text-amber-400 uppercase tracking-widest text-xs font-semibold mt-2">
                Refined Spaces Designed for Restful Indulgence
            </p>
        </div>
    </section>

    <!-- CONTENT BODY CONTAINER -->
    <div class="bg-slate-50 px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 py-16 max-w-[1920px] mx-auto space-y-12">
        
        <!-- INTERACTIVE CATEGORY FILTER BAR -->
        <div class="scroll-section flex flex-wrap justify-center items-center gap-3 md:gap-4 max-w-2xl mx-auto bg-white rounded-xl shadow-sm border border-slate-100 p-3">
            <button class="bg-slate-950 text-white font-medium px-5 py-2 rounded-md text-xs uppercase tracking-wider transition-all duration-300">All Rooms</button>
            <button class="text-slate-600 hover:text-slate-950 font-medium px-5 py-2 rounded-md text-xs uppercase tracking-wider transition-all duration-300">Deluxe Rooms</button>
            <button class="text-slate-600 hover:text-slate-950 font-medium px-5 py-2 rounded-md text-xs uppercase tracking-wider transition-all duration-300">Skyline Suites</button>
            <button class="text-slate-600 hover:text-slate-950 font-medium px-5 py-2 rounded-md text-xs uppercase tracking-wider transition-all duration-300">Signature Penthouses</button>
        </div>

        <!-- STAGGERED ROOM ARCHITECTURE GRID -->
        <section id="rooms-page-grid" class="py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Room Card 1 -->
                <div class="room-page-card">
                    <livewire:room-card roomType="Deluxe King Room"
                        roomDescription="Perfect for weekend getaways, offering a plush king bed and view of the inner courtyard garden."
                        roomImage="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=600&q=80"
                        roomPrice="290000" roomCapacity="2" />
                </div>

                <!-- Room Card 2 -->
                <div class="room-page-card">
                    <livewire:room-card roomType="Executive Skyline Suite"
                        roomDescription="Panoramic city skyline views, separated living area, and complimentary access to the executive spa lounge."
                        roomImage="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80"
                        roomPrice="450000" roomCapacity="3" />
                </div>

                <!-- Room Card 3 -->
                <div class="room-page-card">
                    <livewire:room-card roomType="Presidential Suite"
                        roomDescription="The pinnacle of luxury, featuring a private terrace, jacuzzi, and personalized butler service."
                        roomImage="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80"
                        roomPrice="1200000" roomCapacity="4" />
                </div>

                <!-- Room Card 4 (Expanded Variety) -->
                <div class="room-page-card">
                    <livewire:room-card roomType="Boutique Twin Room"
                        roomDescription="Thoughtfully optimized for friends or corporate travelers, sporting two premium double beds and high-tier automation."
                        roomImage="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=600&q=80"
                        roomPrice="260000" roomCapacity="2" />
                </div>

                <!-- Room Card 5 (Expanded Variety) -->
                <div class="room-page-card">
                    <livewire:room-card roomType="The Lifestyle Penthouse"
                        roomDescription="An entire top floor curated layout featuring wrap-around floor-to-ceiling glass and private cocktail lounge access."
                        roomImage="https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=600&q=80"
                        roomPrice="1800000" roomCapacity="4" />
                </div>

                <!-- Room Card 6 (Expanded Variety) -->
                <div class="room-page-card">
                    <livewire:room-card roomType="Garden Terrace Suite"
                        roomDescription="A ground-level sanctuary that transitions directly into an organic conservatory deck with open-air rainfall installations."
                        roomImage="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?auto=format&fit=crop&w=600&q=80"
                        roomPrice="520000" roomCapacity="2" />
                </div>

            </div>
        </section>

    </div>

</x-base-layout>
<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<x-base-layout title="About Us | Our Story & Heritage">

    <!-- SUB-HERO BANNER -->
    <section id="about-hero" class="relative h-[40vh] flex items-center justify-center bg-cover bg-center shadow-md"
        style="background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-black/50"></div>
        
        <div class="relative z-10 text-center text-white">
            <h1 class="about-hero-fade text-4xl md:text-5xl font-serif font-bold tracking-wide drop-shadow-md">
                Our Story
            </h1>
            <p class="about-hero-fade text-amber-400 uppercase tracking-widest text-xs font-semibold mt-2">
                Crafting Timeless Moments Since 2018
            </p>
        </div>
    </section>

    <!-- CONTENT BODY -->
    <div class="bg-slate-50 px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 py-24 max-w-[1920px] mx-auto space-y-24">
        
        <!-- SECTION 1: OUR MISSION -->
        <section class="scroll-section py-16 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="container mx-auto px-6 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <div class="space-y-6">
                        <span class="text-xs font-bold uppercase tracking-widest text-amber-500">The Philosophy</span>
                        <h2 class="text-3xl font-serif font-bold text-slate-950 leading-tight">
                            Hospitality Rooted in Refinement & Grace
                        </h2>
                        <p class="text-slate-600 leading-relaxed font-light">
                            At Lifestyle Hotel, we believe travel should be transformative. We have stripped away the cold formalities of traditional luxury to create an intimate, intuitive sanctuary shaped entirely around your rhythm.
                        </p>
                        <p class="text-slate-600 leading-relaxed font-light">
                            From architectural lines designed to catch daylight perfectly, to staff who anticipate your preferences before you ask, your comfort is our canvas.
                        </p>
                    </div>

                    <div class="h-[350px] md:h-[400px] rounded-lg overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80" 
                             alt="Luxury lifestyle hotel space" class="w-full h-full object-cover">
                    </div>

                </div>
            </div>
        </section>

    </div>

</x-base-layout>
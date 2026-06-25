<?php

use Livewire\Component;

new class extends Component
{
    // You can add your Livewire contact form properties and methods here later
};
?>

<x-base-layout title="Contact Us | Lifestyle Hotel">

    <section id="contact-hero" class="relative h-[40vh] flex items-center justify-center bg-cover bg-center shadow-md"
        style="background-image: url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-black/50"></div>
        
        <div class="relative z-10 text-center text-white">
            <h1 class="contact-hero-fade text-4xl md:text-5xl font-serif font-bold tracking-wide drop-shadow-md">
                Connect With Us
            </h1>
            <p class="contact-hero-fade text-amber-400 uppercase tracking-widest text-xs font-semibold mt-2">
                We Are Here To Assist Your Escape
            </p>
        </div>
    </section>

    <div class="bg-slate-50 px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32 py-24 max-w-[1920px] mx-auto">
        
        <section class="scroll-section grid grid-cols-1 lg:grid-cols-12 gap-12 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden p-6 sm:p-12">
            
            <div class="lg:col-span-5 space-y-8 lg:pr-8 lg:border-r border-slate-100">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-500">Get In Touch</span>
                    <h2 class="text-3xl font-serif font-bold text-slate-950 mt-2">Our Concierge Desk</h2>
                    <p class="text-slate-500 font-light text-sm mt-3 leading-relaxed">
                        Whether you have inquiries regarding booking accommodations, organizing exclusive events, or tailoring your itinerary, our team is at your disposal.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <span class="text-amber-500 text-xl mt-0.5">📍</span>
                        <div>
                            <h4 class="font-semibold text-slate-950 text-sm">Location</h4>
                            <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                                742 Luxury Avenue, Central District,<br>
                                Metropolitan City, MC 90210
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <span class="text-amber-500 text-xl mt-0.5">📞</span>
                        <div>
                            <h4 class="font-semibold text-slate-950 text-sm">Reservations & Front Desk</h4>
                            <p class="text-xs text-slate-500 mt-1">+1 (555) 839-2001</p>
                            <p class="text-xs text-slate-500">concierge@lifestylehotel.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <span class="text-amber-500 text-xl mt-0.5">🕒</span>
                        <div>
                            <h4 class="font-semibold text-slate-950 text-sm">Availability</h4>
                            <p class="text-xs text-slate-500 mt-1">Front Desk: 24/7</p>
                            <p class="text-xs text-slate-500">Management: Mon - Fri, 9AM - 6PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-6">
                <h3 class="text-xl font-serif font-bold text-slate-950">Send A Direct Message</h3>
                
                <form wire:submit.prevent="sendMessage" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">Full Name</label>
                            <input type="text" placeholder="John Doe"
                                class="w-full text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded p-3 focus:outline-amber-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">Email Address</label>
                            <input type="email" placeholder="johndoe@example.com"
                                class="w-full text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded p-3 focus:outline-amber-500 transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">Subject</label>
                        <select class="w-full text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded p-3 focus:outline-amber-500 transition-colors">
                            <option>General Inquiry</option>
                            <option>Room Reservations</option>
                            <option>Event Booking & Catering</option>
                            <option>Feedback & Suggestions</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">Your Message</label>
                        <textarea rows="5" placeholder="How may we curate your perfect experience?"
                            class="w-full text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded p-3 focus:outline-amber-500 transition-colors resize-none"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white font-medium px-8 py-3 rounded-md transition-all duration-300 shadow-md inline-block text-sm uppercase tracking-wider font-semibold">
                            Submit Inquiry
                        </button>
                    </div>
                </form>
            </div>

        </section>

    </div>

</x-base-layout>
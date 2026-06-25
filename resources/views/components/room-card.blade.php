<?php

use Livewire\Component;

new class extends Component
{
    public string $roomType;
    public string $roomDescription;
    public string $roomImage;
    public float $roomPrice;
    public int $roomCapacity;

};
?>

<div
    class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-slate-100 flex flex-col">
    <div class="h-64 overflow-hidden relative">
        <img src="{{ $roomImage }}" alt="{{ $roomType }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        <span
            class="absolute top-4 left-4 bg-slate-950/80 text-white text-xs font-medium px-3 py-1 rounded backdrop-blur-sm">{{ "Mwk ".number_format($roomPrice) }}
            / Night</span>
    </div>
    <div class="p-6 flex-1 flex flex-col justify-between">
        <div>
            <h3 class="text-xl font-serif font-bold text-slate-950">{{ $roomType }}</h3>
            <p class="text-slate-500 text-sm font-light mt-2">{{ $roomDescription }}</p>
            <div class="flex gap-4 my-4 text-xs text-slate-500 font-medium">
                <?php if ($roomCapacity > 0): ?>
                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $roomCapacity }} Guests
                    </span>
                <?php endif; ?>
                <span class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ $roomCapacity }} Beds
                </span>
                   
            </div>
        </div>
        <button
            class="w-full border border-slate-950 hover:bg-slate-950 hover:text-white text-slate-950 font-medium py-2.5 rounded transition duration-300 text-sm tracking-wider uppercase mt-4">
            View Details
        </button>
    </div>
</div>
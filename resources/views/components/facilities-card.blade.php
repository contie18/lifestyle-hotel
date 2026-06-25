<?php

use Livewire\Component;

new class extends Component
{
    public string $facilityType;
    public string $facilityDescription;
    public string $facilityImage;
};
?>

<div
    class="relative h-[550px] rounded-xl overflow-hidden group shadow-xl hover:shadow-2xl transition-shadow duration-300 flex flex-col justify-end p-6 border border-white bg-white">
    <div class="absolute inset-0 z-0">
        <img src="{{ $facilityImage }}"
            alt="{{ $facilityType }}"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/40 to-transparent"></div>
    </div>

    <div class="relative z-10 space-y-4">
        <div
            class="w-10 h-10 border border-amber-600/40 bg-amber-500/10 text-amber-600 rounded flex items-center justify-center text-lg">
            ✦
        </div>
        <div>
            <h3 class="text-xl font-serif font-bold text-slate-950 tracking-wide">{{ $facilityType }}</h3>
            <p class="text-slate-700 text-xs font-light mt-2 leading-relaxed">
                {{ $facilityDescription }}
            </p>
        </div>
        <div class="flex gap-3 text-slate-500 border-t border-slate-200/80 pt-4 text-[11px] font-medium tracking-wide">
            <span>💼 24/7 Service</span>
        </div>
    </div>
</div>
<?php

use Livewire\Component;

new class extends Component
{
    public bool $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }
};

?>

<header class="bg-transparent w-full py-8 flex items-center justify-center absolute top-0 z-50">

    
    <nav
        class="mx-auto w-[90%] relative flex items-center justify-between rounded-full border border-slate-200/60 bg-white px-6 shadow-[0_40px_80px_-15px_rgba(0,36,125,0.04)] backdrop-blur-xl">

        <!-- Logo -->
        <a wire:navigate class="flex items-center gap-3" href="/">
            <img src="{{ Vite::asset('resources/images/lifestyle-logo.png') }}" alt="{{ config('app.name') }} logo"
                class="size-16 object-contain" />
        </a>


        <!-- Desktop Navigation -->
        <div class="hidden items-center gap-8 lg:flex">

            <a wire:navigate href="/"
                class="text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 transition-colors hover:text-amber-500">
                HOME
            </a>

            <a wire:navigate href="/"
                class="text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 transition-colors hover:text-amber-500">
                ROOMS
            </a>

            <!-- Services Dropdown -->
            <div class="relative group">

                <button
                    class="flex items-center gap-1 text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 transition-colors hover:text-amber-500">

                    OUR SERVICES

                    <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>

                    </svg>

                </button>


                <div
                    class="absolute left-0 mt-2 w-48 rounded-xl border border-slate-100 bg-white shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">

                    <a wire:navigate href="/"
                        class="block px-4 py-2.5 rounded-t-xl text-[0.72rem] font-semibold uppercase text-slate-700 hover:bg-slate-50 hover:text-amber-500">
                        RESTAURANT & BAR
                    </a>


                    <a wire:navigate href="/"
                        class="block px-4 py-2.5 text-[0.72rem] font-semibold uppercase text-slate-700 hover:bg-slate-50 hover:text-amber-500">
                        POOL
                    </a>


                    <a wire:navigate href="/"
                        class="block px-4 py-2.5 rounded-b-xl text-[0.72rem] font-semibold uppercase text-slate-700 hover:bg-slate-50 hover:text-amber-500">
                        GYM
                    </a>

                </div>

            </div>

            <a wire:navigate href="/about"
                class="text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 transition-colors hover:text-amber-500">
                ABOUT US
            </a>

            <a wire:navigate href="/contact"
                class="text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 transition-colors hover:text-amber-500">
                CONTACT US
            </a>



        </div>



        <!-- Right Actions -->
        <div class="flex items-center gap-3">


            <!-- Login Button -->
            <a wire:navigate href="/guest/login"
                class="rounded-full w-[120px] flex items-center justify-center bg-amber-500 px-4 py-2.5 text-[0.72rem] font-bold uppercase tracking-[0.18em] text-white shadow-sm transition-all hover:bg-amber-600 active:scale-95">

                LOG IN

            </a>



            <!-- Mobile Menu Button -->
            <button wire:click="toggleMenu"
                class="flex size-9 items-center justify-center rounded-full border border-slate-200 text-slate-700 transition-colors hover:text-amber-500 lg:hidden"
                aria-label="Toggle menu">


                @if($isOpen)

                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />

                </svg>


                @else


                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />

                </svg>


                @endif


            </button>

        </div>




        <!-- Mobile Menu -->

        <div @class([ 'absolute top-full left-0 right-0 mt-3 p-4 bg-white/95 backdrop-blur-xl border border-slate-200 rounded-2xl shadow-xl z-50 lg:hidden flex flex-col gap-4 transition-all duration-200'
            , 'opacity-100 visible'=> $isOpen,

            'opacity-0 invisible pointer-events-none' => !$isOpen,
            ])>


            <a wire:navigate wire:click="$set('isOpen', false)" href="/"
                class="px-3 py-1 text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 hover:text-amber-500">
                HOME
            </a>


           


            <a wire:navigate wire:click="$set('isOpen', false)" href="/rooms"
                class="px-3 py-1 text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 hover:text-amber-500">
                ROOMS
            </a>



            <div class="flex flex-col gap-2 px-3 py-1">

                <span class="text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-400">
                    OUR SERVICES
                </span>


                <a wire:navigate href="/services"
                    class="pl-4 text-[0.72rem] font-semibold uppercase text-slate-600 hover:text-amber-500">
                    - RESTAURANT & BAR
                </a>


                <a wire:navigate href="/services"
                    class="pl-4 text-[0.72rem] font-semibold uppercase text-slate-600 hover:text-amber-500">
                    - POOL
                </a>


                <a wire:navigate href="/services"
                    class="pl-4 text-[0.72rem] font-semibold uppercase text-slate-600 hover:text-amber-500">
                    - GYM
                </a>


            </div>


            <a wire:navigate wire:click="$set('isOpen', false)" href="/contact"
                class="px-3 py-1 text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 hover:text-amber-500">
                CONTACT US
            </a>

             <a wire:navigate wire:click="$set('isOpen', false)" href="/about"
                class="px-3 py-1 text-[0.72rem] font-bold uppercase tracking-[0.18em] text-slate-700 hover:text-amber-500">
                ABOUT US
            </a>

        </div>


    </nav>

</header>
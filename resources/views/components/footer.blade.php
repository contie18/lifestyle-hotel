<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<footer class="bg-transparent text-slate-700">
    <div class="mx-auto w-[80%] max-w-7xl px-6 pt-16 pb-12">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-10">
            
            <!-- Logo & Description -->
            <div class="col-span-2 md:col-span-1 lg:col-span-2">
                <a href="/" class="flex items-center gap-3 mb-6">
                    <img src="{{ Vite::asset('resources/images/lifestyle-logo.png') }}" alt="{{ config('app.name') }} logo" 
                        class="size-30 object-contain" />
                    
                    </span>
                </a>
                
                <p class="text-slate-500 max-w-xs">
                    Crafting digital experiences that shape the future. 
                    Web • Mobile • Design solutions.
                </p>
                
                <div class="flex gap-4 mt-8">
                    <!-- Social icons with updated contrast colors -->
                    <a href="#" class="text-slate-500 hover:text-amber-600 transition-colors font-medium">𝕏</a>
                    <a href="#" class="text-slate-500 hover:text-amber-600 transition-colors font-medium">↗</a>
                    <a href="#" class="text-slate-500 hover:text-amber-600 transition-colors font-medium">in</a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-5">Navigate</h4>
                <div class="flex flex-col gap-3 text-sm">
                    <a href="/" class="hover:text-amber-600 transition-colors">Home</a>
                    <a href="/#about" class="hover:text-amber-600 transition-colors">About</a>
                    <a href="/contact" class="hover:text-amber-600 transition-colors">Contact</a>
                    <a href="/get-started" class="hover:text-amber-600 transition-colors">Get Started</a>
                </div>
            </div>

            <!-- Projects -->
            <div>
                <h4 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-5">Projects</h4>
                <div class="flex flex-col gap-3 text-sm">
                    <a href="/#enterprise" class="hover:text-amber-600 transition-colors">Web Development</a>
                    <a href="/#projects" class="hover:text-amber-600 transition-colors">App Development</a>
                    <a href="/#mobile" class="hover:text-amber-600 transition-colors">Graphic Designing</a>
                </div>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-5">Get in Touch</h4>
                <div class="flex flex-col gap-3 text-sm">
                    <a href="mailto:bit-020-22@must.ac.mw" class="hover:text-amber-600 transition-colors break-all">bit-020-22@must.ac.mw</a>
                    <a href="tel:+265888063307" class="hover:text-amber-600 transition-colors">+265 888 063 307</a>
                    <a href="tel:+265986820025" class="hover:text-amber-600 transition-colors">+265 986 820 025</a>
                    <p class="text-slate-500 text-sm mt-3">
                        Lilongwe, Malawi
                    </p>
                </div>
            </div>
        </div>

        <hr class="border-slate-200 my-12">

        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row items-center justify-between text-sm text-slate-500">
            <p>© {{ date('Y') }} CREDIA Technologies. All rights reserved.</p>
            
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-amber-600 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-amber-600 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
 
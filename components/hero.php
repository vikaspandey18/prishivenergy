<?php
/**
 * Hero Banner Section Component for Homepage
 */
?>
<section class="relative h-[90vh] flex items-center justify-center bg-black overflow-hidden select-none">
    <!-- Hero Image Background with Parallax/Zoom effect -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-transform duration-1000 transform scale-105" 
         style="background-image: url('assets/images/hero/banner.jpg');">
    </div>
    
    <!-- Dark Blue Corporate Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-dark via-dark/80 to-transparent opacity-90"></div>
    
    <!-- Grid Highlight Pattern overlay -->
    <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#808080_1px,transparent_1px),linear-gradient(to_bottom,#808080_1px,transparent_1px)] bg-[size:24px_24px]"></div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white w-full z-10">
        <div class="max-w-3xl animate-fade-in-up">
            <!-- Micro badge -->
            <div class="inline-flex items-center space-x-2 bg-primary/20 border border-primary-light/30 rounded-full px-4 py-1.5 mb-6">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                <span class="text-xs font-semibold uppercase tracking-widest text-primary-light">Enterprise Industrial Power Solutions</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight font-display mb-6 leading-tight">
                Reliable Power Solutions <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-light via-blue-200 to-secondary-light">
                    For Modern Infrastructure
                </span>
            </h1>
            
            <p class="text-lg md:text-xl text-gray-300 mb-10 leading-relaxed font-light">
                Delivering high-performance diesel generators, distribution transformers, industrial pump systems, and regulatory power infrastructure for developers, continuous industries, and government projects.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <button onclick="toggleModal('quote-modal', true)" class="px-8 py-4 bg-accent hover:bg-accent-dark text-white rounded font-bold shadow-lg transform hover:-translate-y-0.5 hover:shadow-xl transition-all text-center">
                    Request A Quote
                </button>
                <a href="products" class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white border border-white/30 rounded font-bold backdrop-blur-sm transform hover:-translate-y-0.5 transition-all text-center">
                    Explore Products
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom angle separator -->
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-white clip-path-slope pointer-events-none hidden md:block" style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"></div>
</section>

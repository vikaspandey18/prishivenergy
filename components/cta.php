<?php
/**
 * Bottom Call To Action Component
 */
?>
<section class="py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-primary-dark via-primary to-primary-light rounded-3xl p-8 md:p-16 text-white text-center md:text-left relative overflow-hidden shadow-2xl">
            <!-- Decorative circle backgrounds -->
            <div class="absolute -top-24 -right-24 w-80 h-80 bg-white/5 rounded-full blur-xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-80 h-80 bg-secondary/10 rounded-full blur-xl pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center relative z-10">
                <div class="lg:col-span-2 space-y-4">
                    <span class="text-xs uppercase tracking-widest text-secondary font-bold">Consult our Engineering Division</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold font-display leading-tight">
                        Need Reliable Power Solutions?
                    </h2>
                    <p class="text-blue-100 text-sm max-w-xl leading-relaxed">
                        Talk to our senior power systems engineers today for a detailed load analysis, feasibility reports, or customized equipment sizing plans.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-end gap-4">
                    <button onclick="toggleModal('quote-modal', true)" class="px-8 py-4 bg-accent hover:bg-accent-dark text-white rounded font-bold shadow-lg transform hover:-translate-y-0.5 transition-all text-center">
                        Request Quote
                    </button>
                    <a href="contact" class="px-8 py-4 bg-white text-primary hover:bg-gray-100 rounded font-bold shadow-md transform hover:-translate-y-0.5 transition-all text-center">
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

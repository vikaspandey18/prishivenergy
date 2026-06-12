<?php
/**
 * Testimonial Slider Component
 */
?>
<section class="py-20 bg-dark text-white relative overflow-hidden">
    <!-- Grid Pattern overlay -->
    <div class="absolute inset-0 opacity-5 bg-[linear-gradient(to_right,#808080_1px,transparent_1px),linear-gradient(to_bottom,#808080_1px,transparent_1px)] bg-[size:32px_32px]"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        
        <!-- Icon Badge -->
        <div class="w-16 h-16 bg-primary/20 border border-primary-light/20 rounded-full flex items-center justify-center mx-auto text-accent mb-8">
            <!-- Quote icon -->
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
        </div>

        <!-- Carousel Container -->
        <div class="relative min-h-[280px]">
            
            <!-- Slide 1 -->
            <div class="testimonial-slide active block transition-opacity duration-500">
                <blockquote class="text-xl md:text-2xl italic font-light text-gray-300 leading-relaxed mb-8">
                    "Prishiv Energy has been our vendor for backup power systems across four major residential sites. The Cummins-powered DG sets they supplied have performed flawlessly. Their AMC team is extremely professional and maintains a 100% SLA uptime response."
                </blockquote>
                <div class="space-y-1">
                    <h4 class="font-extrabold text-white text-base font-display">Aalok Vardhan</h4>
                    <p class="text-xs uppercase tracking-widest text-secondary font-semibold">Chief Projects Director, Landmark Realty Group</p>
                </div>
            </div>

            <!-- Slide 2 (Hidden by default) -->
            <div class="testimonial-slide hidden opacity-0 transition-opacity duration-500">
                <blockquote class="text-xl md:text-2xl italic font-light text-gray-300 leading-relaxed mb-8">
                    "For continuous process manufacturing plants like ours, voltage stability is critical. Prishiv Energy designed and deployed a custom 1000 kVA oil-cooled Servo Stabilizer system that has completely eliminated grid surge damage. Outstanding engineering expertise."
                </blockquote>
                <div class="space-y-1">
                    <h4 class="font-extrabold text-white text-base font-display">Mr. Rajesh Sharma</h4>
                    <p class="text-xs uppercase tracking-widest text-secondary font-semibold">VP Engineering Operations, Apex Auto Component Ltd</p>
                </div>
            </div>

            <!-- Slide 3 (Hidden by default) -->
            <div class="testimonial-slide hidden opacity-0 transition-opacity duration-500">
                <blockquote class="text-xl md:text-2xl italic font-light text-gray-300 leading-relaxed mb-8">
                    "We recently commissioned a government hospital block that required N+1 generator redundancy. Prishiv Energy handled the entire mechanical layout, dry-type transformer installations, and synchronization panels ahead of schedule. A highly trusted partner."
                </blockquote>
                <div class="space-y-1">
                    <h4 class="font-extrabold text-white text-base font-display">K. S. Narayanan</h4>
                    <p class="text-xs uppercase tracking-widest text-secondary font-semibold">Senior Superintending Engineer, CPWD Projects division</p>
                </div>
            </div>

        </div>

    </div>
</section>

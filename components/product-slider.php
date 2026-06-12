<?php
/**
 * Product Tab Showcase Component for Homepage
 */
?>
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12">
            <div>
                <h2 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Enterprise Catalog</h2>
                <p class="text-3xl md:text-4xl font-extrabold font-display text-dark tracking-tight">Featured Power Equipment</p>
            </div>
            <a href="products" class="mt-4 md:mt-0 text-primary hover:text-accent font-bold text-sm flex items-center group transition-colors">
                View Complete Catalog <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
            </a>
        </div>

        <!-- Tab Switches -->
        <div class="border-b border-gray-200 mb-12 flex flex-wrap gap-4 overflow-x-auto whitespace-nowrap scrollbar-none pb-1">
            <button class="product-tab-btn px-6 py-3 border-b-2 border-primary text-primary font-bold text-sm uppercase tracking-wider outline-none transition-all duration-300" data-target="slide-generators">
                Diesel Generators
            </button>
            <button class="product-tab-btn px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-primary text-sm uppercase tracking-wider outline-none transition-all duration-300" data-target="slide-transformers">
                Transformers
            </button>
            <button class="product-tab-btn px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-primary text-sm uppercase tracking-wider outline-none transition-all duration-300" data-target="slide-stabilizers">
                Voltage Stabilizers
            </button>
            <button class="product-tab-btn px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-primary text-sm uppercase tracking-wider outline-none transition-all duration-300" data-target="slide-pumps">
                Industrial Pumps
            </button>
        </div>

        <!-- Slides Wrapper -->
        <div class="relative bg-white rounded-2xl shadow-premium border border-gray-100 overflow-hidden">
            
            <!-- Slide 1: Generators -->
            <div id="slide-generators" class="product-slide active block p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <span class="inline-block bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded">5 kVA to 3000 kVA</span>
                        <h3 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Heavy-Duty Diesel Generator Sets</h3>
                        <p class="text-gray-500 leading-relaxed">
                            Engineered in association with leading global manufacturers. Ideal for continuous prime power support and emergency backup in residential, commercial, and government buildings.
                        </p>
                        
                        <!-- Specs Bullet Grid -->
                        <div class="grid grid-cols-2 gap-4 text-sm font-medium text-gray-600">
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> CPCB IV+ Compliant</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Soundproof Enclosure</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> AMF Panel Integration</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Smart Monitoring System</div>
                        </div>

                        <div class="pt-4 flex gap-4">
                            <button onclick="toggleModal('quote-modal', true)" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold shadow-md transition-colors">
                                Get Price Quote
                            </button>
                            <a href="products#dg-sets" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded font-bold transition-colors">
                                View Technical Specs
                            </a>
                        </div>
                    </div>
                    
                    <!-- SVG Visual Graphic instead of placeholder image -->
                    <div class="w-full h-80 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-2xl border border-gray-100 flex items-center justify-center p-6 relative">
                        <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
                        <div class="text-center z-10">
                            <!-- Generator Graphic illustration with SVG -->
                            <svg class="w-48 h-48 mx-auto text-primary opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                <circle cx="8" cy="16" r="2" stroke-width="1.5"></circle>
                                <circle cx="16" cy="16" r="2" stroke-width="1.5"></circle>
                            </svg>
                            <span class="text-xs uppercase font-bold tracking-widest text-primary-dark mt-2 block">Continuous Silent Power Plant</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Transformers -->
            <div id="slide-transformers" class="product-slide inactive hidden p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <span class="inline-block bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded">Up to 50 MVA, 132kV Class</span>
                        <h3 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Distribution & Power Transformers</h3>
                        <p class="text-gray-500 leading-relaxed">
                            High-quality copper-wound transformers engineered to stand up to heavy industrial loads. Certified for high thermal efficiency and short-circuit structural endurance.
                        </p>
                        
                        <!-- Specs Bullet Grid -->
                        <div class="grid grid-cols-2 gap-4 text-sm font-medium text-gray-600">
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Low Energy Loss Cores</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Hermetically Sealed</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Oil / Dry Type Options</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> BIS & BEE Certified</div>
                        </div>

                        <div class="pt-4 flex gap-4">
                            <button onclick="toggleModal('quote-modal', true)" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold shadow-md transition-colors">
                                Get Price Quote
                            </button>
                            <a href="products#transformers" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded font-bold transition-colors">
                                View Technical Specs
                            </a>
                        </div>
                    </div>
                    
                    <!-- SVG Visual Graphic instead of placeholder image -->
                    <div class="w-full h-80 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-2xl border border-gray-100 flex items-center justify-center p-6 relative">
                        <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
                        <div class="text-center z-10">
                            <!-- Transformer SVG illustration -->
                            <svg class="w-48 h-48 mx-auto text-primary opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                <rect x="5" y="8" width="14" height="8" rx="1" stroke-width="1.5"></rect>
                                <line x1="8" y1="12" x2="8" y2="12.01" stroke-width="3" stroke-linecap="round"></line>
                                <line x1="12" y1="12" x2="12" y2="12.01" stroke-width="3" stroke-linecap="round"></line>
                                <line x1="16" y1="12" x2="16" y2="12.01" stroke-width="3" stroke-linecap="round"></line>
                            </svg>
                            <span class="text-xs uppercase font-bold tracking-widest text-primary-dark mt-2 block">High Voltage Substation Transformer</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Stabilizers -->
            <div id="slide-stabilizers" class="product-slide inactive hidden p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <span class="inline-block bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded">10 kVA to 2000 kVA</span>
                        <h3 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Servo Voltage Stabilizers</h3>
                        <p class="text-gray-500 leading-relaxed">
                            Protecting highly sensitive medical, industrial process, and computing equipment. Features micro-controller voltage correction systems for unmatched grid safety.
                        </p>
                        
                        <!-- Specs Bullet Grid -->
                        <div class="grid grid-cols-2 gap-4 text-sm font-medium text-gray-600">
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> &plusmn;0.5% Regulation</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Digital LCD Display</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> High/Low Cutoff Protection</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> 98% Output Efficiency</div>
                        </div>

                        <div class="pt-4 flex gap-4">
                            <button onclick="toggleModal('quote-modal', true)" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold shadow-md transition-colors">
                                Get Price Quote
                            </button>
                            <a href="products#stabilizers" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded font-bold transition-colors">
                                View Technical Specs
                            </a>
                        </div>
                    </div>
                    
                    <!-- SVG Visual Graphic instead of placeholder image -->
                    <div class="w-full h-80 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-2xl border border-gray-100 flex items-center justify-center p-6 relative">
                        <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
                        <div class="text-center z-10">
                            <!-- Stabilizer SVG illustration -->
                            <svg class="w-48 h-48 mx-auto text-primary opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"></rect>
                                <circle cx="12" cy="12" r="5" stroke-width="1.5"></circle>
                                <line x1="12" y1="12" x2="15" y2="9" stroke-width="2" stroke-linecap="round"></line>
                                <rect x="6" y="6" width="3" height="2" stroke-width="1.5"></rect>
                            </svg>
                            <span class="text-xs uppercase font-bold tracking-widest text-primary-dark mt-2 block">Linear Servo Regulator Unit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Pumps -->
            <div id="slide-pumps" class="product-slide inactive hidden p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <span class="inline-block bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded">5 HP to 250 HP</span>
                        <h3 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Industrial Heavy-Duty Pumps</h3>
                        <p class="text-gray-500 leading-relaxed">
                            Robust centrifugal, split-case, and hydro-pneumatic booster pump systems. Specially engineered for municipal water works, fire fighting networks, and infrastructure projects.
                        </p>
                        
                        <!-- Specs Bullet Grid -->
                        <div class="grid grid-cols-2 gap-4 text-sm font-medium text-gray-600">
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Corrosion Resistant</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Cast Iron casing</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> IE3 Premium Efficiency</div>
                            <div class="flex items-center"><span class="w-2 h-2 bg-secondary rounded-full mr-3"></span> Variable Speed Drive</div>
                        </div>

                        <div class="pt-4 flex gap-4">
                            <button onclick="toggleModal('quote-modal', true)" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold shadow-md transition-colors">
                                Get Price Quote
                            </button>
                            <a href="products#pumps" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded font-bold transition-colors">
                                View Technical Specs
                            </a>
                        </div>
                    </div>
                    
                    <!-- SVG Visual Graphic instead of placeholder image -->
                    <div class="w-full h-80 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-2xl border border-gray-100 flex items-center justify-center p-6 relative">
                        <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
                        <div class="text-center z-10">
                            <!-- Pump SVG illustration -->
                            <svg class="w-48 h-48 mx-auto text-primary opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="14" r="6" stroke-width="1.5"></circle>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2v6m0 0a4 4 0 100 8 4 4 0 000-8zm-6 6h12"></path>
                            </svg>
                            <span class="text-xs uppercase font-bold tracking-widest text-primary-dark mt-2 block">Hydropneumatic Split-Case Pump</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

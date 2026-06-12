<?php
/**
 * Prishiv Energy Private Limited - Homepage
 */
$pageTitle = "Powering Progress, Delivering Trust";
$pageDesc = "Prishiv Energy Private Limited is a premium supplier of diesel generator sets, power transformers, voltage regulators, and industrial pumps serving infrastructure, real estate, and government projects.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<?php include_once __DIR__ . '/components/hero.php'; ?>

<!-- Statistics Section -->
<?php include_once __DIR__ . '/components/stats.php'; ?>

<!-- Company Brief Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Company Info left -->
            <div class="space-y-6">
                <div class="inline-flex items-center space-x-2">
                    <span class="w-8 h-0.5 bg-primary"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-primary">Corporate Profile</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold font-display text-dark tracking-tight leading-tight">
                    Trusted B2B Industrial Power <br>Infrastructure Partner
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Prishiv Energy Private Limited has established itself as a premier partner in power solutions. We cater to the severe demands of modern real estate developers, massive manufacturing units, healthcare structures, and government utility projects.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    We do not just sell machinery. We align with your electrical project designs, commissioning setups, and maintain them under strict service level agreements. From standard 5 kVA utility sets up to 50 MVA primary substations, our solutions deliver constant safety.
                </p>
                
                <div class="pt-4">
                    <a href="about" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold shadow-md transition-all">
                        Learn More About Us
                    </a>
                </div>
            </div>

            <!-- Graphic Right Panel -->
            <div class="relative w-full h-[400px] bg-light rounded-2xl border border-gray-100 flex items-center justify-center p-8 overflow-hidden shadow-premium">
                <!-- Grid pattern -->
                <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:20px_20px] opacity-10"></div>
                <div class="text-center z-10 space-y-6">
                    <img src="assets/images/logo.jpeg" alt="Prishiv Energy" class="h-24 mx-auto object-contain">
                    <div class="space-y-2">
                        <p class="text-lg font-bold text-primary font-display uppercase tracking-widest">Prishiv Energy</p>
                        <p class="text-xs uppercase font-semibold text-gray-400">Engineering Trust Since 2011</p>
                    </div>
                    <!-- Micro icons list -->
                    <div class="flex justify-center space-x-8 text-xs font-bold text-gray-500 pt-4 border-t border-gray-100">
                        <div>
                            <span class="block text-secondary text-lg">&check;</span> Genuine Spares
                        </div>
                        <div>
                            <span class="block text-secondary text-lg">&check;</span> SLA Assured
                        </div>
                        <div>
                            <span class="block text-secondary text-lg">&check;</span> PAN India Support
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services Grid Section -->
<?php include_once __DIR__ . '/components/services-grid.php'; ?>

<!-- Featured Products Slider -->
<?php include_once __DIR__ . '/components/product-slider.php'; ?>

<!-- Industries Section -->
<?php include_once __DIR__ . '/components/industries-section.php'; ?>

<!-- Why Choose Us Section -->
<section class="py-20 bg-light border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Core Commitments</h2>
            <p class="text-3xl md:text-4xl font-extrabold font-display text-dark tracking-tight">
                Why Industry Leaders Choose Prishiv
            </p>
            <div class="w-16 h-1 bg-primary mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                    &starf;
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-dark font-display">Genuine OEM Products</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">All diesel engines, alternator windings, core steel laminations, and hydraulic parts are sourced directly from verified global partners.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                    &starf;
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-dark font-display">Certified Engineers</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">Our execution crews undergo quarterly technical training. We ensure all project alignments strictly meet CEA guidelines.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                    &starf;
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-dark font-display">Rapid Delivery Pipelines</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">With regional storage houses across Northern, Western, and Southern India, we dispatch standard machinery within 48 hours.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                    &starf;
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-dark font-display">SLA-Driven AMC Support</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">We commit to 24/7 service response targets. Critical system parts are pre-allocated for AMC holders in nearest logistics hubs.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                    &starf;
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-dark font-display">Competitive Enterprise Pricing</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">Our deep supplier tie-ups and localized component sourcing allow us to pass on significant CAPEX discounts to contractors.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                    &starf;
                </div>
                <div class="space-y-2">
                    <h3 class="font-bold text-dark font-display">Pan India Support Service</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">With network hubs in 18 states, we can handle multi-city deployments, and coordinate electrical compliance standards smoothly.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Project Showcase Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12">
            <div>
                <h2 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Portfolio Highlights</h2>
                <p class="text-3xl md:text-4xl font-extrabold font-display text-dark tracking-tight">Industrial Operations Showcase</p>
            </div>
            <a href="projects" class="mt-4 md:mt-0 text-primary hover:text-accent font-bold text-sm flex items-center group transition-colors">
                View All Case Studies <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
            </a>
        </div>

        <!-- Portfolio grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project 1 -->
            <div class="relative group rounded-xl overflow-hidden shadow-md h-72 bg-gradient-to-br from-primary to-primary-dark">
                <!-- Illustration overlay -->
                <div class="absolute inset-0 bg-cover bg-center opacity-40 select-none pointer-events-none" style="background-image: url('assets/images/hero/banner.jpg');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-6 space-y-2">
                    <span class="bg-accent text-white text-[10px] uppercase font-bold tracking-widest px-2 py-0.5 rounded">Real Estate Infrastructure</span>
                    <h3 class="text-lg font-bold text-white font-display">Godrej Greens Power Station</h3>
                    <p class="text-gray-300 text-xs">Deployment of 3x1250 kVA Cummins generators with synchronizing panel setups.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="relative group rounded-xl overflow-hidden shadow-md h-72 bg-gradient-to-br from-primary to-primary-dark">
                <div class="absolute inset-0 bg-cover bg-center opacity-40 select-none pointer-events-none" style="background-image: url('assets/images/hero/banner.jpg');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-6 space-y-2">
                    <span class="bg-accent text-white text-[10px] uppercase font-bold tracking-widest px-2 py-0.5 rounded">Government Utilities</span>
                    <h3 class="text-lg font-bold text-white font-display">NHAI Bypass Toll Substations</h3>
                    <p class="text-gray-300 text-xs">11kV oil-immersed distribution transformers and auxiliary panel networks.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="relative group rounded-xl overflow-hidden shadow-md h-72 bg-gradient-to-br from-primary to-primary-dark">
                <div class="absolute inset-0 bg-cover bg-center opacity-40 select-none pointer-events-none" style="background-image: url('assets/images/hero/banner.jpg');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-6 space-y-2">
                    <span class="bg-accent text-white text-[10px] uppercase font-bold tracking-widest px-2 py-0.5 rounded">Manufacturing Plants</span>
                    <h3 class="text-lg font-bold text-white font-display">Sterling Pharma Stabilizer Hub</h3>
                    <p class="text-gray-300 text-xs">2000 kVA linear servo voltage stabilizer regulating vital continuous reactors.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials Section -->
<?php include_once __DIR__ . '/components/testimonials.php'; ?>

<!-- Certifications Bar Section -->
<section class="py-12 bg-light border-y border-gray-150">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-around gap-8 opacity-65 grayscale hover:grayscale-0 transition-all">
            <div class="text-center">
                <p class="text-lg font-black font-display text-dark">ISO 9001:2015</p>
                <p class="text-[9px] uppercase tracking-wider font-semibold text-gray-500">Quality Management</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-black font-display text-dark">ISO 14001:2015</p>
                <p class="text-[9px] uppercase tracking-wider font-semibold text-gray-500">Environmental Care</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-black font-display text-dark">CEA COMPLIANT</p>
                <p class="text-[9px] uppercase tracking-wider font-semibold text-gray-500">Electrical Authority</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-black font-display text-dark">CPCB IV+</p>
                <p class="text-[9px] uppercase tracking-wider font-semibold text-gray-500">Genset Emission Control</p>
            </div>
            <div class="text-center">
                <p class="text-lg font-black font-display text-dark">BEE STAR RATED</p>
                <p class="text-[9px] uppercase tracking-wider font-semibold text-gray-500">Energy Efficiency</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<?php include_once __DIR__ . '/components/faq.php'; ?>

<!-- CTA Section -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * Services Detail Page
 */
$pageTitle = "Engineering & Support Services";
$pageDesc = "Explore the complete portfolio of B2B electrical services, layout designs, annual maintenance contracts, and backup installation commissioning from Prishiv Energy.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Engineering & support Services</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            Turnkey project planning, layout design approvals, on-site commissioning, and SLA-driven maintenance.
        </p>
    </div>
</section>

<!-- Detailed Services Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
        
        <!-- Service 1: Generator Deployment -->
        <div id="generators" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-xs uppercase font-bold text-secondary tracking-wider block">01 / Power Plant Setup</span>
                <h2 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Generator Installation & Synchronization</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Prishiv Energy specializes in full generator room setups. Our engineers design standard exhaust layouts, fuel lines, acoustic wall dampening, and vibration isolation mounts. 
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We also deploy advanced AMF (Automatic Mains Failure) panels and multi-genset synchronization grids. This allows load sharing across multiple generators, optimizing fuel consumption and improving redundancy.
                </p>
                <!-- Key Deliverables List -->
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700 space-y-2">
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Room Acoustic Treatments (CPCB compliant)</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Automatic Load Sharing & Synchronizing Panels</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Exhaust Chimney Erecting & Emission Audits</div>
                </div>
            </div>
            
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-primary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"></rect>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16V8m10 8V8m-5 8V8m-5 4h10"></path>
                </svg>
            </div>
        </div>

        <!-- Service 2: Substation layout -->
        <div id="transformers" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center lg:flex-row-reverse">
            <!-- Image Panel first on desktop -->
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6 lg:order-2">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-primary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    <circle cx="12" cy="12" r="10" stroke-width="1"></circle>
                </svg>
            </div>

            <div class="space-y-6 lg:order-1">
                <span class="text-xs uppercase font-bold text-secondary tracking-wider block">02 / High Voltage Substation Grid</span>
                <h2 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Substation Layout & Transformer Commissioning</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We plan and execute industrial high-voltage substations from layout blueprints to live grid energizing. This covers civil foundations, earthing pits, structural steel gantries, and lightning protections.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Our team conducts on-site winding resistance, insulation resistance (meggering), turns ratio, magnetic balance, and oil breakdown voltage (BDV) tests prior to transformer commissioning.
                </p>
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700 space-y-2">
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Earth Resistance Testing & Chemical Grid Installation</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Oil Filtration & Transformer Overhauling</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Protective Relay Calibrations & Control Panel Wiring</div>
                </div>
            </div>
        </div>

        <!-- Service 3: Voltage safety -->
        <div id="regulators" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-xs uppercase font-bold text-secondary tracking-wider block">03 / Grid Power Quality</span>
                <h2 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Power Quality Audits & Stabilization</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Grid voltage sags, swells, and harmonic distortions damage sensitive CNC lines, data center servers, and hospital scanners. 
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We deploy transient monitoring meters to identify voltage instability. Based on findings, we commission dynamic voltage regulators, servo stabilizers, active harmonic filters, and power factor correction capacitors.
                </p>
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700 space-y-2">
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Harmonic Analysis & Waveform Profiling</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Servo Stabilizer Mechanical Alignment Reviews</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Capacitor Bank Integrity & Load Balance Checks</div>
                </div>
            </div>
            
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-primary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z"></path>
                </svg>
            </div>
        </div>

        <!-- Service 4: Pumping Station Engineering -->
        <div id="pumps" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center lg:flex-row-reverse">
            <!-- Image Panel first on desktop -->
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6 lg:order-2">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-primary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="9" stroke-width="1.5"></circle>
                    <path d="M12 3v18M3 12h18" stroke-width="1"></path>
                </svg>
            </div>

            <div class="space-y-6 lg:order-1">
                <span class="text-xs uppercase font-bold text-secondary tracking-wider block">04 / Hydraulic Networks</span>
                <h2 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Hydro-Pneumatic Booster & Pumping Station Design</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Our team designs complex pipeline layouts and pumping structures. We deploy split-case, end-suction centrifugal, and multi-stage submersible pumps for domestic supply, storm water, and fire hydrants.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We specialize in integrating VFD (Variable Frequency Drive) smart controller panels to adjust pump motor speeds based on real-time line pressure, saving up to 40% in electricity consumption.
                </p>
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700 space-y-2">
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> VFD Controller Panel Integration</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Pipeline Flow & Static Head Calculations</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Fire Hydrant Network Commissioning</div>
                </div>
            </div>
        </div>

        <!-- Service 5: Dust control -->
        <div id="filters" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-xs uppercase font-bold text-secondary tracking-wider block">05 / Environmental Care</span>
                <h2 class="text-2xl md:text-3xl font-extrabold font-display text-dark">Air Filtration & Ventilation Layout Design</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We manufacture and deploy heavy dust collectors, bag filter houses, and ventilation fans to control plant particulates.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Our air filter layout engineering maintains appropriate positive air pressure in server rooms, hospital operating complexes, and delicate assembly spaces.
                </p>
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700 space-y-2">
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Bag Filter Cleaning Mechanism Commissioning</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Dust Collector Airflow CFD Optimization</div>
                    <div class="flex items-center"><span class="w-1.5 h-1.5 bg-accent rounded-full mr-3"></span> Server Room Climate Positive Pressure Control</div>
                </div>
            </div>
            
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-primary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                </svg>
            </div>
        </div>

        <!-- Service 6: AMC detailed maintenance structures -->
        <div id="amc" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center lg:flex-row-reverse">
            <!-- Image Panel first on desktop -->
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6 lg:order-2">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-primary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>

            <div class="space-y-6 lg:order-1">
                <span class="text-xs uppercase font-bold text-secondary tracking-wider block">06 / Asset Management Contracts</span>
                <h2 class="text-2xl md:text-3xl font-extrabold font-display text-dark">SLA Annual Maintenance Contracts (AMC)</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We operate customized B2B service level agreements. Our contracts provide systematic routine checks, electrical logging reports, oil testing, and emergency support.
                </p>
                
                <!-- Checks Grid -->
                <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-gray-700">
                    <div class="bg-light p-3 rounded border border-gray-150">
                        <span class="text-primary block font-extrabold mb-1">A & B Checks</span>
                        Fuel, filter & lube changes (every 250 operational hours)
                    </div>
                    <div class="bg-light p-3 rounded border border-gray-150">
                        <span class="text-primary block font-extrabold mb-1">C & D Checks</span>
                        Tappet alignments, engine overhauls & radiator cleaning
                    </div>
                    <div class="bg-light p-3 rounded border border-gray-150">
                        <span class="text-primary block font-extrabold mb-1">Grid Insulation</span>
                        Transformer coils oil breakdown (BDV) filtration checks
                    </div>
                    <div class="bg-light p-3 rounded border border-gray-150">
                        <span class="text-primary block font-extrabold mb-1">2-Hour SLA</span>
                        Guaranteed physical technician dispatch inside industrial sectors
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Bottom CTA -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

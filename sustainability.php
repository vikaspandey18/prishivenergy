<?php
/**
 * Sustainability & Environmental Responsibility Page
 */
$pageTitle = "Sustainability & Green Commitments";
$pageDesc = "Discover Prishiv Energy's eco-efficient power solutions, including low-emission CPCB IV+ generators, amorphous core transformers, and solar hybrid designs.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Sustainability & Green Energy</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            Integrating high-efficiency electrical equipment and hybrid technologies to reduce industrial carbon footprints.
        </p>
    </div>
</section>

<!-- Sustainability details -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        
        <!-- Intro Section -->
        <div class="max-w-3xl mx-auto text-center space-y-4">
            <h2 class="text-xs font-bold text-secondary uppercase tracking-widest">Environmental Stewardship</h2>
            <p class="text-3xl font-extrabold font-display text-dark tracking-tight">Powering Growth, Protecting the Future</p>
            <p class="text-gray-500 text-sm leading-relaxed">
                At Prishiv Energy Private Limited, sustainability is an engineering goal. Through low-loss transformer cores, cleaner diesel emissions, and solar hybrid controllers, we help our clients meet strict environmental covenants without compromising reliability.
            </p>
            <div class="w-16 h-1 bg-secondary mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h3 class="text-2xl font-bold font-display text-dark">Amorphous Core Energy-Saving Transformers</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Standard transformer cores made of cold-rolled grain-oriented (CRGO) steel incur constant electrical magnetization losses even when no load is connected. 
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We supply **amorphous alloy core distribution transformers**. The random molecular structure of amorphous metal allows quick magnetization, reducing core no-load energy losses by up to **70%**. This translates to massive yearly savings in power utility billing and decreases carbon generation.
                </p>
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700">
                    <span class="text-secondary block font-bold mb-1">Key Impact:</span>
                    Reduces carbon output of auxiliary substations, meeting Bureau of Energy Efficiency (BEE) Star Rating specifications.
                </div>
            </div>
            
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-secondary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                </svg>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center lg:flex-row-reverse">
            <!-- Image Panel first on desktop -->
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6 lg:order-2">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-secondary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                </svg>
            </div>

            <div class="space-y-6 lg:order-1">
                <h3 class="text-2xl font-bold font-display text-dark">CPCB IV+ Low-Emission Diesel Generators</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Our entire range of silent diesel generators complies with the Central Pollution Control Board's CPCB IV+ norms. 
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Equipped with advanced common-rail direct injection (CRDI) engines, diesel particulate filters (DPF), and selective catalytic reduction (SCR) modules, our generators achieve a **90% reduction** in nitrogen oxides (NOx) and particulate matter (PM) compared to older standards.
                </p>
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700">
                    <span class="text-secondary block font-bold mb-1">Key Impact:</span>
                    Quiet operation (under 75 dBA) and clean exhausts allow deployment inside sensitive urban areas.
                </div>
            </div>
        </div>

        <!-- Solar Hybrid systems -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h3 class="text-2xl font-bold font-display text-dark">Solar Hybrid Microgrid Integration</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    To help remote commercial installations reduce fuel consumption, we provide smart hybrid control setups. 
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    These systems balance local solar generation, battery storage systems, and diesel generator standby plants. By prioritizing solar usage and utilizing generators only for battery topping or load peaks, diesel consumption is reduced by up to **35%**.
                </p>
                <div class="bg-light p-4 rounded-lg border border-gray-150 text-xs font-semibold text-gray-700">
                    <span class="text-secondary block font-bold mb-1">Key Impact:</span>
                    Reduces operating costs (OPEX) and provides green fuel security during long power outages.
                </div>
            </div>
            
            <div class="w-full h-72 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-xl border border-gray-100 flex items-center justify-center p-6">
                <!-- SVG Illustration -->
                <svg class="w-32 h-32 text-secondary opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke-width="1.5"></circle>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3"></path>
                </svg>
            </div>
        </div>

    </div>
</section>

<!-- Bottom CTA -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

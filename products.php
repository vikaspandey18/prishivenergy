<?php
/**
 * Products Catalog Page
 */
$pageTitle = "Industrial Power Equipment Catalog";
$pageDesc = "Browse technical specifications and details for Diesel Generator Sets (DG Sets), Power Transformers, Servo Voltage Stabilizers, Industrial Pumps, and Air Filtration Systems from Prishiv Energy.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Industrial Power Catalog</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            High-performance machinery engineered to international standards and certified by national authorities.
        </p>
    </div>
</section>

<!-- Main Catalog Layout -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Category Jump Links (For premium user experience) -->
        <div class="flex flex-wrap gap-4 justify-center mb-16 text-sm font-semibold">
            <a href="#dg-sets" class="px-6 py-3 bg-light hover:bg-primary hover:text-white border border-gray-200 rounded-lg transition-all shadow-sm">Diesel Generators</a>
            <a href="#transformers" class="px-6 py-3 bg-light hover:bg-primary hover:text-white border border-gray-200 rounded-lg transition-all shadow-sm">Transformers</a>
            <a href="#stabilizers" class="px-6 py-3 bg-light hover:bg-primary hover:text-white border border-gray-200 rounded-lg transition-all shadow-sm">Servo Stabilizers</a>
            <a href="#pumps" class="px-6 py-3 bg-light hover:bg-primary hover:text-white border border-gray-200 rounded-lg transition-all shadow-sm">Industrial Pumps</a>
            <a href="#filters" class="px-6 py-3 bg-light hover:bg-primary hover:text-white border border-gray-200 rounded-lg transition-all shadow-sm">Air Filters</a>
        </div>

        <div class="space-y-24">
            
            <!-- SECTION 1: DIESEL GENERATORS -->
            <div id="dg-sets" class="scroll-mt-24 space-y-8">
                <div class="border-b-2 border-primary pb-4 flex flex-col md:flex-row justify-between items-start md:items-end">
                    <div>
                        <span class="text-xs uppercase font-bold text-secondary tracking-wider block">Heavy Utility</span>
                        <h2 class="text-3xl font-extrabold font-display text-dark">Diesel Generator Sets (DG Sets)</h2>
                    </div>
                    <span class="text-sm font-bold text-gray-400 mt-2 md:mt-0">Compliance: CPCB IV+ & IS 10002</span>
                </div>
                
                <p class="text-gray-600 text-sm leading-relaxed max-w-4xl">
                    We supply and install silent diesel generator sets featuring engines from top global manufacturers (Cummins, Kirloskar, Perkins, etc.) and Stamford alternators. Engineered with high-density mineral wool soundproof acoustic enclosures, they operate under 75 dB(A) at 1-meter limits, making them ideal for residential townships, malls, and healthcare hubs.
                </p>

                <!-- Technical Specification Table -->
                <div class="overflow-x-auto shadow-sm rounded-xl border border-gray-200 bg-white">
                    <table class="w-full text-left border-collapse text-xs md:text-sm">
                        <thead>
                            <tr class="bg-light border-b border-gray-200 text-dark uppercase font-bold tracking-wider">
                                <th class="p-4">Capacity Range</th>
                                <th class="p-4">Engine Maker</th>
                                <th class="p-4">Alternator Winding</th>
                                <th class="p-4">Fuel Consumption</th>
                                <th class="p-4">Safety Protection</th>
                                <th class="p-4 text-center">Data Sheets</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-150 text-gray-600 font-medium">
                            <tr>
                                <td class="p-4 font-bold text-dark">5 kVA - 250 kVA</td>
                                <td class="p-4">Kirloskar / Mahindra</td>
                                <td class="p-4">Stamford (Copper winding, H-Class)</td>
                                <td class="p-4">Standard eco-efficient</td>
                                <td class="p-4">Low Lube Oil / High Temp Shutdown</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-dark">250 kVA - 1000 kVA</td>
                                <td class="p-4">Cummins / Perkins</td>
                                <td class="p-4">Stamford (Copper winding, H-Class)</td>
                                <td class="p-4">Turbocharged Air-to-Air</td>
                                <td class="p-4">Over-speed, over-current, earth fault</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-dark">1000 kVA - 3000 kVA</td>
                                <td class="p-4">Cummins / Caterpillar</td>
                                <td class="p-4">Leroy Somer / Stamford</td>
                                <td class="p-4">Electronic Governor, CRDI system</td>
                                <td class="p-4">Full digital control unit integration</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION 2: TRANSFORMERS -->
            <div id="transformers" class="scroll-mt-24 space-y-8">
                <div class="border-b-2 border-primary pb-4 flex flex-col md:flex-row justify-between items-start md:items-end">
                    <div>
                        <span class="text-xs uppercase font-bold text-secondary tracking-wider block">Grid Transmission</span>
                        <h2 class="text-3xl font-extrabold font-display text-dark">Distribution & Power Transformers</h2>
                    </div>
                    <span class="text-sm font-bold text-gray-400 mt-2 md:mt-0">Compliance: BIS IS-1180 & BEE Star Rating</span>
                </div>
                
                <p class="text-gray-600 text-sm leading-relaxed max-w-4xl">
                    Prishiv Energy offers high-durability distribution and power transformers designed to withstand the short-circuit stresses of heavy industrial environments. Available in oil-cooled (ONAN/ONAF) and dry-type (resin cast/vacuum impregnated) versions up to 50 MVA capacity and 132kV grid classifications.
                </p>

                <!-- Technical Specification Table -->
                <div class="overflow-x-auto shadow-sm rounded-xl border border-gray-200 bg-white">
                    <table class="w-full text-left border-collapse text-xs md:text-sm">
                        <thead>
                            <tr class="bg-light border-b border-gray-200 text-dark uppercase font-bold tracking-wider">
                                <th class="p-4">Capacity Range</th>
                                <th class="p-4">Voltage Ratio</th>
                                <th class="p-4">Cooling Type</th>
                                <th class="p-4">Winding Material</th>
                                <th class="p-4">Core Laminations</th>
                                <th class="p-4 text-center">Data Sheets</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-150 text-gray-600 font-medium">
                            <tr>
                                <td class="p-4 font-bold text-dark">100 kVA - 2500 kVA</td>
                                <td class="p-4">11kV / 433V, 22kV / 433V</td>
                                <td class="p-4">Oil Cooled (ONAN) / Dry Type</td>
                                <td class="p-4">Electrolytic Grade Copper Windings</td>
                                <td class="p-4">CRGO Silicon Steel (BEE Star Rated)</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-dark">2.5 MVA - 10 MVA</td>
                                <td class="p-4">33kV / 11kV, 33kV / 433V</td>
                                <td class="p-4">ONAN Oil-Cooled (Hermetically Sealed)</td>
                                <td class="p-4">Electrolytic Grade Copper Windings</td>
                                <td class="p-4">Low-loss CRGO Amorphous Core Option</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-dark">10 MVA - 50 MVA</td>
                                <td class="p-4">66kV/11kV, 132kV/33kV</td>
                                <td class="p-4">ONAN / ONAF (Fan Cooled)</td>
                                <td class="p-4">Continuous transposed copper winding</td>
                                <td class="p-4">Step-lap CRGO core laminations</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION 3: SERVO VOLTAGE STABILIZERS -->
            <div id="stabilizers" class="scroll-mt-24 space-y-8">
                <div class="border-b-2 border-primary pb-4 flex flex-col md:flex-row justify-between items-start md:items-end">
                    <div>
                        <span class="text-xs uppercase font-bold text-secondary tracking-wider block">Voltage safety</span>
                        <h2 class="text-3xl font-extrabold font-display text-dark">Servo Voltage Stabilizers</h2>
                    </div>
                    <span class="text-sm font-bold text-gray-400 mt-2 md:mt-0">Correction Speed: &gt; 35V / sec</span>
                </div>
                
                <p class="text-gray-600 text-sm leading-relaxed max-w-4xl">
                    Our high-precision linear servo stabilizers protect high-end B2B electronics (MRI systems, CNC setups, assembly line processors) from harmful voltage spikes. Using micro-controller feedback loops and heavy carbon brush sliders, they stabilize output voltage within &plusmn;0.5%.
                </p>

                <!-- Technical Specification Table -->
                <div class="overflow-x-auto shadow-sm rounded-xl border border-gray-200 bg-white">
                    <table class="w-full text-left border-collapse text-xs md:text-sm">
                        <thead>
                            <tr class="bg-light border-b border-gray-200 text-dark uppercase font-bold tracking-wider">
                                <th class="p-4">Capacity Range</th>
                                <th class="p-4">Input Voltage Band</th>
                                <th class="p-4">Output Voltage</th>
                                <th class="p-4">Cooling Type</th>
                                <th class="p-4">Harmonics Output</th>
                                <th class="p-4 text-center">Data Sheets</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-150 text-gray-600 font-medium">
                            <tr>
                                <td class="p-4 font-bold text-dark">10 kVA - 150 kVA</td>
                                <td class="p-4">340V - 460V / 300V - 480V</td>
                                <td class="p-4">400V Three Phase &plusmn;1%</td>
                                <td class="p-4">Air Cooled (Force Air Fan)</td>
                                <td class="p-4">Nil (Zero distortion)</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-dark">150 kVA - 2000 kVA</td>
                                <td class="p-4">340V - 460V / 280V - 460V</td>
                                <td class="p-4">400V / 415V Three Phase &plusmn;0.5%</td>
                                <td class="p-4">Oil Cooled (ONAN grade oil tank)</td>
                                <td class="p-4">Nil (Zero distortion)</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- SECTION 4: INDUSTRIAL PUMPS -->
            <div id="pumps" class="scroll-mt-24 space-y-8">
                <div class="border-b-2 border-primary pb-4 flex flex-col md:flex-row justify-between items-start md:items-end">
                    <div>
                        <span class="text-xs uppercase font-bold text-secondary tracking-wider block">Hydraulics</span>
                        <h2 class="text-3xl font-extrabold font-display text-dark">Industrial Pumping Systems</h2>
                    </div>
                    <span class="text-sm font-bold text-gray-400 mt-2 md:mt-0">Efficiency: IE3 Premium Efficiency</span>
                </div>
                
                <p class="text-gray-600 text-sm leading-relaxed max-w-4xl">
                    We supply split-case centrifugal pumps, vertical multi-stage inline pumps, and high-discharge submersible borewell pumps. We design custom Hydro-Pneumatic (HYPN) pressure booster systems that maintain uniform pipeline pressure across tall structures.
                </p>

                <!-- Technical Specification Table -->
                <div class="overflow-x-auto shadow-sm rounded-xl border border-gray-200 bg-white">
                    <table class="w-full text-left border-collapse text-xs md:text-sm">
                        <thead>
                            <tr class="bg-light border-b border-gray-200 text-dark uppercase font-bold tracking-wider">
                                <th class="p-4">Pump Category</th>
                                <th class="p-4">Power Rating</th>
                                <th class="p-4">Max Head Range</th>
                                <th class="p-4">Discharge Capacity</th>
                                <th class="p-4">Applications</th>
                                <th class="p-4 text-center">Data Sheets</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-150 text-gray-600 font-medium">
                            <tr>
                                <td class="p-4 font-bold text-dark">Hydro-Pneumatic Systems</td>
                                <td class="p-4">5 HP - 75 HP (Multi-pump grid)</td>
                                <td class="p-4">Up to 120 Meters</td>
                                <td class="p-4">Up to 2500 Liters / Minute</td>
                                <td class="p-4">High-rise building domestic & flush supply</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-dark">Split-Case Centrifugal</td>
                                <td class="p-4">15 HP - 250 HP</td>
                                <td class="p-4">Up to 90 Meters</td>
                                <td class="p-4">Up to 8000 Liters / Minute</td>
                                <td class="p-4">Municipal supply, HVAC water circulating</td>
                                <td class="p-4 text-center">
                                    <button onclick="toggleModal('quote-modal', true)" class="px-3 py-1.5 bg-primary hover:bg-primary-dark text-white rounded text-[10px] uppercase font-bold">Request</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bottom CTA -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

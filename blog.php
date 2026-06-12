<?php
/**
 * Blog / Technical Articles Page
 */
$pageTitle = "Engineering Articles & Insights";
$pageDesc = "Read technical guides on choosing generator capacities, transformer oil filtration, and backup power networks for large construction projects from Prishiv Energy.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Technical Insights Hub</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            Professional engineering guides, regulatory compliance updates, and industrial maintenance tips.
        </p>
    </div>
</section>

<!-- Articles Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        
        <!-- Article 1 -->
        <article class="bg-light border border-gray-150 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between">
            <div class="p-8 space-y-4">
                <div class="flex items-center space-x-3 text-[10px] uppercase font-extrabold tracking-wider text-secondary">
                    <span>Power Sizing</span>
                    <span>&bull;</span>
                    <span>June 2026</span>
                </div>
                <h3 class="text-xl font-bold font-display text-dark leading-snug">Choosing the Right Diesel Generator: A Sizing Guide</h3>
                <p class="text-gray-500 text-xs leading-relaxed">
                    Calculating generator kVA requires assessing continuous running amps, starting currents of heavy lift motors, and backup levels. Under-sizing causes shutdowns, while over-sizing causes wet-stacking issues.
                </p>
                <div class="pt-2">
                    <p class="text-xs text-gray-400 font-semibold">Author: Dr. Amit Patel, VP Operations</p>
                </div>
            </div>
            <div class="p-6 bg-white border-t border-gray-100 flex items-center justify-between">
                <button onclick="openBlogModal('blog-1')" class="text-primary hover:text-accent font-bold text-xs uppercase tracking-wider flex items-center">
                    Read Guide <span class="ml-2">&rarr;</span>
                </button>
            </div>
        </article>

        <!-- Article 2 -->
        <article class="bg-light border border-gray-150 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between">
            <div class="p-8 space-y-4">
                <div class="flex items-center space-x-3 text-[10px] uppercase font-extrabold tracking-wider text-secondary">
                    <span>Maintenance</span>
                    <span>&bull;</span>
                    <span>May 2026</span>
                </div>
                <h3 class="text-xl font-bold font-display text-dark leading-snug">Transformer Maintenance: Best Industry Practices</h3>
                <p class="text-gray-500 text-xs leading-relaxed">
                    Prevent substation breakdowns by scheduling insulation meggering, winding resistance balances, and oil breakdown voltage (BDV) tests. Discover how vacuum dehydration maintains winding integrity.
                </p>
                <div class="pt-2">
                    <p class="text-xs text-gray-400 font-semibold">Author: Rajeev Sharma, CEO</p>
                </div>
            </div>
            <div class="p-6 bg-white border-t border-gray-100 flex items-center justify-between">
                <button onclick="openBlogModal('blog-2')" class="text-primary hover:text-accent font-bold text-xs uppercase tracking-wider flex items-center">
                    Read Guide <span class="ml-2">&rarr;</span>
                </button>
            </div>
        </article>

        <!-- Article 3 -->
        <article class="bg-light border border-gray-150 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between">
            <div class="p-8 space-y-4">
                <div class="flex items-center space-x-3 text-[10px] uppercase font-extrabold tracking-wider text-secondary">
                    <span>Infrastructure</span>
                    <span>&bull;</span>
                    <span>April 2026</span>
                </div>
                <h3 class="text-xl font-bold font-display text-dark leading-snug">Power Backup Solutions for Builders & Real Estate</h3>
                <p class="text-gray-650 text-sm leading-relaxed text-xs">
                    Residential high-rises and townships require redundant, synchronized generators. Learn about integrating Automatic Mains Failure (AMF) controls for fast automatic transitions.
                </p>
                <div class="pt-2">
                    <p class="text-xs text-gray-400 font-semibold">Author: Dr. Amit Patel, VP Operations</p>
                </div>
            </div>
            <div class="p-6 bg-white border-t border-gray-100 flex items-center justify-between">
                <button onclick="openBlogModal('blog-3')" class="text-primary hover:text-accent font-bold text-xs uppercase tracking-wider flex items-center">
                    Read Guide <span class="ml-2">&rarr;</span>
                </button>
            </div>
        </article>

    </div>
</section>

<!-- Modal Overlay for Reading Articles (Enterprise Level Interactivity) -->
<div id="blog-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70 hidden transition-opacity duration-300">
    <div class="absolute inset-0 cursor-pointer" onclick="closeBlogModal()"></div>
    <div class="bg-white rounded-xl shadow-2xl relative z-10 w-full max-w-2xl mx-4 max-h-[85vh] overflow-y-auto transform transition-all animate-fade-in-up">
        
        <!-- Modal Content Containers -->
        <div id="blog-1-content" class="hidden p-8 space-y-6 text-sm text-gray-700">
            <h3 class="text-2xl font-bold font-display text-dark border-b pb-4">Choosing the Right Diesel Generator: A Sizing Guide</h3>
            <p><strong>By Dr. Amit Patel</strong></p>
            <p>
                Procuring a commercial diesel generator (DG set) requires careful load calculations. Simply summing the labels on electrical appliances often results in over-sizing, while ignoring starting inrush currents results in under-sizing.
            </p>
            <h4 class="font-bold text-primary">1. Understanding Starting Currents</h4>
            <p>
                Inductive motors (pumps, compressors, elevators) draw starting currents 3 to 6 times their rated operating current. When sizing a generator, the starting kVA requirement of the largest motor must be accommodated.
            </p>
            <h4 class="font-bold text-primary">2. Wet Stacking</h4>
            <p>
                If a diesel generator operates below 30% of its rated capacity for extended durations, the engine does not reach its design operating temperature. This leads to unburned fuel deposits in the exhaust system, known as wet stacking, reducing engine life.
            </p>
            <h4 class="font-bold text-primary">3. CPCB Compliance</h4>
            <p>
                Ensure all backup installations conform to CPCB IV+ regulations. These guidelines mandate acoustic enclosures to limit noise below 75 dBA, alongside modern exhaust catalytic reduction.
            </p>
            <button onclick="closeBlogModal()" class="px-6 py-2.5 bg-primary text-white rounded font-bold hover:bg-primary-dark transition-colors">Close Article</button>
        </div>

        <div id="blog-2-content" class="hidden p-8 space-y-6 text-sm text-gray-700">
            <h3 class="text-2xl font-bold font-display text-dark border-b pb-4">Transformer Maintenance: Best Industry Practices</h3>
            <p><strong>By Rajeev Sharma</strong></p>
            <p>
                Power transformers are the core of utility distribution. Regular preventative maintenance prevents costly repairs and unscheduled shutdowns.
            </p>
            <h4 class="font-bold text-primary">1. Oil Breakdown Voltage (BDV) Testing</h4>
            <p>
                Transformer oil acts as an insulation medium and heat disperser. Over time, moisture ingress reduces its dielectric strength. Testing the oil's BDV annually is critical; if tests fall below 30kV, filtration is required.
            </p>
            <h4 class="font-bold text-primary">2. Insulation Resistance Testing</h4>
            <p>
                Using a megohmmeter (meggering) to test resistance between winding coils and the chassis tank helps identify insulation deterioration before a short-circuit fault occurs.
            </p>
            <h4 class="font-bold text-primary">3. Silica Gel Breather Check</h4>
            <p>
                The silica gel breather extracts moisture from air entering the expansion tank. If the gel turns from blue to pink, it has absorbed maximum moisture and must be replaced or baked immediately.
            </p>
            <button onclick="closeBlogModal()" class="px-6 py-2.5 bg-primary text-white rounded font-bold hover:bg-primary-dark transition-colors">Close Article</button>
        </div>

        <div id="blog-3-content" class="hidden p-8 space-y-6 text-sm text-gray-700">
            <h3 class="text-2xl font-bold font-display text-dark border-b pb-4">Power Backup Solutions for Builders & Real Estate</h3>
            <p><strong>By Dr. Amit Patel</strong></p>
            <p>
                High-density residential structures and townships demand high levels of energy resilience. Designing generator networks for these configurations requires careful coordination.
            </p>
            <h4 class="font-bold text-primary">1. Multi-Genset Synchronization</h4>
            <p>
                Instead of deploying one massive generator, it is often better to use multiple smaller units (e.g. 2 x 1000 kVA instead of 1 x 2000 kVA). A synchronization panel automatically starts or stops units based on real-time load demand, saving fuel.
            </p>
            <h4 class="font-bold text-primary">2. Automatic Transfer Switches (ATS)</h4>
            <p>
                An ATS panel automatically switches your critical circuits to backup within 10 seconds of main utility failure, preventing blackout situations in common lobbies, elevators, and water supply grids.
            </p>
            <h4 class="font-bold text-primary">3. Peak Shaving</h4>
            <p>
                In areas with variable grid tariffs, generators can be configured to run during high-tariff hours to shave peak grid loads, lowering total electricity costs.
            </p>
            <button onclick="closeBlogModal()" class="px-6 py-2.5 bg-primary text-white rounded font-bold hover:bg-primary-dark transition-colors">Close Article</button>
        </div>

    </div>
</div>

<script>
function openBlogModal(blogId) {
    // Hide all contents first
    document.getElementById('blog-1-content').classList.add('hidden');
    document.getElementById('blog-2-content').classList.add('hidden');
    document.getElementById('blog-3-content').classList.add('hidden');

    // Show current content
    const content = document.getElementById(blogId + '-content');
    const modal = document.getElementById('blog-modal');
    if (content && modal) {
        content.classList.remove('hidden');
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }
}

function closeBlogModal() {
    const modal = document.getElementById('blog-modal');
    if (modal) {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
}
</script>

<!-- Bottom CTA -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * Projects / Case Studies Page
 */
$pageTitle = "Infrastructure Case Studies";
$pageDesc = "Examine our portfolio of high-capacity diesel generator setups, voltage regulator grids, and substation transformer installations across India.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Infrastructure Case Studies</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            Real-world power engineering layouts delivered on-schedule and operating at 100% capacity.
        </p>
    </div>
</section>

<!-- Filterable Projects Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter Tabs -->
        <div class="flex flex-wrap gap-2 md:gap-4 justify-center mb-16 text-xs md:text-sm font-bold">
            <button class="project-filter-btn px-5 py-2.5 rounded-full border border-primary bg-primary text-white transition-all outline-none" data-filter="all">All Projects</button>
            <button class="project-filter-btn px-5 py-2.5 rounded-full border border-gray-200 bg-light text-gray-600 hover:border-primary transition-all outline-none" data-filter="government">Government</button>
            <button class="project-filter-btn px-5 py-2.5 rounded-full border border-gray-200 bg-light text-gray-600 hover:border-primary transition-all outline-none" data-filter="industrial">Industrial</button>
            <button class="project-filter-btn px-5 py-2.5 rounded-full border border-gray-200 bg-light text-gray-600 hover:border-primary transition-all outline-none" data-filter="commercial">Commercial</button>
            <button class="project-filter-btn px-5 py-2.5 rounded-full border border-gray-200 bg-light text-gray-600 hover:border-primary transition-all outline-none" data-filter="infrastructure">Infrastructure</button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
            
            <!-- Project 1 -->
            <div class="project-card bg-light border border-gray-100 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between" data-category="infrastructure">
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase font-extrabold text-secondary tracking-widest block">Infrastructure</span>
                    <h3 class="text-xl font-bold font-display text-dark">Godrej Greens Residential Power Grid</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Design and setup of a combined 3750 kVA synchronized backup generator plant. Includes heavy-gauge exhaust piping and customized soundproofing barriers.
                    </p>
                    <div class="text-xs text-gray-400 font-semibold space-y-1">
                        <div><strong>Capacity:</strong> 3 x 1250 kVA</div>
                        <div><strong>Engine:</strong> Cummins KTA50-G3</div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-100 bg-white">
                    <span class="text-xs text-primary font-bold uppercase tracking-wider">Completed: 2023 &bull; Pune</span>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card bg-light border border-gray-100 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between" data-category="industrial">
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase font-extrabold text-secondary tracking-widest block">Industrial</span>
                    <h3 class="text-xl font-bold font-display text-dark">Sterling Pharma Stabilizer Deployment</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Custom-engineered 2000 kVA oil-cooled linear servo voltage stabilizer, securing critical chemical process lines against line fluctuations.
                    </p>
                    <div class="text-xs text-gray-400 font-semibold space-y-1">
                        <div><strong>Capacity:</strong> 2000 kVA (Oil Cooled)</div>
                        <div><strong>Protection:</strong> &plusmn;0.5% Regulation</div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-100 bg-white">
                    <span class="text-xs text-primary font-bold uppercase tracking-wider">Completed: 2022 &bull; Vadodara</span>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card bg-light border border-gray-100 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between" data-category="government">
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase font-extrabold text-secondary tracking-widest block">Government</span>
                    <h3 class="text-xl font-bold font-display text-dark">AIIMS Hospital Substation Layout</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Turnkey execution of outdoor 33kV/11kV electrical substation. Deployed oil-immersed power transformers and gas-insulated ring main units (RMU).
                    </p>
                    <div class="text-xs text-gray-400 font-semibold space-y-1">
                        <div><strong>Capacity:</strong> 10 MVA Power Transformer</div>
                        <div><strong>Standard:</strong> IS-2026 Compliant</div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-100 bg-white">
                    <span class="text-xs text-primary font-bold uppercase tracking-wider">Completed: 2024 &bull; Patna</span>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card bg-light border border-gray-100 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between" data-category="commercial">
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase font-extrabold text-secondary tracking-widest block">Commercial</span>
                    <h3 class="text-xl font-bold font-display text-dark">Signature IT Towers Silent Genset Array</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Design and erection of roof-mounted silent generator network with AMF panels, providing backup power to continuous data server halls.
                    </p>
                    <div class="text-xs text-gray-400 font-semibold space-y-1">
                        <div><strong>Capacity:</strong> 2 x 1500 kVA</div>
                        <div><strong>Acoustic:</strong> CPCB IV+ Soundproof</div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-100 bg-white">
                    <span class="text-xs text-primary font-bold uppercase tracking-wider">Completed: 2023 &bull; Noida</span>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card bg-light border border-gray-100 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between" data-category="government">
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase font-extrabold text-secondary tracking-widest block">Government</span>
                    <h3 class="text-xl font-bold font-display text-dark">NHAI Smart City Toll Grid Transformers</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Supply of energy-efficient 11kV distribution transformers and outdoor servo regulators along the expressway corridor.
                    </p>
                    <div class="text-xs text-gray-400 font-semibold space-y-1">
                        <div><strong>Capacity:</strong> 5 x 500 kVA Transformers</div>
                        <div><strong>Class:</strong> BEE Star Rated</div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-100 bg-white">
                    <span class="text-xs text-primary font-bold uppercase tracking-wider">Completed: 2024 &bull; Delhi-Mumbai Exp.</span>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-card bg-light border border-gray-100 rounded-2xl overflow-hidden hover-card-trigger flex flex-col justify-between" data-category="industrial">
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase font-extrabold text-secondary tracking-widest block">Industrial</span>
                    <h3 class="text-xl font-bold font-display text-dark">Toyota Ancillary Foundry Power Backup</h3>
                    <p class="text-gray-550 text-xs leading-relaxed">
                        Heavy-duty continuous prime rating generator setup for forging shop furnace backup. Included specialized fuel cooling and return lines.
                    </p>
                    <div class="text-xs text-gray-400 font-semibold space-y-1">
                        <div><strong>Capacity:</strong> 2500 kVA prime generator</div>
                        <div><strong>Control:</strong> Woodword Digital Governor</div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-100 bg-white">
                    <span class="text-xs text-primary font-bold uppercase tracking-wider">Completed: 2021 &bull; Bengaluru</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Lightweight self-contained filter script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.project-filter-btn');
    const cards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Toggle active styles on buttons
            filterBtns.forEach(b => {
                b.classList.remove('bg-primary', 'text-white', 'border-primary');
                b.classList.add('bg-light', 'text-gray-600', 'border-gray-200');
            });
            btn.classList.remove('bg-light', 'text-gray-600', 'border-gray-200');
            btn.classList.add('bg-primary', 'text-white', 'border-primary');

            const filterValue = btn.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<!-- Bottom CTA -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * About Us Page
 */
$pageTitle = "Corporate Profile & Leadership";
$pageDesc = "Learn about the history, mission, vision, core values, leadership team, and industrial infrastructure of Prishiv Energy Private Limited.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Title Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Corporate Profile</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            A decade of engineering excellence, supply-chain efficiency, and power infrastructure trust.
        </p>
    </div>
</section>

<!-- History & Overview -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-6">
            <h2 class="text-2xl font-bold font-display text-dark border-l-4 border-primary pl-4">Our History</h2>
            <p class="text-gray-600 leading-relaxed text-sm">
                Founded in 2011 as a specialized engineering consultation firm, **Prishiv Energy Private Limited** has evolved into a premier turnkey provider of power generation, regulation, and distribution infrastructure. 
            </p>
            <p class="text-gray-600 leading-relaxed text-sm">
                Recognizing the gaps in heavy B2B energy supply reliability, we expanded our offerings to include complete product supply chains for high-capacity Diesel Generator sets, Power Transformers, Servo Voltage Stabilizers, and Industrial Pumps. 
            </p>
            <p class="text-gray-600 leading-relaxed text-sm">
                Over the past 15 years, we have delivered more than 500 major projects across India. Our client roster includes top real estate developers, process manufacturers, government utilities, and mission-critical hospital grids.
            </p>
        </div>
        <div class="bg-light p-8 rounded-2xl border border-gray-150 relative">
            <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
            <div class="relative z-10 space-y-4">
                <h3 class="text-lg font-bold font-display text-primary">Key Milestones</h3>
                <ul class="space-y-4 text-xs font-semibold text-gray-700">
                    <li class="flex items-start"><span class="text-secondary mr-3 text-sm">&check;</span> <span><strong>2011:</strong> Company established in Noida, Uttar Pradesh, with focus on electrical layout consultation.</span></li>
                    <li class="flex items-start"><span class="text-secondary mr-3 text-sm">&check;</span> <span><strong>2014:</strong> Signed national channel partnership agreements with leading diesel engine makers.</span></li>
                    <li class="flex items-start"><span class="text-secondary mr-3 text-sm">&check;</span> <span><strong>2017:</strong> Set up custom transformer design division and local assembly plant.</span></li>
                    <li class="flex items-start"><span class="text-secondary mr-3 text-sm">&check;</span> <span><strong>2021:</strong> Achieved PAN India execution status, supplying equipment across 18 states.</span></li>
                    <li class="flex items-start"><span class="text-secondary mr-3 text-sm">&check;</span> <span><strong>2024:</strong> Certified ISO 9001:2015 and ISO 14001:2015 for system compliance standards.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision & Values -->
<section class="py-20 bg-light border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Mission Card -->
        <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 space-y-4">
            <h3 class="text-xl font-bold font-display text-primary flex items-center">
                <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center mr-3 text-sm font-black">&bull;</span> Our Mission
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                To engineer and deliver the most energy-efficient, reliable, and compliant power solutions that keep infrastructure grids functioning without interruptions.
            </p>
        </div>

        <!-- Vision Card -->
        <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 space-y-4">
            <h3 class="text-xl font-bold font-display text-primary flex items-center">
                <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center mr-3 text-sm font-black">&bull;</span> Our Vision
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                To become India's most trusted partner for premium heavy-duty industrial equipment, setting industrial standards in safety, engineering integrity, and sustainable growth.
            </p>
        </div>

        <!-- Core Values Card -->
        <div class="bg-white p-8 rounded-xl shadow-premium border border-gray-100 space-y-4">
            <h3 class="text-xl font-bold font-display text-primary flex items-center">
                <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center mr-3 text-sm font-black">&bull;</span> Core Values
            </h3>
            <ul class="text-gray-600 text-sm space-y-2">
                <li><strong>Reliability:</strong> We back our equipment with solid warranties.</li>
                <li><strong>Engineering Integrity:</strong> We do not cut corners. We design to code.</li>
                <li><strong>Customer Centricity:</strong> SLA response times are treated as binding covenants.</li>
            </ul>
        </div>

    </div>
</section>

<!-- Leadership Team -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Our Directors</h2>
            <p class="text-3xl md:text-4xl font-extrabold font-display text-dark tracking-tight">Leadership & Board</p>
            <div class="w-16 h-1 bg-primary mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            
            <!-- Leader 1 -->
            <div class="text-center space-y-4">
                <div class="w-40 h-40 bg-gradient-to-br from-primary to-primary-light rounded-full mx-auto shadow-lg flex items-center justify-center text-white text-3xl font-bold">
                    RS
                </div>
                <div class="space-y-1">
                    <h3 class="text-lg font-bold font-display text-dark">Rajeev Sharma</h3>
                    <p class="text-xs uppercase text-accent font-bold tracking-wider">Chief Executive Officer</p>
                </div>
                <p class="text-gray-500 text-xs px-4 leading-relaxed">
                    Over 25 years of corporate experience in power sector logistics. Formulates national vendor channels and financial growth strategy.
                </p>
            </div>

            <!-- Leader 2 -->
            <div class="text-center space-y-4">
                <div class="w-40 h-40 bg-gradient-to-br from-primary to-primary-light rounded-full mx-auto shadow-lg flex items-center justify-center text-white text-3xl font-bold">
                    AP
                </div>
                <div class="space-y-1">
                    <h3 class="text-lg font-bold font-display text-dark">Dr. Amit Patel</h3>
                    <p class="text-xs uppercase text-accent font-bold tracking-wider">VP Operations & Technical Chief</p>
                </div>
                <p class="text-gray-500 text-xs px-4 leading-relaxed">
                    PhD in Power Systems. Directs custom electrical grid integrations, transformer manufacturing, and quality testing checks.
                </p>
            </div>

            <!-- Leader 3 -->
            <div class="text-center space-y-4">
                <div class="w-40 h-40 bg-gradient-to-br from-primary to-primary-light rounded-full mx-auto shadow-lg flex items-center justify-center text-white text-3xl font-bold">
                    SN
                </div>
                <div class="space-y-1">
                    <h3 class="text-lg font-bold font-display text-dark">Smita Nair</h3>
                    <p class="text-xs uppercase text-accent font-bold tracking-wider">VP - Business Relations & Sales</p>
                </div>
                <p class="text-gray-500 text-xs px-4 leading-relaxed">
                    Expert in large-scale government procurement bidding, compliance clearances, and client relationship management.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Infrastructure Details -->
<section class="py-20 bg-light border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-6">
                <h2 class="text-2xl font-bold font-display text-dark border-l-4 border-primary pl-4">Infrastructure & Plants</h2>
                <p class="text-gray-600 leading-relaxed text-sm">
                    Prishiv Energy operates a state-of-the-art corporate office and design laboratory in **Noida (Sector 62)**, coordinating corporate sales, project bidding, and layout blueprints.
                </p>
                <p class="text-gray-600 leading-relaxed text-sm">
                    Our primary assembly facility, situated in an industrial cluster nearby, handles copper wind coil baking, transformer chassis testing, and generator acoustic soundproof panelling checks. 
                </p>
                <p class="text-gray-600 leading-relaxed text-sm">
                    To maintain our 2-hour response guarantees, we operate regional storage and service parts warehouse hubs in **Mumbai, Chennai, and Kolkata**.
                </p>
            </div>
            
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-xl border border-gray-150 shadow-sm text-center">
                    <div class="text-2xl font-extrabold text-primary font-display mb-1">Noida</div>
                    <div class="text-[10px] uppercase font-bold text-gray-400 tracking-wider">HQ & Engineering Center</div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-150 shadow-sm text-center">
                    <div class="text-2xl font-extrabold text-primary font-display mb-1">Mumbai</div>
                    <div class="text-[10px] uppercase font-bold text-gray-400 tracking-wider">Western Logistics Hub</div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-150 shadow-sm text-center">
                    <div class="text-2xl font-extrabold text-primary font-display mb-1">Chennai</div>
                    <div class="text-[10px] uppercase font-bold text-gray-400 tracking-wider">Southern Spares Depot</div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-150 shadow-sm text-center">
                    <div class="text-2xl font-extrabold text-primary font-display mb-1">Kolkata</div>
                    <div class="text-[10px] uppercase font-bold text-gray-400 tracking-wider">Eastern Service Branch</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Certifications detail grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Regulatory Compliance</h2>
            <p class="text-3xl md:text-4xl font-extrabold font-display text-dark tracking-tight">Accreditation & Certifications</p>
            <div class="w-16 h-1 bg-primary mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
            
            <div class="bg-light p-8 rounded-xl border border-gray-100 flex flex-col justify-between">
                <div class="space-y-4">
                    <h4 class="text-lg font-bold font-display text-primary">ISO 9001:2015</h4>
                    <p class="text-gray-500 leading-relaxed text-xs">
                        Certified Quality Management System covering our entire procurement sequence, vendor auditing methods, assembly trials, and post-installation reviews.
                    </p>
                </div>
                <span class="text-xs text-secondary font-bold uppercase tracking-wider mt-6 block">Registered compliance</span>
            </div>

            <div class="bg-light p-8 rounded-xl border border-gray-100 flex flex-col justify-between">
                <div class="space-y-4">
                    <h4 class="text-lg font-bold font-display text-primary">ISO 14001:2015</h4>
                    <p class="text-gray-500 leading-relaxed text-xs">
                        Environmental Management standard compliance. Controls raw-material recycling, low-emission tests for our gensets, and waste management at assembly plants.
                    </p>
                </div>
                <span class="text-xs text-secondary font-bold uppercase tracking-wider mt-6 block">Registered compliance</span>
            </div>

            <div class="bg-light p-8 rounded-xl border border-gray-100 flex flex-col justify-between">
                <div class="space-y-4">
                    <h4 class="text-lg font-bold font-display text-primary">CPCB IV+ Approved</h4>
                    <p class="text-gray-500 leading-relaxed text-xs">
                        All diesel generator sets conform to the latest emission norms set by the Central Pollution Control Board. Guaranteed low carbon output and silent enclosures.
                    </p>
                </div>
                <span class="text-xs text-secondary font-bold uppercase tracking-wider mt-6 block">Registered compliance</span>
            </div>

        </div>
    </div>
</section>

<!-- Bottom CTA -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * Careers / Open Positions Page
 */
$pageTitle = "Engineering Careers & Opportunities";
$pageDesc = "Join the engineering team at Prishiv Energy Private Limited. Explore job opportunities for electrical engineers, technicians, and corporate sales leaders.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Join Our Team</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            Build a career in power engineering infrastructure with an industry leader.
        </p>
    </div>
</section>

<!-- Company Culture & Benefits -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <div class="space-y-6">
            <h2 class="text-2xl font-bold font-display text-dark border-l-4 border-primary pl-4">Why Work at Prishiv?</h2>
            <p class="text-gray-650 text-sm leading-relaxed">
                Prishiv Energy is a progressive engineering organization. We believe that our team's expertise is our primary asset. We provide a workplace that fosters professional growth, structural safety, and technical training.
            </p>
            <p class="text-gray-655 text-sm leading-relaxed">
                Whether you are a certified field technician deploying massive multi-genset systems or a design engineer blueprinting 33kV substations, you will find challenging projects and support for continuing education.
            </p>
            
            <!-- Core Benefits Grid -->
            <div class="grid grid-cols-2 gap-6 pt-4 text-xs font-semibold text-gray-750">
                <div class="flex items-center"><span class="w-3 h-3 bg-secondary rounded-full mr-3"></span> High-safety industrial policies</div>
                <div class="flex items-center"><span class="w-3 h-3 bg-secondary rounded-full mr-3"></span> Certified OEM trainings</div>
                <div class="flex items-center"><span class="w-3 h-3 bg-secondary rounded-full mr-3"></span> Medical coverage plans</div>
                <div class="flex items-center"><span class="w-3 h-3 bg-secondary rounded-full mr-3"></span> Annual performance incentives</div>
            </div>
        </div>

        <div class="bg-light p-8 rounded-2xl border border-gray-150 relative">
            <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>
            <div class="relative z-10 space-y-4">
                <h3 class="text-lg font-bold font-display text-primary">Core Growth Statistics</h3>
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <span class="block text-2xl font-extrabold text-primary font-display mb-1">120+</span>
                        <span class="text-[9px] uppercase tracking-wider font-semibold text-gray-400">Team Members</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <span class="block text-2xl font-extrabold text-primary font-display mb-1">15+</span>
                        <span class="text-[9px] uppercase tracking-wider font-semibold text-gray-400">Engineering Disciplines</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Current Vacancies -->
<section class="py-20 bg-light border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Open Vacancies</h2>
            <p class="text-3xl md:text-4xl font-extrabold font-display text-dark tracking-tight">Begin Your Journey</p>
            <div class="w-16 h-1 bg-primary mx-auto mt-4 rounded"></div>
        </div>

        <!-- Job grid -->
        <div class="space-y-6">
            
            <!-- Job 1 -->
            <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div class="space-y-2">
                    <span class="bg-primary/10 text-primary text-[10px] uppercase font-extrabold tracking-widest px-2.5 py-1 rounded">Engineering</span>
                    <h3 class="text-xl font-bold font-display text-dark">Electrical Commissioning Engineer (Substations)</h3>
                    <p class="text-gray-500 text-xs max-w-2xl leading-relaxed">
                        Responsible for layout commissioning, testing, and energizing outdoor power transformers (up to 33kV class), control panel wiring, and grid protection relays. Requires 3-5 years experience and B.Tech in Electrical.
                    </p>
                </div>
                <a href="#apply-form" onclick="preselectJob('Commissioning Engineer')" class="w-full md:w-auto px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold text-center text-sm shadow transition-colors flex-shrink-0">
                    Apply Now
                </a>
            </div>

            <!-- Job 2 -->
            <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div class="space-y-2">
                    <span class="bg-primary/10 text-primary text-[10px] uppercase font-extrabold tracking-widest px-2.5 py-1 rounded">Corporate Sales</span>
                    <h3 class="text-xl font-bold font-display text-dark">B2B Business Development Executive (Power Systems)</h3>
                    <p class="text-gray-500 text-xs max-w-2xl leading-relaxed">
                        Identify and bid for high-capacity backup generator and transformer contracts with builders, manufacturing plants, and government EPC firms. Requires MBA/B.Tech and 2+ years B2B sales experience.
                    </p>
                </div>
                <a href="#apply-form" onclick="preselectJob('B2B Sales Executive')" class="w-full md:w-auto px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold text-center text-sm shadow transition-colors flex-shrink-0">
                    Apply Now
                </a>
            </div>

            <!-- Job 3 -->
            <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div class="space-y-2">
                    <span class="bg-primary/10 text-primary text-[10px] uppercase font-extrabold tracking-widest px-2.5 py-1 rounded">Field Service</span>
                    <h3 class="text-xl font-bold font-display text-dark">Lead Maintenance & Service Technician (Gensets)</h3>
                    <p class="text-gray-500 text-xs max-w-2xl leading-relaxed">
                        Perform routine oil changes, diagnostics, and repairs for commercial diesel generators under maintenance contracts. Handle call-outs within Noida/NCR zones. ITI/Diploma in Electrical/Mechanical with 3+ years experience.
                    </p>
                </div>
                <a href="#apply-form" onclick="preselectJob('Lead Service Technician')" class="w-full md:w-auto px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded font-bold text-center text-sm shadow transition-colors flex-shrink-0">
                    Apply Now
                </a>
            </div>

        </div>

    </div>
</section>

<!-- Application Form -->
<section id="apply-form" class="py-20 bg-white scroll-mt-24">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-light p-8 md:p-12 rounded-2xl border border-gray-150 shadow-premium">
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold font-display text-dark">Submit Application</h3>
                <p class="text-xs text-gray-500 mt-2">Provide your engineering credentials and our HR manager will schedule an interview.</p>
            </div>

            <form action="careers.php" method="POST" id="career-form" onsubmit="handleCareerSubmit(event)" class="space-y-6 text-sm">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">FullName *</label>
                        <input type="text" required name="name" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Email Address *</label>
                        <input type="email" required name="email" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="john@domain.com">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Phone Number *</label>
                        <input type="tel" required name="phone" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="+91-XXXXX-XXXXX">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Applied Position *</label>
                        <select required id="applied-position" name="position" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                            <option value="">-- Select vacancy --</option>
                            <option value="Commissioning Engineer">Electrical Commissioning Engineer</option>
                            <option value="B2B Sales Executive">B2B Business Development Executive</option>
                            <option value="Lead Service Technician">Lead Maintenance & Service Technician</option>
                            <option value="General Engineering">General / Intern applications</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Brief Cover Note *</label>
                    <textarea required name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="Summarize your engineering expertise and core systems background..."></textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Upload Resume (PDF / DOC) *</label>
                    <div class="border-2 border-dashed border-gray-300 hover:border-primary rounded-lg p-6 text-center cursor-pointer relative bg-white transition-colors">
                        <input type="file" required name="resume" accept=".pdf,.doc,.docx" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                        <div class="text-xs text-gray-500">
                            <!-- Cloud Upload Icon -->
                            <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <span>Click here or drag files to upload resume (Max 5MB)</span>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full py-4 bg-accent hover:bg-accent-dark text-white rounded font-bold text-center shadow-lg transition-colors">
                    Submit Application
                </button>
            </form>

            <!-- Success Confirmation -->
            <div id="career-success" class="hidden p-8 text-center space-y-4 bg-white rounded-xl">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto text-green-500">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-gray-800">Application Received</h4>
                <p class="text-sm text-gray-500">Thank you! Your job application is registered. Our corporate human resource division will evaluate your engineering background and get back to you shortly.</p>
                <button onclick="resetCareerForm()" class="px-6 py-2 bg-primary text-white rounded font-semibold hover:bg-primary-dark transition-colors">
                    Back to Form
                </button>
            </div>
        </div>

    </div>
</section>

<!-- Job Selection Helper script -->
<script>
function preselectJob(jobName) {
    const select = document.getElementById('applied-position');
    if (select) {
        select.value = jobName;
    }
}

function handleCareerSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('career-form');
    const success = document.getElementById('career-success');
    if (form && success) {
        form.classList.add('hidden');
        success.classList.remove('hidden');
    }
}

function resetCareerForm() {
    const form = document.getElementById('career-form');
    const success = document.getElementById('career-success');
    if (form && success) {
        form.reset();
        form.classList.remove('hidden');
        success.classList.add('hidden');
    }
}
</script>

<!-- Bottom CTA -->
<?php include_once __DIR__ . '/components/cta.php'; ?>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

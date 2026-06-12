<?php
// Determine if we are on the homepage for transparent navigation overlay
$currentPage = basename($_SERVER['SCRIPT_NAME']);
$isHome = ($currentPage === 'index.php' || $currentPage === '' || $currentPage === '/');
$navThemeClass = $isHome ? 'absolute top-0 left-0 w-full z-40 bg-transparent text-white transition-all duration-300' : 'sticky top-0 z-40 bg-white text-dark shadow-sm border-b border-gray-100 transition-all duration-300';
?>

<!-- Main Header -->
<header id="main-header" class="<?php echo $navThemeClass; ?>">
    <!-- Top Info Bar (Hidden on Mobile, collapses on scroll) -->
    <div id="top-bar" class="bg-dark text-gray-300 text-xs py-2 px-4 md:px-8 flex justify-between items-center transition-all duration-300 z-50 relative <?php echo !$isHome ? 'border-b border-gray-800' : ''; ?>">
        <div class="flex items-center space-x-6">
            <span class="flex items-center">
                <!-- Telephone Icon -->
                <svg class="w-3.5 h-3.5 mr-2 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                +91-9876543210
            </span>
            <span class="flex items-center">
                <!-- Envelope Icon -->
                <svg class="w-3.5 h-3.5 mr-2 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                sales@prishivenergy.com
            </span>
        </div>
        <div class="flex items-center space-x-4">
            <span class="bg-primary px-2 py-0.5 rounded text-[10px] uppercase font-semibold text-white tracking-wider">ISO 9001:2015 & 14001:2015</span>
            <span class="hidden lg:inline text-gray-400">Pan India Sales & Service</span>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="index" class="flex items-center space-x-3 group">
                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center p-1 shadow-md border border-gray-100">
                    <img src="assets/images/logo.jpeg" alt="Prishiv Energy" class="h-10 w-10 object-contain">
                </div>
                <div class="flex flex-col">
                    <span class="text-xl md:text-2xl font-extrabold tracking-tight font-display text-primary group-hover:text-primary-light transition-colors">
                        PRISHIV <span class="text-secondary">ENERGY</span>
                    </span>
                    <span class="text-[9px] uppercase tracking-widest font-semibold text-gray-400 group-hover:text-accent transition-colors">
                        Powering Progress
                    </span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden xl:flex space-x-6 text-sm font-medium tracking-wide">
                <a href="index" class="hover:text-accent transition-colors py-2 border-b-2 <?php echo $currentPage === 'index.php' ? 'border-primary text-primary font-bold' : 'border-transparent text-inherit'; ?>">Home</a>
                <a href="about" class="hover:text-accent transition-colors py-2 border-b-2 <?php echo $currentPage === 'about.php' ? 'border-primary text-primary font-bold' : 'border-transparent text-inherit'; ?>">About Us</a>
                <a href="services" class="hover:text-accent transition-colors py-2 border-b-2 <?php echo $currentPage === 'services.php' ? 'border-primary text-primary font-bold' : 'border-transparent text-inherit'; ?>">Services</a>
                <a href="products" class="hover:text-accent transition-colors py-2 border-b-2 <?php echo $currentPage === 'products.php' ? 'border-primary text-primary font-bold' : 'border-transparent text-inherit'; ?>">Product</a>
                <a href="blog" class="hover:text-accent transition-colors py-2 border-b-2 <?php echo $currentPage === 'blog.php' ? 'border-primary text-primary font-bold' : 'border-transparent text-inherit'; ?>">Blog</a>
                <a href="contact" class="hover:text-accent transition-colors py-2 border-b-2 <?php echo $currentPage === 'contact.php' ? 'border-primary text-primary font-bold' : 'border-transparent text-inherit'; ?>">Contact Us</a>
            </nav>

            <!-- Action buttons -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="tel:+919876543210" class="flex items-center px-4 py-2 border border-current rounded-md text-sm font-semibold hover:bg-primary hover:text-white hover:border-primary transition-all duration-300">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Call Us
                </a>
                <button onclick="toggleModal('quote-modal', true)" class="px-5 py-2.5 bg-accent hover:bg-accent-dark text-white rounded-md text-sm font-semibold shadow-md btn-pulse transition-all duration-300">
                    Request Quote
                </button>
            </div>

            <!-- Hamburger Button (Mobile Menu) -->
            <div class="xl:hidden flex items-center">
                <button id="mobile-menu-btn" class="p-2 rounded-md hover:bg-gray-100 hover:text-primary focus:outline-none transition-colors" aria-label="Toggle Menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden xl:hidden fixed inset-0 z-50 bg-dark bg-opacity-90 flex justify-end">
        <!-- Overlay Closer -->
        <div class="absolute inset-0 cursor-pointer" onclick="toggleMobileMenu(false)"></div>
        <div class="w-80 bg-white h-full shadow-2xl relative z-10 p-6 flex flex-col justify-between overflow-y-auto">
            <div>
                <div class="flex justify-between items-center pb-6 border-b border-gray-100">
                    <div class="flex items-center space-x-2">
                        <img src="assets/images/logo.jpeg" alt="Prishiv Energy" class="h-8 w-8">
                        <span class="text-lg font-bold font-display text-primary">PRISHIV ENERGY</span>
                    </div>
                    <button onclick="toggleMobileMenu(false)" class="p-2 text-gray-500 hover:text-red-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="mt-8 flex flex-col space-y-4 text-base font-semibold text-gray-700">
                    <a href="index" class="hover:text-accent py-2 border-b border-gray-50">Home</a>
                    <a href="about" class="hover:text-accent py-2 border-b border-gray-50">About Us</a>
                    <a href="services" class="hover:text-accent py-2 border-b border-gray-50">Services</a>
                    <a href="products" class="hover:text-accent py-2 border-b border-gray-50">Product</a>
                    <a href="blog" class="hover:text-accent py-2 border-b border-gray-50">Blog</a>
                    <a href="contact" class="hover:text-accent py-2 border-b border-gray-50">Contact Us</a>
                </nav>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-100 flex flex-col space-y-3">
                <a href="tel:+919876543210" class="flex items-center justify-center py-3 border border-primary text-primary rounded-md font-bold text-center hover:bg-primary hover:text-white transition-all">
                    Call: +91-9876543210
                </a>
                <button onclick="toggleModal('quote-modal', true); toggleMobileMenu(false)" class="w-full py-3 bg-accent hover:bg-accent-dark text-white rounded-md font-bold text-center shadow-lg transition-all">
                    Request A Quote
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Global Request Quote Modal -->
<div id="quote-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-65 hidden transition-opacity duration-300">
    <div class="absolute inset-0 cursor-pointer" onclick="toggleModal('quote-modal', false)"></div>
    <div class="bg-white rounded-xl shadow-2xl relative z-10 w-full max-w-lg mx-4 overflow-hidden transform transition-all animate-fade-in-up">
        <!-- Header -->
        <div class="bg-primary text-white p-6 flex justify-between items-center">
            <div>
                <h3 class="text-xl font-bold font-display">Request an Engineering Quote</h3>
                <p class="text-xs text-blue-200 mt-1">Submit your requirements and our project team will contact you within 2 hours.</p>
            </div>
            <button onclick="toggleModal('quote-modal', false)" class="text-white hover:text-accent transition-colors">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- Form Body -->
        <form action="contact.php" method="POST" class="p-6 space-y-4 text-sm" id="quote-modal-form" onsubmit="handleQuoteSubmit(event)">
            <input type="hidden" name="form_type" value="quote_request">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Your Name *</label>
                    <input type="text" required name="name" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="John Doe">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Company Name *</label>
                    <input type="text" required name="company" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="Infrastructure Corp">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Email Address *</label>
                    <input type="email" required name="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="john@company.com">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Phone Number *</label>
                    <input type="tel" required name="phone" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="+91-XXXXX-XXXXX">
                </div>
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Required Solution *</label>
                <select required name="solution" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                    <option value="">-- Select Category --</option>
                    <option value="generators">Diesel Generators (DG Sets)</option>
                    <option value="transformers">Distribution Transformers</option>
                    <option value="regulators">Power / Voltage Regulators</option>
                    <option value="pumps">Industrial Pumping Systems</option>
                    <option value="filters">Air Filtration Solutions</option>
                    <option value="amc">Annual Maintenance Contract (AMC)</option>
                    <option value="other">Custom Infrastructure Design</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Project Details / Specifications *</label>
                <textarea required name="message" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="Please mention capacity (e.g. 500 kVA generator, 11kV/433V transformer) and site location."></textarea>
            </div>
            <div class="pt-2">
                <button type="submit" class="w-full py-3 bg-accent hover:bg-accent-dark text-white rounded font-bold shadow-lg transition-colors flex items-center justify-center">
                    Submit RFP Details
                </button>
            </div>
        </form>
        <!-- Success Confirmation -->
        <div id="quote-success" class="hidden p-8 text-center space-y-4">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto text-green-500">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h4 class="text-xl font-bold text-gray-800">Quote Request Submitted</h4>
            <p class="text-sm text-gray-500">Thank you! Your reference number is <strong class="text-primary font-bold">PE-<?= rand(1000,9999); ?></strong>. Our technical engineering division will review your load specifications and contact you shortly.</p>
            <button onclick="toggleModal('quote-modal', false); resetQuoteForm();" class="px-6 py-2 bg-primary text-white rounded font-semibold hover:bg-primary-dark transition-colors">
                Close
            </button>
        </div>
    </div>
</div>

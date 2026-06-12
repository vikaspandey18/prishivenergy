<?php
/**
 * Contact Page
 */
$pageTitle = "Contact Corporate Sales & Support";
$pageDesc = "Get in touch with Prishiv Energy Private Limited for commercial inquiries, engineering consultations, or technical assistance.";
include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="relative bg-primary py-24 text-white">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('assets/images/hero/banner.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-transparent opacity-85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-display">Contact Us</h1>
        <p class="text-blue-100 text-sm mt-3 max-w-xl">
            Reach out to our corporate office or local service hubs for engineering assistance.
        </p>
    </div>
</section>

<!-- Contact Info & Form -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Left: Contact Details -->
            <div class="space-y-12">
                <div class="space-y-4">
                    <h2 class="text-2xl font-bold font-display text-dark border-l-4 border-primary pl-4">Get In Touch</h2>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Prishiv Energy has sales and service support representatives across India. Contact our Noida headquarters for bidding inquiries, product sizing advice, or to schedule an audit.
                    </p>
                </div>

                <!-- Office addresses -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                            <!-- Pin Icon -->
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div class="space-y-1 text-sm">
                            <h4 class="font-bold text-dark font-display">Corporate Headquarters</h4>
                            <p class="text-gray-500">Prishiv Corporate Tower, Plot No. 12A, Sector 62, Noida, Uttar Pradesh, 201301</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                            <!-- Phone Icon -->
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div class="space-y-1 text-sm">
                            <h4 class="font-bold text-dark font-display">Inquiry Phone Lines</h4>
                            <p class="text-gray-500">Sales Office: +91-9876543210</p>
                            <p class="text-gray-500">Support / AMC Desk: +91-9876543211</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                            <!-- Envelope Icon -->
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="space-y-1 text-sm">
                            <h4 class="font-bold text-dark font-display">Email Communication</h4>
                            <p class="text-gray-500">Corporate Sales: sales@prishivenergy.com</p>
                            <p class="text-gray-500">Careers/HR: careers@prishivenergy.com</p>
                        </div>
                    </div>
                </div>

                <!-- Regional branch coordinates -->
                <div class="pt-6 border-t border-gray-100 space-y-4 text-xs font-semibold text-gray-500">
                    <h4 class="text-xs uppercase font-extrabold text-secondary tracking-widest mb-4">Regional Contact Points</h4>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-dark font-bold text-sm">Western Region (Mumbai)</p>
                            <p>mumbai.sales@prishivenergy.com</p>
                        </div>
                        <div>
                            <p class="text-dark font-bold text-sm">Southern Region (Chennai)</p>
                            <p>chennai.sales@prishivenergy.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Form -->
            <div>
                <div class="bg-light p-8 md:p-12 rounded-2xl border border-gray-150 shadow-premium">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold font-display text-dark">Send an Inquiry</h3>
                        <p class="text-xs text-gray-500 mt-2">Submit your load configurations or requirements and our engineering division will contact you.</p>
                    </div>

                    <form action="contact.php" method="POST" id="contact-page-form" onsubmit="handleContactSubmit(event)" class="space-y-6 text-sm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">FullName *</label>
                                <input type="text" required name="name" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Company Name *</label>
                                <input type="text" required name="company" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="Infrastructure Corp">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Email Address *</label>
                                <input type="email" required name="email" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="john@company.com">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Phone Number *</label>
                                <input type="tel" required name="phone" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="+91-XXXXX-XXXXX">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Inquiry Category *</label>
                            <select required name="category" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                                <option value="">-- Select Category --</option>
                                <option value="sales">Procure Diesel Generator / Transformer</option>
                                <option value="service">Request Maintenance / AMC SLA</option>
                                <option value="audit">Request Power Quality Audit</option>
                                <option value="other">General B2B Inquiry</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Message Description *</label>
                            <textarea required name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="Details about kVA capacities, loads, or service timelines..."></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 bg-accent hover:bg-accent-dark text-white rounded font-bold text-center shadow-lg transition-colors">
                            Send Enquiry Message
                        </button>
                    </form>

                    <!-- Success Confirmation -->
                    <div id="contact-success" class="hidden p-8 text-center space-y-4 bg-white rounded-xl">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto text-green-500">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Enquiry Submitted</h4>
                        <p class="text-sm text-gray-500">Thank you! Your reference number is <strong class="text-primary font-bold">PE-<?= rand(1000,9999); ?></strong>. Our technical engineering division will review your details and contact you within 2 hours.</p>
                        <button onclick="resetContactForm()" class="px-6 py-2 bg-primary text-white rounded font-semibold hover:bg-primary-dark transition-colors">
                            Back to Form
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Google Map Vector Placeholder -->
<section class="w-full h-96 bg-light border-t border-gray-200 relative overflow-hidden flex items-center justify-center p-6">
    <!-- Grid Overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(#808080_1px,transparent_1px)] [background-size:24px_24px] opacity-10"></div>
    <div class="text-center z-10 space-y-4">
        <!-- Map Pin Icon -->
        <svg class="w-16 h-16 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
        <div class="space-y-1">
            <h4 class="text-lg font-bold font-display text-dark">Interactive Map Center</h4>
            <p class="text-gray-500 text-xs">Sector 62, Noida, UP, India (Prishiv Corporate Tower)</p>
        </div>
        <a href="https://maps.google.com" target="_blank" class="inline-block px-6 py-2 border border-primary text-primary hover:bg-primary hover:text-white rounded font-bold text-xs transition-colors">
            Open in Google Maps
        </a>
    </div>
</section>

<script>
function handleContactSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('contact-page-form');
    const success = document.getElementById('contact-success');
    if (form && success) {
        form.classList.add('hidden');
        success.classList.remove('hidden');
    }
}

function resetContactForm() {
    const form = document.getElementById('contact-page-form');
    const success = document.getElementById('contact-success');
    if (form && success) {
        form.reset();
        form.classList.remove('hidden');
        success.classList.add('hidden');
    }
}
</script>

<!-- Footer Include -->
<?php include_once __DIR__ . '/includes/footer.php'; ?>

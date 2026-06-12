/**
 * Main JavaScript controller for Prishiv Energy Private Limited
 */

document.addEventListener('DOMContentLoaded', () => {
    initStickyHeader();
    initMobileMenu();
    initStatsCounters();
    initFaqAccordion();
    initProductSlider();
    initTestimonialSlider();
    initScrollToTop();
    initCursorFollower();
});

/* ==========================================================================
   Sticky Header
   ========================================================================== */
function initStickyHeader() {
    const header = document.getElementById('main-header');
    const topBar = document.getElementById('top-bar');
    if (!header) return;

    // Check if header starts as transparent (indicated by 'bg-transparent' class)
    const isHomeTransparent = header.classList.contains('bg-transparent');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            // Scroll down state
            header.classList.add('sticky-scrolled');
            if (topBar) {
                topBar.classList.add('hidden', 'lg:hidden');
            }
            if (isHomeTransparent) {
                header.classList.remove('absolute', 'bg-transparent', 'text-white');
                header.classList.add('fixed', 'bg-white', 'text-dark', 'shadow-md');
            }
        } else {
            // Scroll at top state
            header.classList.remove('sticky-scrolled');
            if (topBar) {
                topBar.classList.remove('hidden', 'lg:hidden');
            }
            if (isHomeTransparent) {
                header.classList.remove('fixed', 'bg-white', 'text-dark', 'shadow-md');
                header.classList.add('absolute', 'bg-transparent', 'text-white');
            }
        }
    });
}

/* ==========================================================================
   Mobile Menu Navigation Drawer
   ========================================================================== */
function initMobileMenu() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    
    if (btn && menu) {
        btn.addEventListener('click', () => {
            toggleMobileMenu(true);
        });
    }
}

function toggleMobileMenu(show) {
    const menu = document.getElementById('mobile-menu');
    if (!menu) return;
    
    if (show) {
        menu.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    } else {
        menu.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
}

/* ==========================================================================
   Animated Statistics Counters (Scroll-triggered)
   ========================================================================== */
function initStatsCounters() {
    const statsSection = document.getElementById('stats-section');
    const counters = document.querySelectorAll('.stat-counter');
    if (!statsSection || counters.length === 0) return;

    let animated = false;

    const startCounting = () => {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'), 10);
            const duration = 2000; // 2 seconds animation
            const stepTime = Math.max(Math.floor(duration / target), 15);
            let current = 0;
            
            const timer = setInterval(() => {
                current += Math.ceil(target / (duration / stepTime));
                if (current >= target) {
                    counter.innerText = target + '+';
                    clearInterval(timer);
                } else {
                    counter.innerText = current + '+';
                }
            }, stepTime);
        });
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                startCounting();
                animated = true;
                observer.unobserve(statsSection);
            }
        });
    }, { threshold: 0.2 });

    observer.observe(statsSection);
}

/* ==========================================================================
   FAQ Accordions
   ========================================================================== */
function initFaqAccordion() {
    const triggers = document.querySelectorAll('.faq-trigger');
    
    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const content = trigger.nextElementSibling;
            const icon = trigger.querySelector('.faq-icon');
            const isOpen = content.classList.contains('open');
            
            // Close all other accordions
            document.querySelectorAll('.accordion-content').forEach(item => {
                item.classList.remove('open');
                item.style.maxHeight = '0px';
            });
            document.querySelectorAll('.faq-icon').forEach(ico => {
                ico.style.transform = 'rotate(0deg)';
            });

            // Toggle current
            if (!isOpen) {
                content.classList.add('open');
                content.style.maxHeight = content.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}

/* ==========================================================================
   Product Slider / Tab Showcase
   ========================================================================== */
function initProductSlider() {
    const tabs = document.querySelectorAll('.product-tab-btn');
    const slides = document.querySelectorAll('.product-slide');
    if (tabs.length === 0 || slides.length === 0) return;

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const targetId = tab.getAttribute('data-target');
            
            // Toggle tab buttons
            tabs.forEach(t => t.classList.remove('border-primary', 'text-primary', 'font-bold'));
            tab.classList.add('border-primary', 'text-primary', 'font-bold');

            // Toggle slides
            slides.forEach(slide => {
                if (slide.id === targetId) {
                    slide.classList.remove('inactive', 'hidden');
                    slide.classList.add('active', 'block');
                } else {
                    slide.classList.remove('active', 'block');
                    slide.classList.add('inactive', 'hidden');
                }
            });
        });
    });
}

/* ==========================================================================
   Testimonial Slider (Carousel Loop)
   ========================================================================== */
function initTestimonialSlider() {
    const slides = document.querySelectorAll('.testimonial-slide');
    if (slides.length <= 1) return;

    let currentIndex = 0;
    
    const showSlide = (index) => {
        slides.forEach((slide, idx) => {
            if (idx === index) {
                slide.classList.remove('hidden', 'opacity-0');
                slide.classList.add('block', 'opacity-100');
            } else {
                slide.classList.remove('block', 'opacity-100');
                slide.classList.add('hidden', 'opacity-0');
            }
        });
    };

    // Auto rotate every 6 seconds
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }, 6000);
}

/* ==========================================================================
   Global Modal Controllers
   ========================================================================== */
function toggleModal(modalId, show) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    if (show) {
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    } else {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
}

// Request quote form simulated handler
function handleQuoteSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('quote-modal-form');
    const success = document.getElementById('quote-success');
    
    if (form && success) {
        form.classList.add('hidden');
        success.classList.remove('hidden');
    }
}

function resetQuoteForm() {
    const form = document.getElementById('quote-modal-form');
    const success = document.getElementById('quote-success');
    if (form && success) {
        form.reset();
        form.classList.remove('hidden');
        success.classList.add('hidden');
    }
}

/* ==========================================================================
   Scroll To Top Action Button
   ========================================================================== */
function initScrollToTop() {
    const btn = document.getElementById('scroll-top-btn');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            btn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-10');
            btn.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
        } else {
            btn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            btn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-10');
        }
    });

    btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/* ==========================================================================
   Premium Custom Cursor Follower
   ========================================================================== */
function initCursorFollower() {
    // Check if the primary input mechanism supports fine pointers (like mouse hover)
    if (!window.matchMedia("(pointer: fine)").matches) return;

    const dot = document.getElementById('cursor-dot');
    const ring = document.getElementById('cursor-ring');
    if (!dot || !ring) return;

    let mouseX = 0, mouseY = 0;
    let dotX = 0, dotY = 0;
    let ringX = 0, ringY = 0;

    // Track mouse movement coords
    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        dot.classList.remove('opacity-0');
        ring.classList.remove('opacity-0');
    });

    document.addEventListener('mouseleave', () => {
        dot.classList.add('opacity-0');
        ring.classList.add('opacity-0');
    });

    // 60FPS fluid drawing loop via requestAnimationFrame (linear interpolation lag effect)
    const render = () => {
        // High responsiveness tracking for cursor dot
        dotX += (mouseX - dotX) * 0.3;
        dotY += (mouseY - dotY) * 0.3;
        dot.style.left = dotX + 'px';
        dot.style.top = dotY + 'px';

        // Fluid interpolation lag tracking for outer ring
        ringX += (mouseX - ringX) * 0.15;
        ringY += (mouseY - ringY) * 0.15;
        ring.style.left = ringX + 'px';
        ring.style.top = ringY + 'px';

        requestAnimationFrame(render);
    };
    render();

    // Scale follower shapes on hover of links, CTA triggers, or buttons
    const interactives = document.querySelectorAll('a, button, select, input, textarea, .faq-trigger, .product-tab-btn, .project-filter-btn');
    interactives.forEach(el => {
        el.addEventListener('mouseenter', () => {
            dot.style.transform = 'translate(-50%, -50%) scale(1.5)';
            ring.style.transform = 'translate(-50%, -50%) scale(1.4)';
            ring.style.borderColor = '#F57C00'; // accent orange on hover
            ring.style.backgroundColor = 'rgba(245, 124, 0, 0.05)';
        });
        el.addEventListener('mouseleave', () => {
            dot.style.transform = 'translate(-50%, -50%) scale(1)';
            ring.style.transform = 'translate(-50%, -50%) scale(1)';
            ring.style.borderColor = '#0D47A1'; // primary blue
            ring.style.backgroundColor = 'transparent';
        });
    });
}

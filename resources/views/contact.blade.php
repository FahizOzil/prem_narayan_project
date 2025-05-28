@extends('layout.main')

@section('title')
    Contact Prem Narayan | The Undoing Of Us - 
@endsection

@section('styles')
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#3b82f6', // Blue
                    secondary: '#8b5cf6', // Purple
                    accent: '#06b6d4', // Cyan
                    dark: '#1e293b', // Slate
                    light: '#f8fafc' // Slate light
                },
                animation: {
                    'float': 'float 20s linear infinite',
                    'fade-in': 'fadeIn 1s ease-in-out',
                    'bounce-slow': 'bounce 3s infinite'
                },
                keyframes: {
                    float: {
                        '0%': {
                            transform: 'translate(-50px, 110vh) rotate(0deg)',
                            opacity: '0.5'
                        },
                        '100%': {
                            transform: 'translate(-100px, -50px) rotate(360deg)',
                            opacity: '0'
                        }
                    },
                    fadeIn: {
                        '0%': {
                            opacity: '0',
                            transform: 'translateY(30px)'
                        },
                        '100%': {
                            opacity: '1',
                            transform: 'translateY(0)'
                        }
                    }
                }
            }
        }
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .floating-hearts {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
        overflow: hidden;
    }

    .heart {
        position: absolute;
        opacity: 0.5;
        animation: float 20s linear infinite;
    }

    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: all 1s ease;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .faq-question::after {
        content: '\f107';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-question::after {
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: all 0.5s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 500px;
    }
</style>
@endsection

@section('content')
    <!-- Navigation -->
    {{-- <nav id="navbar" class="fixed w-full z-50 bg-slate-900/95 backdrop-blur-sm transition-all duration-400 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <a href="#" class="text-slate-100 text-xl font-bold hover:text-primary transition-colors">
                    Prem <span class="text-primary">Narayan</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-slate-100 hover:text-primary transition-colors relative group">
                        Home
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-slate-100 hover:text-primary transition-colors relative group">
                        About
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-slate-100 hover:text-primary transition-colors relative group">
                        Books
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-slate-100 hover:text-primary transition-colors relative group">
                        Contact
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu" class="md:hidden text-slate-100 text-xl">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Mobile Menu -->
                <div class="nav-links md:hidden absolute top-full left-0 right-0 bg-slate-900/98 backdrop-blur-sm max-h-0 overflow-hidden transition-all duration-500">
                    <div class="flex flex-col space-y-4 py-6 px-6">
                        <a href="#" class="text-slate-100 hover:text-primary transition-colors">Home</a>
                        <a href="#" class="text-slate-100 hover:text-primary transition-colors">About</a>
                        <a href="#" class="text-slate-100 hover:text-primary transition-colors">Books</a>
                        <a href="#" class="text-slate-100 hover:text-primary transition-colors">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav> --}}

    <!-- Hero Section -->
    <div class="relative pt-20 pb-16 bg-gradient-to-br from-primary/80 via-secondary/80 to-accent/80 text-white overflow-hidden">
        <div class="floating-hearts" id="hearts-container"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-shadow-lg">Get in Touch</h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto font-light opacity-90">
                Connect with Prem Narayan, share your thoughts, or ask about book signings
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
            <!-- Contact Info -->
            <div class="fade-in">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-8">Let's Connect</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Have questions about "The Undoing Of Us: " or want to share your feedback? Prem Narayan loves
                    hearing from readers. Feel free to reach out through any of the following methods or use the contact form.
                </p>

                <!-- Contact Methods -->
                <div class="space-y-6 mb-10">
                    <div class="flex items-center p-4 bg-white rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center mr-5">
                            <i class="far fa-envelope text-secondary text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-1">Email</h3>
                            <p class="text-slate-600 break-words">author@premnarayan.com</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center mr-5">
                            <i class="fas fa-book text-accent text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-1">Literary Agent</h3>
                            <p class="text-slate-600 break-words">agent@literaryagency.com</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-5">
                            <i class="fas fa-clock text-primary text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-1">Response Time</h3>
                            <p class="text-slate-600">Usually within 3-5 business days</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div>
                    <h3 class="text-xl font-semibold text-secondary mb-5">Follow Prem</h3>
                    <div class="flex gap-4 flex-wrap">
                        <a href="#" class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-blue-600 hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-sky-500 hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-gradient-to-r hover:from-pink-500 hover:to-yellow-500 hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-yellow-700 hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-goodreads-g"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="fade-in">
                <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 relative overflow-hidden">
                    <!-- Decorative Element -->
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-primary to-secondary opacity-10 rounded-full"></div>

                    <h2 class="text-2xl lg:text-3xl font-bold text-secondary mb-6">Send a Message</h2>
                    <p class="text-slate-600 mb-8">Fill out the form below and Prem will get back to you as soon as possible.</p>

                    <form id="contactForm" method="post" action="{{ route('contact.submit') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Your Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 placeholder-slate-400"
                                placeholder="Enter your full name" required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 placeholder-slate-400"
                                placeholder="Enter your email address" required>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                            <select id="subject" name="subject"
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200" required>
                                <option value="" disabled selected>Select a subject</option>
                                <option value="question">Question about the book</option>
                                <option value="feedback">Reader feedback</option>
                                <option value="signing">Book signing inquiry</option>
                                <option value="media">Media request</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 placeholder-slate-400 resize-y"
                                placeholder="Type your message here..." required></textarea>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" name="newsletter" id="newsletter"
                                class="w-4 h-4 text-secondary bg-slate-100 border-slate-300 rounded focus:ring-secondary focus:ring-2">
                            <label for="newsletter" class="ml-3 text-sm text-slate-600">
                                Subscribe to Prem's newsletter for updates on new releases and events
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-primary to-secondary text-white font-semibold py-3 px-6 rounded-full hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center space-x-2">
                            <i class="far fa-paper-plane"></i>
                            <span>Send Message</span>
                        </button>

                        <div class="form-success hidden text-center p-4 bg-green-50 border border-green-200 rounded-lg text-green-800" id="formSuccess">
                            <i class="fas fa-check-circle text-2xl mb-2 text-green-600"></i>
                            <p>Your message has been sent successfully! Prem will get back to you soon.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-slate-50 py-16 lg:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl lg:text-4xl font-bold text-center text-secondary mb-12">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="faq-question flex justify-between items-center p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                        <span class="text-lg font-semibold text-slate-800">When will Prem release his next book?</span>
                        <i class="fas fa-chevron-down text-slate-400"></i>
                    </div>
                    <div class="faq-answer px-6 pb-0">
                        <p class="text-slate-600 leading-relaxed pb-6">
                            Prem is currently working on his next novel, which is expected to be released in early 2026.
                            Subscribe to his newsletter to be the first to know about release dates and get exclusive previews.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="faq-question flex justify-between items-center p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                        <span class="text-lg font-semibold text-slate-800">Does Prem do book signings or virtual events?</span>
                        <i class="fas fa-chevron-down text-slate-400"></i>
                    </div>
                    <div class="faq-answer px-6 pb-0">
                        <p class="text-slate-600 leading-relaxed pb-6">
                            Yes! Prem regularly participates in book signings, literary festivals, and virtual reader meet-ups.
                            Check the Events page for upcoming appearances or contact him directly about scheduling an event.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="faq-question flex justify-between items-center p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                        <span class="text-lg font-semibold text-slate-800">Is "The Undoing Of Us: " part of a series?</span>
                        <i class="fas fa-chevron-down text-slate-400"></i>
                    </div>
                    <div class="faq-answer px-6 pb-0">
                        <p class="text-slate-600 leading-relaxed pb-6">
                            While "The Undoing Of Us: " was written as a standalone novel, Prem has hinted that some
                            characters might appear in future works. The story is complete in itself with no cliffhangers.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="faq-question flex justify-between items-center p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                        <span class="text-lg font-semibold text-slate-800">Can I get a signed copy of the book?</span>
                        <i class="fas fa-chevron-down text-slate-400"></i>
                    </div>
                    <div class="faq-answer px-6 pb-0">
                        <p class="text-slate-600 leading-relaxed pb-6">
                            Signed copies are available in limited quantities through the author's website. You can also send
                            your own copy with a self-addressed stamped envelope to the publisher address for signing.
                        </p>
                    </div>
                </div>

                <div class="faq-item bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="faq-question flex justify-between items-center p-6 cursor-pointer hover:bg-slate-50 transition-colors">
                        <span class="text-lg font-semibold text-slate-800">What inspired the story of "The Undoing Of Us: "?</span>
                        <i class="fas fa-chevron-down text-slate-400"></i>
                    </div>
                    <div class="faq-answer px-6 pb-0">
                        <p class="text-slate-600 leading-relaxed pb-6">
                            Prem has mentioned that his love for coastal settings and his interest in people who guard their
                            hearts carefully were major inspirations. He wanted to create a romance that kept moving with
                            unexpected turns, unlike the typical pacing of the genre.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Create floating hearts animation
        function createHearts() {
            const container = document.getElementById('hearts-container');
            if (!container) return;

            const numberOfHearts = window.innerWidth < 768 ? 8 : 15;

            for (let i = 0; i < numberOfHearts; i++) {
                const heart = document.createElement('div');
                heart.classList.add('heart');

                // Random heart styling
                const size = Math.random() * 30 + 10;
                const startPos = Math.random() * 100;
                const delay = Math.random() * 15;
                const duration = Math.random() * 10 + 15;

                heart.innerHTML = '❤';
                heart.style.left = `${startPos}%`;
                heart.style.fontSize = `${size}px`;
                heart.style.color = `rgba(59, 130, 246, ${Math.random() * 0.3 + 0.3})`;
                heart.style.animationDuration = `${duration}s`;
                heart.style.animationDelay = `${delay}s`;

                container.appendChild(heart);
            }
        }

        // FAQ accordion functionality
        function setupFAQs() {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');

                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');

                    // Close all FAQs
                    faqItems.forEach(faq => {
                        faq.classList.remove('active');
                    });

                    // Open clicked FAQ if it wasn't already open
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });
        }

        // Form submission
        function setupForm() {
            const form = document.getElementById('contactForm');
            const success = document.getElementById('formSuccess');

            if (form) {
                form.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    try {
                        let res = await fetch(form.action, {
                            method: 'POST',
                            body: new FormData(form),
                        });

                        if (!res.ok) {
                            throw new Error('Form submission failed');
                        }

                        let result = await res.json();

                        // Success handling
                        form.reset();
                        success.classList.remove('hidden');

                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            success.classList.add('hidden');
                        }, 5000);

                    } catch (error) {
                        console.error('Error:', error);
                        alert('There was an error submitting the form. Please try again later.');
                    }
                });
            }
        }

        // Navigation menu for mobile
        function setupMobileMenu() {
            const mobileMenuBtn = document.getElementById('mobile-menu');
            const navLinks = document.querySelector('.nav-links');

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', () => {
                    if (navLinks.style.maxHeight === '0px' || !navLinks.style.maxHeight) {
                        navLinks.style.maxHeight = '300px';
                    } else {
                        navLinks.style.maxHeight = '0px';
                    }
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!mobileMenuBtn.contains(e.target) && !navLinks.contains(e.target)) {
                        navLinks.style.maxHeight = '0px';
                    }
                });
            }
        }

        // Check for elements in viewport
        function checkVisibility() {
            const fadeElements = document.querySelectorAll('.fade-in');

            fadeElements.forEach(element => {
                const position = element.getBoundingClientRect();

                // If element is in viewport
                if (position.top < window.innerHeight * 0.8 && position.bottom >= 0) {
                    element.classList.add('visible');
                }
            });
        }

        // Initialize
        window.addEventListener('DOMContentLoaded', () => {
            createHearts();
            setupFAQs();
            setupForm();
            setupMobileMenu();

            // Add scroll classes to navbar
            const navbar = document.getElementById('navbar');
            if (navbar) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        navbar.classList.add('shadow-lg');
                    } else {
                        navbar.classList.remove('shadow-lg');
                    }
                });
            }

            // Check visibility of elements on scroll
            window.addEventListener('scroll', checkVisibility);

            // Initial check for visibility
            checkVisibility();
        });

        // Reload hearts on window resize
        window.addEventListener('resize', () => {
            const container = document.getElementById('hearts-container');
            if (container) {
                // Clear existing hearts
                container.innerHTML = '';
                // Create new ones appropriate for screen size
                createHearts();
            }
        });
    </script>
@endsection

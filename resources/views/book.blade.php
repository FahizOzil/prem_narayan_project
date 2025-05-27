@extends('layout.main')

@section('title')
    Book Name -  | Prem Narayan
@endsection

@section('styles')
    <!-- Tailwind CSS CDN -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    // colors: {
                    //     primary: '#6366f1',    // Indigo
                    //     secondary: '#8b5cf6',  // Violet
                    //     accent: '#f59e0b',     // Amber
                    //     dark: '#1f2937',       // Gray-800
                    //     light: '#f9fafb'       // Gray-50
                    // },
                    animation: {
                        'float': 'float 15s infinite alternate ease-in-out',
                        'fadeInUp': 'fadeInUp 1s 0.5s forwards'
                    },
                    keyframes: {
                        float: {
                            '0%': { transform: 'translate(0, 0) scale(1)' },
                            '100%': { transform: 'translate(40px, 40px) scale(1.1)' }
                        },
                        fadeInUp: {
                            'to': { opacity: '1', transform: 'translateY(0)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .book-cover-3d {
            transform-style: preserve-3d;
            transform: perspective(1000px) rotateY(15deg);
            transition: transform 1s ease;
        }
        .book-cover-3d:hover {
            transform: perspective(1000px) rotateY(0);
        }
        .book-glow {
            filter: blur(20px);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: -1;
            transform: translateZ(-10px);
        }
        .book-cover-3d:hover + .book-glow {
            opacity: 0.7;
        }
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.6s ease;
        }
    </style>
@endsection

@section('content')

<!-- Book Hero Section -->
<section class="relative py-32 overflow-hidden bg-gradient-to-br from-indigo-50 via-violet-50 to-purple-50">
    <!-- Animated Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute w-96 h-96 bg-gradient-to-br from-indigo-400/30 to-violet-500/30 rounded-full blur-3xl opacity-40 -top-24 -left-24 animate-float"></div>
        <div class="absolute w-80 h-80 bg-gradient-to-br from-violet-400/30 to-purple-500/30 rounded-full blur-3xl opacity-40 top-1/2 -right-24 animate-float" style="animation-delay: 5s;"></div>
        <div class="absolute w-64 h-64 bg-gradient-to-br from-purple-400/30 to-pink-500/30 rounded-full blur-3xl opacity-40 -bottom-12 left-1/3 animate-float" style="animation-delay: 10s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-16">
            <!-- Book Cover -->
            <div class="relative">
                <div class="book-cover-3d w-80 h-[480px] shadow-2xl shadow-indigo-500/30">
                    <img src="{{ asset('images/cover.jpg') }}" alt="Book Name -  book cover" class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="book-glow absolute inset-0 bg-gradient-to-br from-indigo-500/50 to-violet-500/50 rounded-lg"></div>
            </div>

            <!-- Book Info -->
            <div class="max-w-2xl opacity-0 translate-y-8 animate-fadeInUp">
                <h1 class="text-6xl font-bold mb-3 bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">Book Name</h1>
                <h2 class="text-3xl font-semibold mb-4 text-violet-700"></h2>
                <span class="block text-xl italic mb-6 text-gray-700 opacity-90">by Prem Narayan</span>

                <!-- Book Meta -->
                <div class="flex gap-8 mb-8 flex-wrap">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-violet-600">409</div>
                        <div class="text-sm text-gray-600 opacity-70">Pages</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl text-amber-500">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="text-sm text-gray-600 opacity-70">Rating</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xl font-bold text-violet-600">Romance</div>
                        <div class="text-sm text-gray-600 opacity-70">Genre</div>
                    </div>
                </div>

                <!-- Description -->
                <div class="text-lg leading-relaxed mb-8 space-y-4 text-amber-500">
                    <p>Unlike traditional romance novels with their "down time," <span class="font-bold bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">Book Name: </span> keeps moving at a thrilling pace. Experience a romance adventure where surprising things happen to characters at every turn.</p>
                    <p class="text-gray-700">This story takes you on an emotional journey from attraction to conflict to heartfelt reconciliation, all without ever slowing down.</p>
                </div>

                <!-- Purchase Options -->
                <div class="space-x-4 space-y-4">
                    <a href="{{ route('buy') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-8 rounded-full shadow-lg shadow-indigo-500/30 transform hover:-translate-y-1 transition-all duration-300">
                        <i class="fas fa-shopping-cart mr-2"></i>Buy Now
                    </a>
                    <a href="#formats" class="inline-block bg-violet-600 hover:bg-violet-700 text-white font-bold py-4 px-8 rounded-full shadow-lg shadow-violet-500/30 transform hover:-translate-y-1 transition-all duration-300">
                        View Formats
                    </a>
                    <a href="#excerpts" class="inline-block border-2 border-amber-500 text-gray-800 hover:bg-amber-500 hover:text-white font-bold py-4 px-8 rounded-full transform hover:-translate-y-1 transition-all duration-300">
                        Read Excerpt
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Book Details Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-5xl font-bold text-center mb-16 text-violet-700 relative">
            What Makes This Book Special
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-4 w-20 h-1 bg-gradient-to-r from-indigo-600 to-violet-600 rounded-full"></div>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <div class="feature-card fade-up bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-indigo-200/50 hover:-translate-y-3 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-indigo-600 to-violet-600 hover:w-2 transition-all duration-300"></div>
                <div class="text-5xl mb-6 text-indigo-600">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-800">Fast-Paced Adventure</h3>
                <p class="text-gray-600 leading-relaxed">No slow moments. No boring chapters. Just page-turning excitement from the first page to the last. A romance that keeps you engaged throughout.</p>
            </div>

            <div class="feature-card fade-up bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-violet-200/50 hover:-translate-y-3 transition-all duration-300 relative overflow-hidden" style="transition-delay: 100ms;">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-violet-600 to-purple-600 hover:w-2 transition-all duration-300"></div>
                <div class="text-5xl mb-6 text-violet-600">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-800">Genuine Romance</h3>
                <p class="text-gray-600 leading-relaxed">Feel the authentic attraction, passion, and emotional connection between characters that keep you invested in their journey together.</p>
            </div>

            <div class="feature-card fade-up bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-purple-200/50 hover:-translate-y-3 transition-all duration-300 relative overflow-hidden" style="transition-delay: 200ms;">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-purple-600 to-pink-600 hover:w-2 transition-all duration-300"></div>
                <div class="text-5xl mb-6 text-purple-600">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-800">Surprising Twists</h3>
                <p class="text-gray-600 leading-relaxed">When you think you know what's coming next, the story takes an unexpected turn that keeps you guessing and emotionally invested.</p>
            </div>

            <div class="feature-card fade-up bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-amber-200/50 hover:-translate-y-3 transition-all duration-300 relative overflow-hidden" style="transition-delay: 300ms;">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-amber-500 to-orange-500 hover:w-2 transition-all duration-300"></div>
                <div class="text-5xl mb-6 text-amber-500">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-800">Fresh Perspective</h3>
                <p class="text-gray-600 leading-relaxed">A new take on the romance genre that breaks typical patterns and provides a refreshing reading experience for romance enthusiasts.</p>
            </div>
        </div>
    </div>
</section>

<!-- Book Excerpts -->
<section class="py-24 bg-gray-900 text-white" id="excerpts">
    <div class="container mx-auto px-6">
        <h2 class="text-5xl font-bold text-center mb-16 text-white relative">
            From The Pages
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-4 w-20 h-1 bg-gradient-to-r from-indigo-400 to-violet-400 rounded-full"></div>
        </h2>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white/5 rounded-2xl p-12 relative overflow-hidden backdrop-blur-sm">
                <div class="absolute text-9xl opacity-10 font-serif text-indigo-400 -top-4 left-4">"</div>
                <div class="absolute text-9xl opacity-10 font-serif text-violet-400 -bottom-8 right-4">"</div>

                <p class="text-xl leading-relaxed mb-6 italic relative z-10">The moment their eyes met across the crowded dance floor, Eliza knew that her carefully constructed life was about to change forever. It wasn't just his striking appearance that caught her attention—it was the way he moved with such confidence, yet seemed completely unaware of the effect he had on everyone around him. When he smiled at her, time seemed to slow down, and all the warnings she'd given herself about getting involved with anyone new suddenly felt like distant echoes.</p>

                <p class="text-sm opacity-70 text-right relative z-10">Chapter 1: First Encounter</p>
            </div>
        </div>
    </div>
</section>

<!-- Reader Reviews -->
<section class="py-24 bg-gradient-to-br from-indigo-50 via-violet-50 to-purple-50">
    <div class="container mx-auto px-6">
        <h2 class="text-5xl font-bold text-center mb-16 text-violet-700 relative">
            Reader Reviews
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-4 w-20 h-1 bg-gradient-to-r from-indigo-600 to-violet-600 rounded-full"></div>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <div class="review-card fade-up bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-indigo-200/50 hover:-translate-y-3 transition-all duration-300">
                <div class="text-amber-500 text-xl mb-4">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic mb-5 leading-relaxed text-gray-700">"I couldn't put it down! Every page had me hooked with new surprises and genuine emotional moments. This isn't your typical slow-burn romance—it's a page-turner from start to finish."</p>
                <p class="font-bold text-gray-800">- Sarah J.</p>
            </div>

            <div class="review-card fade-up bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-violet-200/50 hover:-translate-y-3 transition-all duration-300">
                <div class="text-amber-500 text-xl mb-4">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic mb-5 leading-relaxed text-gray-700">"Finally, a romance that keeps up the pace! No boring filler - just pure entertainment from start to finish. The characters felt so real and their chemistry was electric."</p>
                <p class="font-bold text-gray-800">- Michelle T.</p>
            </div>

            <div class="review-card fade-up bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-purple-200/50 hover:-translate-y-3 transition-all duration-300">
                <div class="text-amber-500 text-xl mb-4">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <p class="italic mb-5 leading-relaxed text-gray-700">"The perfect balance of romance and adventure. Prem Narayan knows how to keep readers engaged while delivering on the emotional moments that make romance novels so satisfying."</p>
                <p class="font-bold text-gray-800">- Rebecca L.</p>
            </div>
        </div>
    </div>
</section>

<!-- Book Formats -->
<section class="py-24 bg-white" id="formats">
    <div class="container mx-auto px-6">
        <h2 class="text-5xl font-bold text-center mb-16 text-violet-700 relative">
            Available Formats
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-4 w-20 h-1 bg-gradient-to-r from-indigo-600 to-violet-600 rounded-full"></div>
        </h2>

        <div class="flex justify-center gap-16 flex-wrap">
            <div class="format-card fade-up w-80 bg-white rounded-2xl p-10 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-indigo-200/50 hover:-translate-y-4 transition-all duration-300 text-center">
                <div class="text-6xl mb-6 text-indigo-600">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Paperback</h3>
                <div class="text-4xl font-bold mb-6 text-violet-600">$14.99</div>
                <div class="mb-8 space-y-2">
                    <p class="text-gray-600">409 Pages</p>
                    <p class="text-gray-600">High-quality print</p>
                    <p class="text-gray-600">Available Worldwide</p>
                </div>
                <a href="{{ route('buy') }}" class="block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-8 rounded-full shadow-lg shadow-indigo-500/30 transform hover:-translate-y-1 transition-all duration-300">Order Paperback</a>
            </div>

            <div class="format-card fade-up w-80 bg-white rounded-2xl p-10 shadow-xl shadow-gray-200/50 hover:shadow-2xl hover:shadow-violet-200/50 hover:-translate-y-4 transition-all duration-300 text-center">
                <div class="text-6xl mb-6 text-violet-600">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-gray-800">Hardcover</h3>
                <div class="text-4xl font-bold mb-6 text-violet-600">$24.99</div>
                <div class="mb-8 space-y-2">
                    <p class="text-gray-600">409 Pages</p>
                    <p class="text-gray-600">Premium binding</p>
                    <p class="text-gray-600">Dust jacket included</p>
                </div>
                <a href="{{ route('buy') }}" class="block bg-violet-600 hover:bg-violet-700 text-white font-bold py-4 px-8 rounded-full shadow-lg shadow-violet-500/30 transform hover:-translate-y-1 transition-all duration-300">Order Hardcover</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Animation on scroll
    document.addEventListener('DOMContentLoaded', () => {
        // Add visible class to elements when they enter viewport
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe feature cards and other elements
        document.querySelectorAll('.feature-card, .review-card, .format-card').forEach(el => {
            observer.observe(el);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endsection

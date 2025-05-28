@extends('layout.main')

@section('title', 'The Undoing Of Us -  | Prem Narayan')

@section('styles')
    <style>
        /* Custom animations that complement Tailwind */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) scale(0.5);
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100px) scale(1);
                opacity: 0;
            }
        }

        .hero-content {
            animation: fadeUp 1.5s forwards;
        }

        .heart {
            position: absolute;
            pointer-events: none;
            animation: float 15s linear infinite;
            opacity: 0.6;
        }

        .book-3d {
            transform: perspective(1000px) rotateY(15deg);
            transition: all 0.5s ease;
        }

        .book-3d:hover {
            transform: perspective(1000px) rotateY(0);
        }

        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9, #d946ef, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
@endsection

@section('content')
<!-- Hero Section -->
<header class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-primary-500/80 via-secondary-500/80 to-accent-500/80">
    <div class="floating-hearts absolute inset-0 z-10" id="floating-hearts"></div>

    <div class="hero-content text-center text-white z-20 px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-4 text-shadow-lg">
            The Undoing Of Us
        </h1>
        {{-- <h2 class="text-xl md:text-3xl lg:text-4xl font-light mb-6 opacity-90">

        </h2> --}}
        <p class="text-lg md:text-2xl italic mb-8 opacity-80">
            by Prem Narayan
        </p>
        <a href="{{ route('buy') }}" class="inline-block bg-gradient-to-r from-accent-400 to-accent-500 text-blue-500 px-8 py-4 rounded-full text-xl font-bold hover:from-accent-500 hover:to-accent-600 transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 shadow-lg hover:shadow-xl">
            Get Your Copy
        </a>
    </div>
</header>

<!-- Book Showcase Section -->
<section class="py-20 lg:py-32 bg-gradient-to-b from-slate-50 to-white dark:from-slate-900 dark:to-slate-800">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-20 max-w-6xl mx-auto">
            <!-- Book Cover -->
            <div class="book-cover fade-in">
                <div class="book-3d w-72 h-96 lg:w-80 lg:h-[480px] shadow-2xl rounded-lg overflow-hidden">
                    <img src="{{ asset('images/cover.jpg') }}" alt="The Undoing Of Us -  book cover" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Book Info -->
            <div class="book-info slide-in-right max-w-lg text-center lg:text-left">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 gradient-text">
                    A Romance That Never Slows Down
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                    Unlike most romance novels with their "down time," <em class="text-primary-600 dark:text-primary-400">The Undoing Of Us: </em> keeps moving and surprising things happen to the characters at every turn.
                </p>
                <p class="text-lg text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                    Experience a fast-paced romance adventure that blends passion, desire, and unexpected twists in this refreshing take on the genre.
                </p>
                <p class="text-lg text-slate-600 dark:text-slate-300 mb-8 leading-relaxed">
                    Meet unforgettable characters who will take you on an emotional journey from attraction to conflict to a heartfelt reconciliation.
                </p>
                <a href="{{ route('buy') }}" class="inline-block bg-gradient-to-r from-primary-500 to-secondary-500 text-yellow-500 px-8 py-3 rounded-full text-lg font-semibold hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Available Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Feature 1 -->
            <div class="feature-card fade-in bg-white/5 backdrop-blur-sm rounded-2xl p-8 text-center hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2 border border-white/10">
                <div class="text-5xl mb-6 text-accent-400">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Fast-Paced Adventure</h3>
                <p class="text-slate-300 leading-relaxed">No slow moments - just page-turning excitement from beginning to end.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card fade-in bg-white/5 backdrop-blur-sm rounded-2xl p-8 text-center hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2 border border-white/10">
                <div class="text-5xl mb-6 text-primary-400">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Authentic Romance</h3>
                <p class="text-slate-300 leading-relaxed">Experience genuine emotions and connections that feel real and touching.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card fade-in bg-white/5 backdrop-blur-sm rounded-2xl p-8 text-center hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2 border border-white/10">
                <div class="text-5xl mb-6 text-secondary-400">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-white">Surprising Twists</h3>
                <p class="text-slate-300 leading-relaxed">Unexpected turns will keep you guessing and emotionally invested.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-primary-50 to-secondary-50 dark:from-slate-800 dark:to-slate-700">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl lg:text-5xl font-bold text-center mb-16 gradient-text">
            What Readers Are Saying
        </h2>
        <div class="testimonial-slider max-w-4xl mx-auto" id="testimonial-container">
            <!-- Testimonials will be added dynamically -->
        </div>
    </div>
</section>

<!-- About Author Section -->
<section class="py-20 lg:py-32 bg-white dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-20 max-w-6xl mx-auto">
            <!-- Author Image -->
            <div class="author-image fade-in">
                <div class="w-80 h-80 rounded-full overflow-hidden shadow-2xl border-4 border-gradient-to-r from-primary-200 to-secondary-200">
                    <img src="{{ asset('images/diasy.jpg') }}" alt="Author Prem Narayan" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Author Bio -->
            <div class="author-bio slide-in-left max-w-2xl text-center lg:text-left">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 gradient-text">
                    About Prem Narayan
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                    Prem Narayan crafts romance stories that break the mold. With a focus on keeping readers engaged through fast-paced storytelling and surprising plot developments, Prem's work stands out in the romance genre.
                </p>
                <p class="text-lg text-slate-600 dark:text-slate-300 mb-8 leading-relaxed">
                    When not writing captivating stories, Prem enjoys exploring new storytelling techniques and connecting with readers worldwide. His unique perspective brings fresh energy to every page of his work.
                </p>

                <!-- Social Icons -->
                <div class="flex justify-center lg:justify-start space-x-4">
                    <a href="#" class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-110 shadow-lg">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-110 shadow-lg">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-110 shadow-lg">
                        <i class="fab fa-instagram"></i>
                    </a>
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
        const container = document.getElementById('floating-hearts');
        if (!container) return;

        for (let i = 0; i < 20; i++) {
            const heart = document.createElement('div');
            heart.classList.add('heart');

            // Random heart styling
            const size = Math.random() * 30 + 10;
            const startPos = Math.random() * 100;
            const delay = Math.random() * 15;
            const duration = Math.random() * 10 + 10;

            heart.innerHTML = '❤';
            heart.style.left = `${startPos}%`;
            heart.style.fontSize = `${size}px`;
            heart.style.color = `rgba(14, 165, 233, ${Math.random() * 0.4 + 0.4})`;
            heart.style.animationDuration = `${duration}s`;
            heart.style.animationDelay = `${delay}s`;

            container.appendChild(heart);
        }
    }

    // Sample testimonials with updated author references
    const testimonials = [
        {
            text: "I couldn't put it down! Every page had me hooked with new surprises and genuine emotional moments.",
            name: "Sarah J.",
            rating: 5
        },
        {
            text: "Finally, a romance that keeps up the pace! No boring filler - just pure entertainment from start to finish.",
            name: "Michelle T.",
            rating: 5
        },
        {
            text: "The perfect balance of romance and adventure. Prem Narayan knows how to keep readers engaged!",
            name: "Rebecca L.",
            rating: 5
        }
    ];

    // Add testimonials to slider
    function loadTestimonials() {
        const container = document.getElementById('testimonial-container');
        if (!container) return;

        testimonials.forEach((testimonial, index) => {
            const testimonialDiv = document.createElement('div');
            testimonialDiv.classList.add('fade-in', 'mb-8');

            // Create stars for rating
            let stars = '';
            for(let i = 0; i < testimonial.rating; i++) {
                stars += '<i class="fas fa-star text-accent-400"></i>';
            }

            testimonialDiv.innerHTML = `
                <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl border border-slate-200 dark:border-slate-700 max-w-2xl mx-auto transform hover:scale-105 transition-all duration-300">
                    <p class="text-lg italic text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">"${testimonial.text}"</p>
                    <div class="flex justify-center mb-4 space-x-1">${stars}</div>
                    <p class="font-bold text-slate-800 dark:text-white text-center">— ${testimonial.name}</p>
                </div>
            `;

            container.appendChild(testimonialDiv);
        });
    }

    // Initialize everything when page loads
    document.addEventListener('DOMContentLoaded', function() {
        createHearts();
        loadTestimonials();

        // Trigger initial visibility check
        setTimeout(() => {
            window.dispatchEvent(new Event('scroll'));
        }, 100);
    });
</script>
@endsection

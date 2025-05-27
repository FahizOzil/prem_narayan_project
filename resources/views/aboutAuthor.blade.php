@extends('layout.main')
@section('title', 'About the Author | Prem Narayan | Book Name - ')

@section('styles')
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                // colors: {
                //     primary: '#1e40af', // blue-700
                //     secondary: '#7c3aed', // violet-600
                //     accent: '#f59e0b', // amber-500
                //     dark: '#1f2937', // gray-800
                // }
            }
        }
    }
</script>

<style>
    /* Custom animations */
    @keyframes float {
        0% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
        100% {
            transform: translateY(0) rotate(360deg);
        }
    }

    @keyframes pulse-ring {
        0% {
            transform: scale(1);
            opacity: 0.3;
        }
        50% {
            transform: scale(1.05);
            opacity: 0.2;
        }
        100% {
            transform: scale(1);
            opacity: 0.3;
        }
    }

    .floating-element {
        animation: float 15s linear infinite;
    }

    .pulse-ring::before {
        content: '';
        position: absolute;
        width: 110%;
        height: 110%;
        left: -5%;
        top: -5%;
        background: linear-gradient(135deg, #1e40af, #7c3aed);
        border-radius: 50%;
        z-index: -1;
        animation: pulse-ring 3s infinite;
    }

    .timeline-line::before {
        content: '';
        position: absolute;
        width: 4px;
        background-color: #7c3aed;
        top: 0;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0.3;
    }

    .timeline-item::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background-color: white;
        border: 4px solid #1e40af;
        border-radius: 50%;
        top: 35px;
        z-index: 1;
    }

    .timeline-item:nth-child(odd)::after {
        right: -13px;
    }

    .timeline-item:nth-child(even)::after {
        left: -13px;
    }

    .book-3d-effect {
        transform: perspective(800px) rotateY(10deg);
        transition: all 0.3s ease;
    }

    .book-3d-effect:hover {
        transform: perspective(800px) rotateY(0deg);
    }

    /* Fade in animation */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 1s ease, transform 1s ease;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .timeline-item.visible {
        opacity: 1 !important;
        transform: translateY(0);
    }

    /* Responsive timeline adjustments */
    @media (max-width: 768px) {
        .timeline-line::before {
            left: 20px;
        }

        .timeline-item::after {
            left: 10px !important;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<div class="relative pt-32 pb-20 bg-gradient-to-br from-blue-600 via-blue-700 to-violet-600 text-white text-center overflow-hidden">
    <!-- Floating Elements -->
    <div class="absolute inset-0 pointer-events-none z-10">
        <i class="floating-element fas fa-feather absolute top-1/5 left-1/10 text-5xl opacity-10"></i>
        <i class="floating-element fas fa-book absolute top-2/5 left-4/5 text-4xl opacity-10"></i>
        <i class="floating-element fas fa-heart absolute top-3/5 left-1/3 text-3xl opacity-10"></i>
        <i class="floating-element fas fa-pen absolute top-1/3 left-3/5 text-4xl opacity-10"></i>
        <i class="floating-element fas fa-star absolute top-3/5 left-3/4 text-3xl opacity-10"></i>
    </div>

    <h1 class="text-5xl md:text-6xl font-bold mb-5 drop-shadow-lg">Prem Narayan</h1>
    <p class="text-xl md:text-2xl max-w-4xl mx-auto font-light px-4">Writing as Prem Narayan - Creating stories that move and inspire</p>
</div>

<!-- Author Content -->
<div class="max-w-7xl mx-auto px-5 py-20">
    <!-- Author Introduction -->
    <div class="fade-in flex flex-wrap items-center justify-center gap-12 mb-20">
        <div class="relative w-80 h-80 rounded-full overflow-hidden shadow-2xl z-10 pulse-ring">
            <img src="{{ asset('images/diasy.jpg') }}" alt="Prem Narayan author portrait" class="w-full h-full object-cover">
        </div>

        <div class="max-w-2xl">
            <h2 class="text-4xl md:text-5xl font-bold mb-5 text-blue-700">Prem Narayan</h2>
            <h3 class="text-2xl mb-8 text-violet-600 font-light">Romance & Adventure Author</h3>

            <p class="text-lg leading-relaxed mb-6 text-gray-100">
                Prem Narayan brings a fresh perspective to the romance genre with stories that keep readers engaged from beginning to end. Unlike traditional romance novels that slow down between major plot points, Prem's work maintains momentum with surprising twists and genuine character development throughout.
            </p>

            <p class="text-lg leading-relaxed mb-6 text-gray-100">
                With a background in adventure travel and a passion for psychology, Prem brings authentic emotions and exciting scenarios to his writing. His stories blend the thrill of unexpected journeys with the depth of genuine human connection.
            </p>

            <p class="text-lg leading-relaxed mb-8 text-gray-100">
                Based in coastal New England, Prem draws inspiration from the changing seasons, dramatic landscapes, and the diverse stories of people he meets on his travels.
            </p>

            <!-- Author Stats -->
            <div class="flex flex-wrap gap-5">
                <div class="bg-white rounded-xl p-6 shadow-lg w-44 text-center transform hover:-translate-y-2 transition-all duration-300">
                    <div class="text-4xl font-bold text-blue-700 mb-2">2</div>
                    <div class="text-sm text-gray-600">Published Books</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg w-44 text-center transform hover:-translate-y-2 transition-all duration-300">
                    <div class="text-4xl font-bold text-blue-700 mb-2">12+</div>
                    <div class="text-sm text-gray-600">Years Writing</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg w-44 text-center transform hover:-translate-y-2 transition-all duration-300">
                    <div class="text-4xl font-bold text-blue-700 mb-2">5</div>
                    <div class="text-sm text-gray-600">Fiction Awards</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Writing Journey -->
    <div class="fade-in mb-20">
        <h3 class="text-3xl md:text-4xl font-bold text-center mb-8 text-violet-600">Writing Journey</h3>
        <div class="relative max-w-4xl mx-auto py-5 timeline-line">
            <!-- Timeline Item 1 -->
            <div class="timeline-item relative w-1/2 pr-10 pb-10 opacity-0 transform translate-y-12 transition-all duration-1000 text-right">
                <div class="text-lg font-bold text-blue-700 mb-3">2024</div>
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h4 class="text-xl font-semibold mb-3 text-gray-800">Book 2</h4>
                    <p class="text-gray-600 leading-relaxed">Published "Harbor Lights" in Coastal Stories Anthology, receiving regional recognition.</p>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="timeline-item relative w-1/2 left-1/2 pl-10 pb-10 opacity-0 transform translate-y-12 transition-all duration-1000">
                <div class="text-lg font-bold text-blue-700 mb-3">2025</div>
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h4 class="text-xl font-semibold mb-3 text-gray-800">Book Name: </h4>
                    <p class="text-gray-600 leading-relaxed">Release of reimagined novel with new title, cover, and enhanced content.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Inspiration Section -->
    <div class="fade-in mb-20 bg-gradient-to-r from-violet-50 to-blue-50 p-16 rounded-2xl">
        <h3 class="text-3xl md:text-4xl font-bold text-center mb-8 text-violet-600">Writing Inspiration</h3>
        <div class="max-w-4xl mx-auto">
            <blockquote class="text-2xl md:text-3xl italic text-center mb-8 text-violet-700 relative">
                <span class="text-6xl absolute -top-8 -left-5 opacity-20 font-serif">"</span>
                I write stories that I would want to read – ones that keep moving, surprise me, and leave me feeling both satisfied and longing for more.
                <span class="text-6xl absolute -bottom-16 -right-5 opacity-20 font-serif">"</span>
            </blockquote>

            <p class="text-lg leading-relaxed mb-6 text-gray-700">
                Drawing from real life experiences and a deep fascination with human connection, Prem creates characters who are flawed, relatable, and determined. His settings are often inspired by the dramatic coastlines and charming towns of New England, though his stories take readers around the world.
            </p>

            <p class="text-lg leading-relaxed text-gray-700">
                What sets his work apart is his commitment to pacing. "Most romance novels have significant sections where nothing much happens," Prem explains. "I believe every scene should move the story forward in some way – through character growth, plot development, or emotional revelation."
            </p>
        </div>
    </div>

    <!-- Books Section -->
    <div class="fade-in mb-20">
        <h3 class="text-3xl md:text-4xl font-bold text-center mb-10 text-violet-600">Bibliography</h3>
        <div class="flex flex-wrap gap-8 justify-center">
            <div class="w-56 text-center transform hover:-translate-y-3 transition-all duration-300">
                <div class="w-56 h-80 shadow-2xl mb-4 book-3d-effect">
                    <img src="{{ asset('images/cover.jpg') }}" alt="Book Name:  book cover" class="w-full h-full object-cover rounded">
                </div>
                <h4 class="text-lg font-semibold mb-2 text-blue-700">Book Name: </h4>
                <p class="text-gray-100">2025</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="fade-in bg-gradient-to-br from-blue-600 via-blue-700 to-violet-600 p-20 text-center text-white rounded-2xl">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-4xl md:text-5xl font-bold mb-5">Connect with Prem</h3>
            <p class="text-xl mb-10 font-light">Stay updated on new releases, events, and exclusive content</p>

            <!-- Newsletter Form -->
            <form class="newsletter-form max-w-lg mx-auto flex flex-wrap gap-3 mb-10" method="POST" action="{{ route('subscribe') }}">
                @csrf
                <input id="emailInput" type="email" class="newsletter-input flex-1 min-w-[200px] px-6 py-4 border-0 rounded-full text-base shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300" placeholder="Your email address" required>
                <button id="subscribeBtn" type="submit" class="newsletter-button bg-amber-500 text-gray-900 px-8 py-4 border-0 rounded-full text-base font-bold cursor-pointer shadow-lg hover:-translate-y-1 hover:shadow-xl transition-all duration-300">Subscribe</button>
            </form>

            <!-- Social Media -->
            <div class="flex justify-center gap-6">
                <a href="#" class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-2xl hover:bg-white hover:text-blue-700 hover:-translate-y-2 transition-all duration-300">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-2xl hover:bg-white hover:text-blue-700 hover:-translate-y-2 transition-all duration-300">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-2xl hover:bg-white hover:text-blue-700 hover:-translate-y-2 transition-all duration-300">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-2xl hover:bg-white hover:text-blue-700 hover:-translate-y-2 transition-all duration-300">
                    <i class="fab fa-goodreads-g"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
   // Subscribe button event handler with improved error handling and UX
document.addEventListener('DOMContentLoaded', () => {
    const subscribeForm = document.querySelector('.newsletter-form');
    const emailInput = document.querySelector('.newsletter-input');

    if (subscribeForm) {
        subscribeForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Get the email and validate
            const email = emailInput.value.trim();
            if (!isValidEmail(email)) {
                showNotification('Please enter a valid email address', 'error');
                return;
            }

            // Disable form during submission
            const submitButton = subscribeForm.querySelector('.newsletter-button');
            const originalButtonText = submitButton.textContent;
            submitButton.disabled = true;
            submitButton.textContent = 'Subscribing...';

            try {
                const res = await fetch('/subscribe', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: new FormData(subscribeForm),
                });

                const data = await res.json();

                if (res.ok) {
                    showNotification(data.message || 'Successfully subscribed!', 'success');
                    emailInput.value = ''; // Clear the input on success
                } else {
                    showNotification(data.message || 'Something went wrong', 'error');
                }
            } catch (error) {
                showNotification('Network error. Please try again later.', 'error');
            } finally {
                // Re-enable the button regardless of outcome
                submitButton.disabled = false;
                submitButton.textContent = originalButtonText;
            }
        });
    }

    // Email validation function
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Notification function
    function showNotification(message, type = 'success') {
        // Remove any existing notification
        const existingNotification = document.querySelector('.subscribe-notification');
        if (existingNotification) {
            existingNotification.remove();
        }

        // Create notification element
        const notification = document.createElement('div');
        notification.className = `subscribe-notification ${type} p-4 rounded-lg mt-4 font-medium opacity-0 transition-opacity duration-300`;
        notification.textContent = message;

        if (type === 'success') {
            notification.classList.add('bg-green-100', 'text-green-800', 'border', 'border-green-200');
        } else {
            notification.classList.add('bg-red-100', 'text-red-800', 'border', 'border-red-200');
        }

        // Add to page after the form
        subscribeForm.insertAdjacentElement('afterend', notification);

        // Animate in
        setTimeout(() => {
            notification.classList.remove('opacity-0');
            notification.classList.add('opacity-100');
        }, 10);

        // Remove after 5 seconds
        setTimeout(() => {
            notification.classList.remove('opacity-100');
            notification.classList.add('opacity-0');
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    }
});

// Scroll animations for fade-in elements
function checkVisibility() {
    const fadeElements = document.querySelectorAll('.fade-in');
    const timelineItems = document.querySelectorAll('.timeline-item');

    fadeElements.forEach(element => {
        const position = element.getBoundingClientRect();

        // If element is in viewport
        if(position.top < window.innerHeight - 100) {
            element.classList.add('visible');
        }
    });

    timelineItems.forEach(item => {
        const position = item.getBoundingClientRect();

        if(position.top < window.innerHeight - 50) {
            item.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', checkVisibility);
window.addEventListener('load', checkVisibility);
window.addEventListener('resize', checkVisibility);

// Mobile responsive timeline adjustments
function adjustTimeline() {
    const timelineItems = document.querySelectorAll('.timeline-item');

    if (window.innerWidth <= 768) {
        timelineItems.forEach(item => {
            item.classList.remove('w-1/2', 'left-1/2', 'pr-10', 'pl-10', 'text-right');
            item.classList.add('w-full', 'pl-12', 'pr-5', 'text-left');
            item.style.left = '0';
        });
    } else {
        timelineItems.forEach((item, index) => {
            item.classList.remove('w-full', 'pl-12', 'pr-5', 'text-left');
            item.classList.add('w-1/2');

            if (index % 2 === 0) {
                item.classList.add('pr-10', 'text-right');
                item.classList.remove('left-1/2', 'pl-10');
                item.style.left = '0';
            } else {
                item.classList.add('left-1/2', 'pl-10');
                item.classList.remove('pr-10', 'text-right');
            }
        });
    }
}

window.addEventListener('resize', adjustTimeline);
window.addEventListener('load', adjustTimeline);
</script>
@endsection

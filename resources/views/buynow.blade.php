@extends('layout.main')

@section('styles')
   <!-- Tailwind CSS CDN -->
   <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#059669', // emerald-600
            secondary: '#0891b2', // cyan-600
            accent: '#7c3aed', // violet-600
            warm: '#f59e0b', // amber-500
          },
          animation: {
            'float': 'float 8s ease-in-out infinite',
            'pulse-custom': 'pulse-custom 0.5s ease',
          }
        }
      }
    }
   </script>
   <style>
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes pulse-custom {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }

    .animate-float {
        animation: float 8s ease-in-out infinite;
    }

    .animate-pulse-custom {
        animation: pulse-custom 0.5s ease;
    }

    .book-3d {
        transform: perspective(1000px) rotateY(10deg);
        transition: all 0.5s ease;
    }

    .book-3d:hover {
        transform: perspective(1000px) rotateY(0);
    }
   </style>
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
    <!-- Author Hero Section -->
    <div class="mt-14 bg-gradient-to-br from-primary to-secondary rounded-2xl p-8 sm:p-16 text-center text-white relative mb-12 overflow-hidden shadow-2xl">
        <!-- Floating Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <i class="fas fa-feather absolute top-1/5 left-1/12 text-5xl text-white/30 animate-float"></i>
            <i class="fas fa-book absolute top-2/5 right-1/5 text-4xl text-white/30 animate-float" style="animation-delay: 1s;"></i>
            <i class="fas fa-heart absolute bottom-1/3 left-1/3 text-3xl text-white/30 animate-float" style="animation-delay: 2s;"></i>
            <i class="fas fa-pen absolute top-1/3 right-2/5 text-4xl text-white/30 animate-float" style="animation-delay: 3s;"></i>
            <i class="fas fa-star absolute bottom-1/3 right-1/4 text-3xl text-white/30 animate-float" style="animation-delay: 4s;"></i>
        </div>

        <h1 class="text-4xl sm:text-5xl font-bold mb-4 drop-shadow-lg">Get Your Copy Today</h1>
        <p class="text-lg sm:text-xl max-w-3xl mx-auto leading-relaxed">Experience the fast-paced romance adventure that keeps readers hooked from beginning to end.</p>
    </div>

    <!-- Book Showcase Section -->
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 mb-12 p-8 bg-white rounded-2xl shadow-xl">
        <div class="w-full max-w-sm">
            <div class="book-3d shadow-2xl">
                <img src="{{ asset('images/cover.jpg') }}" alt="The Undoing Of Us -  book cover" class="w-full h-auto rounded-lg">
            </div>
        </div>

        <div class="flex-1 min-w-0 lg:max-w-lg space-y-6">
            <h2 class="text-3xl sm:text-4xl font-bold text-accent">The Undoing Of Us: </h2>
            <p class="text-lg text-gray-600 italic">By Prem Narayan</p>
            <p class="text-gray-700 leading-relaxed">
                A captivating romance novel that breaks the mold with its fast-paced storytelling and unexpected twists.
                No more "down time" - just pure emotional adventure from start to finish.
            </p>
            <div class="text-4xl font-bold text-primary" id="book-price">$7.99</div>

            <!-- Format Options -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold text-gray-800">Choose Format:</h3>
                <div class="flex flex-wrap gap-3">
                    <button class="format-button px-6 py-3 border-2 border-accent  font-semibold rounded-full hover:bg-accent hover:text-white transition-all duration-300 active bg-accent text-white" data-price="7.99">
                        E-book
                    </button>
                    <button class="format-button px-6 py-3 border-2 border-accent text-accent font-semibold rounded-full hover:bg-accent hover:text-white transition-all duration-300" data-price="12.99">
                        Paperback
                    </button>
                    <button class="format-button px-6 py-3 border-2 border-accent text-accent font-semibold rounded-full hover:bg-accent hover:text-white transition-all duration-300" data-price="18.99">
                        Hardcover
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Retailers Section -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl p-8 sm:p-12 mb-12">
        <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-10">Available At These Retailers</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Amazon Card -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="h-20 flex items-center justify-center mb-6">
                    <i class="fab fa-amazon text-6xl text-orange-500"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Amazon</h3>
                <div class="text-2xl font-bold text-primary mb-6 retailer-price">$12.99</div>
                <a href="#" class="inline-block bg-warm text-white px-8 py-3 rounded-full font-semibold hover:bg-amber-600 hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Buy on Amazon
                </a>
            </div>

            <!-- Barnes & Noble Card -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="h-20 flex items-center justify-center mb-6">
                    <img src="{{ asset('images/images.png') }}" alt="Barnes & Noble logo" class="max-w-full max-h-full">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Barnes & Noble</h3>
                <div class="text-2xl font-bold text-primary mb-6 retailer-price">$12.99</div>
                <a href="#" class="inline-block bg-warm text-white px-8 py-3 rounded-full font-semibold hover:bg-amber-600 hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Buy on B&N
                </a>
            </div>

            <!-- Direct from Author Card -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 md:col-span-2 lg:col-span-1">
                <div class="h-20 flex items-center justify-center mb-6">
                    <i class="fas fa-book-open text-5xl text-secondary"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Direct from Author</h3>
                <div class="text-2xl font-bold text-primary mb-6 retailer-price">
                    $11.99 <span class="text-green-600 text-base">(Special Price!)</span>
                </div>
                <a href="{{ route('contact-us') }}" class="inline-block bg-warm text-white px-8 py-3 rounded-full font-semibold hover:bg-amber-600 hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Buy Direct
                </a>
            </div>
        </div>
    </div>

    <!-- Special Offer Section -->
    <div class="bg-gradient-to-r from-primary/10 to-secondary/10 border-2 border-dashed border-primary rounded-2xl p-8 sm:p-12 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-accent mb-6">Special Limited Time Offer</h2>
        <p class="text-lg text-gray-100 leading-relaxed max-w-4xl mx-auto mb-8">
            Order directly from the author and receive a signed copy with a personalized message! Plus, get exclusive
            access to bonus content not available in the retail versions.
        </p>
        <a href="{{ route('contact-us') }}" class="inline-block bg-gradient-to-r from-primary to-secondary text-white px-10 py-4 rounded-full font-bold text-lg hover:from-primary/90 hover:to-secondary/90 hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl">
            Get Signed Copy
        </a>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Format selection functionality
    const formatButtons = document.querySelectorAll('.format-button');
    const priceDisplay = document.querySelector('#book-price');
    const retailerPrices = document.querySelectorAll('.retailer-price');

    formatButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active classes from all buttons
            formatButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-accent', 'text-white', 'animate-pulse-custom');
                btn.classList.add('text-accent');
            });

            // Add active classes to clicked button
            button.classList.add('active', 'bg-accent', 'text-white', 'animate-pulse-custom');
            button.classList.remove('text-accent');

            // Update price display
            const price = button.getAttribute('data-price');
            priceDisplay.textContent = `$${price}`;

            // Update retailer prices (with slight variations)
            const format = button.textContent.trim();

            if (format === 'Paperback') {
                retailerPrices[0].innerHTML = '$12.99';
                retailerPrices[1].innerHTML = '$12.99';
                retailerPrices[2].innerHTML = '$11.99 <span class="text-green-600 text-base">(Special Price!)</span>';
            } else if (format === 'Hardcover') {
                retailerPrices[0].innerHTML = '$18.99';
                retailerPrices[1].innerHTML = '$18.99';
                retailerPrices[2].innerHTML = '$17.99 <span class="text-green-600 text-base">(Special Price!)</span>';
            } else if (format === 'E-book') {
                retailerPrices[0].innerHTML = '$7.99';
                retailerPrices[1].innerHTML = '$7.99';
                retailerPrices[2].innerHTML = '$6.99 <span class="text-green-600 text-base">(Special Price!)</span>';
            }
        });
    });
</script>
@endsection

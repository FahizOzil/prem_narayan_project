<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Undoing Of Us -  | Prem Narayan')</title>

    {{-- favicon icon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    // colors: {
                    //     primary: {
                    //         50: '#f0f9ff',
                    //         100: '#e0f2fe',
                    //         200: '#bae6fd',
                    //         300: '#7dd3fc',
                    //         400: '#38bdf8',
                    //         500: '#0ea5e9',
                    //         600: '#0284c7',
                    //         700: '#0369a1',
                    //         800: '#075985',
                    //         900: '#0c4a6e',
                    //     },
                    //     secondary: {
                    //         50: '#fdf4ff',
                    //         100: '#fae8ff',
                    //         200: '#f5d0fe',
                    //         300: '#f0abfc',
                    //         400: '#e879f9',
                    //         500: '#d946ef',
                    //         600: '#c026d3',
                    //         700: '#a21caf',
                    //         800: '#86198f',
                    //         900: '#701a75',
                    //     },
                    //     accent: {
                    //         50: '#fff7ed',
                    //         100: '#ffedd5',
                    //         200: '#fed7aa',
                    //         300: '#fdba74',
                    //         400: '#fb923c',
                    //         500: '#f97316',
                    //         600: '#ea580c',
                    //         700: '#c2410c',
                    //         800: '#9a3412',
                    //         900: '#7c2d12',
                    //     }
                    // },
                    colors: {
                        primary: '#dc2626',    // Red-600 - Passionate red
                        secondary: '#c2410c',  // Orange-700 - Warm orange
                        accent: '#fbbf24',     // Amber-400 - Golden glow
                        dark: '#292524',       // Stone-800 - Warm charcoal
                        light: '#fffbeb'       // Amber-50 - Cream white
                    }

                    fontFamily: {
                        'montserrat': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS for animations and special effects -->
    <style>
        .floating-element {
            position: absolute;
            animation: float 15s infinite linear;
            pointer-events: none;
            z-index: 1;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.6s ease-out;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s ease-out;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9, #d946ef, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-scroll {
            backdrop-filter: blur(10px);
            background: rgba(15, 23, 42, 0.9);
        }
    </style>

    <!-- Additional stylesheets -->
    @yield('styles')
</head>

<body class="font-montserrat bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 navbar-scroll">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}"
                    class="text-2xl font-bold gradient-text hover:scale-105 transition-transform duration-300">
                    The Undoing Of Us
                </a>

                <!-- Mobile menu button -->
                <button class="lg:hidden text-white hover:text-primary-400 transition-colors duration-300"
                    id="navbar-toggle">
                    <i class="fas fa-bars text-xl"></i>
                </button>

                <!-- Desktop navigation -->
                <ul class="hidden lg:flex space-x-8">
                    <li><a href="{{ route('home') }}"
                            class="text-white hover:text-primary-400 transition-colors duration-300 font-medium">Home</a>
                    </li>
                    <li><a href="{{ route('book') }}"
                            class="text-white hover:text-primary-400 transition-colors duration-300 font-medium">The
                            Book</a></li>
                    <li><a href="{{ route('about-us') }}"
                            class="text-white hover:text-primary-400 transition-colors duration-300 font-medium">Author</a>
                    </li>
                    <li><a href="{{ route('buy') }}"
                            class="bg-gradient-to-r from-primary-500 to-secondary-500 px-6 py-2 rounded-full text-white font-semibold hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-105">Buy
                            Now</a></li>
                    <li><a href="{{ route('contact-us') }}"
                            class="text-white hover:text-primary-400 transition-colors duration-300 font-medium">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile navigation -->
            <div class="lg:hidden mt-4 hidden" id="navbar-links">
                <ul class="flex flex-col space-y-4 bg-slate-800/90 backdrop-blur-md rounded-lg p-6">
                    <li><a href="{{ route('home') }}"
                            class="block text-white hover:text-primary-400 transition-colors duration-300 font-medium">Home</a>
                    </li>
                    <li><a href="{{ route('book') }}"
                            class="block text-white hover:text-primary-400 transition-colors duration-300 font-medium">The
                            Book</a></li>
                    <li><a href="{{ route('about-us') }}"
                            class="block text-white hover:text-primary-400 transition-colors duration-300 font-medium">Author</a>
                    </li>
                    <li><a href="{{ route('buy') }}"
                            class="block bg-gradient-to-r from-primary-500 to-secondary-500 px-6 py-2 rounded-full text-white font-semibold hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 text-center">Buy
                            Now</a></li>
                    <li><a href="{{ route('contact-us') }}"
                            class="block text-white hover:text-primary-400 transition-colors duration-300 font-medium">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-slate-900 to-slate-800 border-t border-slate-700">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-4">
                    <h3 class="text-xl font-bold gradient-text">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Home</a>
                        </li>
                        <li><a href="{{ route('book') }}"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">The
                                Book</a></li>
                        <li><a href="{{ route('about-us') }}"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">About
                                Author</a></li>
                        <li><a href="{{ route('contact-us') }}"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xl font-bold gradient-text">Purchase Options</h3>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Amazon</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Barnes &
                                Noble</a></li>
                        <li><a href="#"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Paperback</a>
                        </li>
                        <li><a href="#"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Hardcover</a>
                        </li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xl font-bold gradient-text">Connect</h3>
                    <ul class="space-y-2 mb-6">
                        <li><a href="{{ route('contact-us') }}"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Contact
                                Author</a></li>
                        <li><a href="#"
                                class="text-slate-300 hover:text-primary-400 transition-colors duration-300">Newsletter</a>
                        </li>
                    </ul>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white hover:from-primary-600 hover:to-secondary-600 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-slate-700 mt-8 pt-8 text-center">
                <p class="text-slate-400">
                    &copy; {{ date('Y') }} Prem Narayan. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Core JavaScript -->
    <script>
        // Mobile navigation toggle
        document.addEventListener('DOMContentLoaded', function () {
            const navbarToggle = document.getElementById('navbar-toggle');
            const navbarLinks = document.getElementById('navbar-links');

            if (navbarToggle) {
                navbarToggle.addEventListener('click', function () {
                    navbarLinks.classList.toggle('hidden');
                });
            }

            // Scroll animation function
            function checkElementsVisibility() {
                const animatedElements = document.querySelectorAll('.fade-in, .slide-in-right, .slide-in-left');

                animatedElements.forEach(element => {
                    const position = element.getBoundingClientRect();

                    // If element is in viewport
                    if (position.top < window.innerHeight * 0.9 && position.bottom >= 0) {
                        element.classList.add('visible');
                    }
                });
            }

            // Check visibility on scroll
            window.addEventListener('scroll', checkElementsVisibility);

            // Initial check on page load
            checkElementsVisibility();

            // Floating elements creator (for hero section)
            const createFloatingElements = function (containerId, content, count) {
                const container = document.getElementById(containerId);
                if (!container) return;

                for (let i = 0; i < count; i++) {
                    const element = document.createElement('div');
                    element.classList.add('floating-element');

                    // Random styling
                    const size = Math.random() * 30 + 10;
                    const startPos = Math.random() * 100;
                    const delay = Math.random() * 15;
                    const duration = Math.random() * 10 + 10;

                    element.innerHTML = content;
                    element.style.left = `${startPos}%`;
                    element.style.fontSize = `${size}px`;
                    element.style.color = content === '❤' ?
                        `rgba(14, 165, 233, ${Math.random() * 0.4 + 0.4})` :
                        'rgba(217, 70, 239, 0.6)';
                    element.style.animationDuration = `${duration}s`;
                    element.style.animationDelay = `${delay}s`;

                    container.appendChild(element);
                }
            };

            // Initialize floating elements if container exists
            if (document.getElementById('floating-hearts')) {
                createFloatingElements('floating-hearts', '❤', 20);
            }
        });
    </script>

    <!-- Page-specific scripts -->
    @yield('scripts')
</body>

</html>

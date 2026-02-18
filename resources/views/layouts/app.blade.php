<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Strategic Growth Consulting') — ConsultPro</title>
    <meta name="description" content="@yield('meta_description', 'Expert business consulting for growing companies. Strategy, operations, and leadership coaching from a seasoned advisor.')">
    <meta name="keywords" content="business consulting, strategy consulting, leadership coaching, business growth, operations consulting">
    <meta property="og:title" content="@yield('title', 'Strategic Growth Consulting') — ConsultPro">
    <meta property="og:description" content="@yield('meta_description', 'Expert business consulting for growing companies.')">
    <meta property="og:type" content="website">
    <link rel="canonical" href="{{ url()->current() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['DM Serif Display', 'Georgia', 'serif'],
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        navy: { 50: '#f0f3f9', 100: '#dce3f0', 800: '#1e2a4a', 900: '#141d35', 950: '#0c1221' },
                        warm: { 50: '#fdf8f0', 100: '#f9edd8', 200: '#f2d8a8', 400: '#d4a24c', 500: '#c08b2d', 600: '#a87623' },
                        sage: { 50: '#f4f7f4', 100: '#e4ebe4', 500: '#6b8c6b', 600: '#567256' }
                    }
                }
            }
        }
    </script>
    <style>
        .hero-gradient { background: linear-gradient(135deg, #141d35 0%, #1e2a4a 50%, #243352 100%); }
        .gold-line { background: linear-gradient(90deg, transparent, #c08b2d, transparent); height: 1px; }
        .card-lift { transition: transform 0.3s, box-shadow 0.3s; }
        .card-lift:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(0,0,0,0.1); }
        .text-balance { text-wrap: balance; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

    {{-- Navigation --}}
    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50" x-data="{ open: false }">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-navy-900 rounded-lg flex items-center justify-center">
                        <span class="text-warm-400 font-serif text-lg font-bold">C</span>
                    </div>
                    <span class="font-serif text-xl text-navy-900">ConsultPro</span>
                </a>

                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('services') }}" class="text-sm {{ request()->routeIs('services') ? 'text-warm-500 font-semibold' : 'text-gray-600 hover:text-navy-900' }} transition-colors">Services</a>
                    <a href="{{ route('about') }}" class="text-sm {{ request()->routeIs('about') ? 'text-warm-500 font-semibold' : 'text-gray-600 hover:text-navy-900' }} transition-colors">About</a>
                    <a href="{{ route('testimonials') }}" class="text-sm {{ request()->routeIs('testimonials') ? 'text-warm-500 font-semibold' : 'text-gray-600 hover:text-navy-900' }} transition-colors">Results</a>
                    <a href="{{ route('blog') }}" class="text-sm {{ request()->routeIs('blog') ? 'text-warm-500 font-semibold' : 'text-gray-600 hover:text-navy-900' }} transition-colors">Insights</a>
                    <a href="{{ route('faq') }}" class="text-sm {{ request()->routeIs('faq') ? 'text-warm-500 font-semibold' : 'text-gray-600 hover:text-navy-900' }} transition-colors">FAQ</a>
                    <a href="{{ route('book') }}" class="bg-navy-900 text-white text-sm font-medium px-5 py-2.5 rounded-lg hover:bg-navy-800 transition-colors">Book a Call</a>
                </div>

                <button @click="open = !open" class="md:hidden text-gray-600 p-2">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" x-show="!open" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        <path stroke-linecap="round" stroke-linejoin="round" x-show="open" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div x-show="open" x-transition class="md:hidden py-4 border-t border-gray-100 space-y-3">
                <a href="{{ route('services') }}" class="block text-sm text-gray-600 hover:text-navy-900 py-1">Services</a>
                <a href="{{ route('about') }}" class="block text-sm text-gray-600 hover:text-navy-900 py-1">About</a>
                <a href="{{ route('testimonials') }}" class="block text-sm text-gray-600 hover:text-navy-900 py-1">Results</a>
                <a href="{{ route('blog') }}" class="block text-sm text-gray-600 hover:text-navy-900 py-1">Insights</a>
                <a href="{{ route('faq') }}" class="block text-sm text-gray-600 hover:text-navy-900 py-1">FAQ</a>
                <a href="{{ route('book') }}" class="block bg-navy-900 text-white text-sm font-medium px-5 py-2.5 rounded-lg text-center mt-3">Book a Call</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    {{-- CTA Band --}}
    @hasSection('hide_cta')
    @else
    <section class="hero-gradient py-16 sm:py-20">
        <div class="max-w-3xl mx-auto px-4 text-center space-y-6">
            <h2 class="font-serif text-3xl sm:text-4xl text-white">Ready to Grow Your Business?</h2>
            <p class="text-gray-300 text-lg">Book a free 30-minute discovery call. No pitch, no pressure &mdash; just clarity on your next best move.</p>
            <a href="{{ route('book') }}" class="inline-block bg-warm-500 hover:bg-warm-400 text-white font-medium px-8 py-3.5 rounded-lg transition-colors text-sm">
                Schedule Your Free Call &rarr;
            </a>
        </div>
    </section>
    @endif

    {{-- Footer --}}
    <footer class="bg-navy-950 text-gray-400">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                            <span class="text-warm-400 font-serif text-base font-bold">C</span>
                        </div>
                        <span class="font-serif text-lg text-white">ConsultPro</span>
                    </div>
                    <p class="text-sm leading-relaxed">Helping business owners make better decisions, faster. Based in Lawrenceville, GA — working with clients nationwide.</p>
                </div>
                <div>
                    <h4 class="text-white font-medium text-sm mb-4">Services</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Strategy Sessions</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Operations Review</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Leadership Coaching</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Growth Planning</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-medium text-sm mb-4">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('testimonials') }}" class="hover:text-white transition-colors">Client Results</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Insights</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-medium text-sm mb-4">Get Started</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('book') }}" class="hover:text-white transition-colors">Book a Call</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10 mt-10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <span>&copy; {{ date('Y') }} ConsultPro. All rights reserved.</span>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-gray-300">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

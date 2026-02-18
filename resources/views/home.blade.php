@extends('layouts.app')

@section('title', 'Strategic Growth Consulting')
@section('hide_cta', true)

@section('content')
    {{-- Hero --}}
    <section class="hero-gradient relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 right-20 w-96 h-96 rounded-full bg-warm-400 blur-[120px]"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full bg-warm-500 blur-[100px]"></div>
        </div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 sm:pt-40 sm:pb-28">
            <div class="max-w-2xl">
                <p class="text-warm-400 text-sm font-medium tracking-wider uppercase mb-4">Business Growth Consultant</p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl text-white leading-tight mb-6">
                    Stop guessing.<br>
                    <span class="text-warm-400">Start scaling.</span>
                </h1>
                <p class="text-gray-300 text-lg sm:text-xl leading-relaxed mb-8 max-w-lg">
                    I help business owners build systems that drive revenue, reduce chaos, and create the freedom you started your business for in the first place.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('book') }}" class="inline-flex items-center justify-center gap-2 bg-warm-500 hover:bg-warm-400 text-white font-medium px-8 py-3.5 rounded-lg transition-colors text-sm">
                        Book Your Free Call
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center gap-2 border border-white/20 text-white hover:bg-white/10 font-medium px-8 py-3.5 rounded-lg transition-colors text-sm">
                        View Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Trust Bar --}}
    <section class="border-b border-gray-100 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl font-serif text-navy-900">200+</p>
                    <p class="text-sm text-gray-500 mt-1">Businesses Coached</p>
                </div>
                <div>
                    <p class="text-3xl font-serif text-navy-900">$14M</p>
                    <p class="text-sm text-gray-500 mt-1">Revenue Generated</p>
                </div>
                <div>
                    <p class="text-3xl font-serif text-navy-900">15+</p>
                    <p class="text-sm text-gray-500 mt-1">Years Experience</p>
                </div>
                <div>
                    <p class="text-3xl font-serif text-navy-900">96%</p>
                    <p class="text-sm text-gray-500 mt-1">Client Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Problem/Solution --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center mb-16">
                <p class="text-warm-500 text-sm font-medium tracking-wider uppercase mb-3">The Problem</p>
                <h2 class="font-serif text-3xl sm:text-4xl text-navy-900 mb-4">You built a business. Now it runs you.</h2>
                <p class="text-gray-500 text-lg">Most business owners are stuck working <em>in</em> their business instead of <em>on</em> it. Sound familiar?</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach([
                    ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'No time to think strategically', 'desc' => 'You\'re so busy putting out fires that long-term planning feels like a luxury you can\'t afford.'],
                    ['icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', 'title' => 'Revenue plateaued', 'desc' => 'You hit a ceiling and every tactic that got you here isn\'t working anymore. Growth feels stuck.'],
                    ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'title' => 'Operations are a mess', 'desc' => 'Processes live in your head, your team needs constant direction, and nothing scales without you.'],
                ] as $item)
                <div class="bg-gray-50 rounded-xl p-8 card-lift">
                    <div class="w-12 h-12 bg-warm-50 rounded-lg flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-navy-900 mb-2">{{ $item['title'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services Preview --}}
    <section class="py-20 sm:py-28 bg-navy-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-warm-500 text-sm font-medium tracking-wider uppercase mb-3">How I Help</p>
                <h2 class="font-serif text-3xl sm:text-4xl text-navy-900 mb-4">Three Ways We Can Work Together</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['name' => 'Strategy Session', 'price' => '$297', 'time' => '90 min', 'desc' => 'A focused deep-dive into your biggest challenge. Walk away with a clear action plan and the confidence to execute.', 'features' => ['90-minute video call', 'Pre-session questionnaire', 'Recorded for your reference', 'Follow-up action plan'], 'route' => 'book.strategy'],
                    ['name' => 'Growth Audit', 'price' => '$1,497', 'time' => '2 weeks', 'desc' => 'A comprehensive review of your business operations, revenue model, and growth levers — with a detailed roadmap.', 'features' => ['Full business analysis', 'Revenue model review', 'Operations assessment', 'Custom growth roadmap'], 'route' => 'book.growth', 'featured' => true],
                    ['name' => 'VIP Day', 'price' => '$2,997', 'time' => 'Full day', 'desc' => 'An intensive full-day engagement where we solve your biggest problems and build the systems together.', 'features' => ['6-hour intensive session', 'Real-time implementation', 'SOPs and templates built', '30 days email support'], 'route' => 'book.vip'],
                ] as $service)
                <div class="bg-white rounded-xl p-8 shadow-sm border {{ isset($service['featured']) ? 'border-warm-300 ring-1 ring-warm-200' : 'border-gray-200' }} card-lift relative">
                    @if(isset($service['featured']))
                        <span class="absolute -top-3 left-8 bg-warm-500 text-white text-xs font-medium px-3 py-1 rounded-full">Most Popular</span>
                    @endif
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-navy-900 mb-1">{{ $service['name'] }}</h3>
                        <div class="flex items-baseline gap-2">
                            <span class="text-2xl font-serif text-navy-900">{{ $service['price'] }}</span>
                            <span class="text-sm text-gray-400">/ {{ $service['time'] }}</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">{{ $service['desc'] }}</p>
                    <ul class="space-y-3 mb-8">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-center gap-2 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-warm-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route($service['route']) }}" class="block text-center py-3 rounded-lg text-sm font-medium transition-colors {{ isset($service['featured']) ? 'bg-navy-900 text-white hover:bg-navy-800' : 'bg-gray-100 text-navy-900 hover:bg-gray-200' }}">
                        Learn More
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonials Preview --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-warm-500 text-sm font-medium tracking-wider uppercase mb-3">Results</p>
                <h2 class="font-serif text-3xl sm:text-4xl text-navy-900">What Clients Say</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach([
                    ['quote' => 'Within 90 days of working together, we identified $340K in untapped revenue. The strategy session alone paid for itself 100x over.', 'name' => 'Jennifer Torres', 'role' => 'CEO, Apex Digital', 'result' => '+340K revenue'],
                    ['quote' => 'I was drowning in operational chaos. After the VIP Day, we had SOPs, a hiring plan, and I actually took my first vacation in 3 years.', 'name' => 'Michael Chen', 'role' => 'Founder, GreenLeaf Co', 'result' => 'First vacation in 3 years'],
                    ['quote' => 'The growth audit showed me exactly where we were leaking money. We cut overhead by 23% and grew revenue by 40% in the same quarter.', 'name' => 'Sarah Williams', 'role' => 'Owner, Precision MFG', 'result' => '+40% revenue, -23% costs'],
                ] as $t)
                <div class="bg-gray-50 rounded-xl p-8 relative">
                    <div class="flex gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 text-warm-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">"{{ $t['quote'] }}"</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-semibold text-navy-900">{{ $t['name'] }}</p>
                            <p class="text-xs text-gray-400">{{ $t['role'] }}</p>
                        </div>
                        <span class="text-xs font-medium bg-warm-50 text-warm-600 px-2.5 py-1 rounded-full">{{ $t['result'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('testimonials') }}" class="text-sm text-warm-600 hover:text-warm-500 font-medium">See all client results &rarr;</a>
            </div>
        </div>
    </section>

    {{-- About Preview --}}
    <section class="py-20 sm:py-28 bg-navy-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="aspect-[4/5] rounded-2xl bg-gradient-to-br from-navy-200 to-navy-100 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="Business Consultant" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <p class="text-warm-500 text-sm font-medium tracking-wider uppercase mb-3">About</p>
                    <h2 class="font-serif text-3xl sm:text-4xl text-navy-900 mb-6">I've been where you are.</h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>After 15 years building and scaling businesses — from a bootstrapped startup to a company doing $8M in annual revenue — I know firsthand what it takes to grow without burning out.</p>
                        <p>Now I help other business owners skip the painful lessons I learned the hard way. My approach is direct, practical, and focused entirely on results you can measure.</p>
                        <p>No theory. No fluff. Just proven strategies from someone who's done it.</p>
                    </div>
                    <div class="mt-8 flex gap-4">
                        <a href="{{ route('about') }}" class="text-sm font-medium text-warm-600 hover:text-warm-500">Read my full story &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="hero-gradient py-20 sm:py-28">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="font-serif text-3xl sm:text-4xl text-white mb-4">Let's Talk About Your Business</h2>
            <p class="text-gray-300 text-lg mb-8">Book a free 30-minute discovery call. No pitch, no pressure — just an honest conversation about where you are and where you want to be.</p>
            <a href="{{ route('book') }}" class="inline-flex items-center gap-2 bg-warm-500 hover:bg-warm-400 text-white font-medium px-8 py-3.5 rounded-lg transition-colors text-sm">
                Schedule Your Free Call
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>
@endsection

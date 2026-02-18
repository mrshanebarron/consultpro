@extends('layouts.app')

@section('title', 'Book a Call')
@section('meta_description', 'Book a free 30-minute discovery call or choose from strategy sessions, growth audits, and VIP day intensives.')
@section('hide_cta', true)

@section('content')
    {{-- Hero --}}
    <section class="hero-gradient py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl sm:text-5xl text-white leading-tight mb-6">Let's figure out your next move.</h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">Start with a free discovery call — or dive straight into the engagement that fits.</p>
        </div>
    </section>

    {{-- Free Discovery Call --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-navy-50 rounded-2xl p-8 sm:p-12 text-center">
                <div class="w-16 h-16 bg-warm-50 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                </div>
                <span class="text-xs font-medium bg-sage-50 text-sage-600 px-3 py-1 rounded-full">Free — No Obligation</span>
                <h2 class="font-serif text-3xl text-navy-900 mt-4 mb-3">30-Minute Discovery Call</h2>
                <p class="text-gray-500 max-w-xl mx-auto mb-8">Not sure where to start? Let's talk. In 30 minutes, we'll discuss where your business is today, identify your biggest opportunity, and determine the best path forward. No pitch, no pressure.</p>
                <div class="bg-white rounded-xl p-8 max-w-md mx-auto border border-gray-200">
                    <p class="text-sm text-gray-500 mb-4">Select a time that works for you:</p>
                    <div class="space-y-3 mb-6">
                        @foreach(['Mon – Fri, 9am – 12pm ET', 'Mon – Fri, 2pm – 5pm ET'] as $slot)
                        <div class="border border-gray-200 rounded-lg px-4 py-3 text-sm text-gray-700 hover:border-warm-400 hover:bg-warm-50/50 cursor-pointer transition-colors">
                            {{ $slot }}
                        </div>
                        @endforeach
                    </div>
                    <button class="w-full bg-warm-500 hover:bg-warm-400 text-white font-medium py-3 rounded-lg transition-colors text-sm">
                        Schedule Free Call
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="gold-line max-w-xl mx-auto"></div>

    {{-- Paid Engagements --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-warm-500 text-sm font-medium tracking-wider uppercase mb-3">Ready to Go Deeper?</p>
                <h2 class="font-serif text-3xl text-navy-900">Choose Your Engagement</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['name' => 'Strategy Session', 'price' => '$297', 'time' => '90 min', 'desc' => 'One focused challenge. One clear plan.', 'route' => 'book.strategy', 'features' => ['90-minute video call', 'Pre-session questionnaire', 'Written action plan', '7 days email support']],
                    ['name' => 'Growth Audit', 'price' => '$1,497', 'time' => '2 weeks', 'desc' => 'Full business diagnostic and roadmap.', 'route' => 'book.growth', 'featured' => true, 'features' => ['Complete business analysis', 'Revenue & ops review', 'Custom growth roadmap', '14 days email support']],
                    ['name' => 'VIP Day', 'price' => '$2,997', 'time' => 'Full day', 'desc' => 'Build the systems together.', 'route' => 'book.vip', 'features' => ['6-hour intensive', 'Real-time implementation', 'SOPs & templates', '30 days email support']],
                ] as $service)
                <div class="bg-white rounded-xl p-8 border {{ isset($service['featured']) ? 'border-warm-300 ring-1 ring-warm-200' : 'border-gray-200' }} relative card-lift">
                    @if(isset($service['featured']))
                        <span class="absolute -top-3 left-8 bg-warm-500 text-white text-xs font-medium px-3 py-1 rounded-full">Most Popular</span>
                    @endif
                    <h3 class="text-lg font-semibold text-navy-900 mb-1">{{ $service['name'] }}</h3>
                    <div class="flex items-baseline gap-2 mb-3">
                        <span class="text-2xl font-serif text-navy-900">{{ $service['price'] }}</span>
                        <span class="text-sm text-gray-400">/ {{ $service['time'] }}</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-6">{{ $service['desc'] }}</p>
                    <ul class="space-y-2 mb-6">
                        @foreach($service['features'] as $f)
                        <li class="flex items-center gap-2 text-sm text-gray-600">
                            <svg class="w-3.5 h-3.5 text-warm-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            {{ $f }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route($service['route']) }}" class="block text-center py-3 rounded-lg text-sm font-medium transition-colors {{ isset($service['featured']) ? 'bg-navy-900 text-white hover:bg-navy-800' : 'bg-gray-100 text-navy-900 hover:bg-gray-200' }}">
                        Book {{ $service['name'] }}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-16 bg-navy-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-2xl text-navy-900 mb-3">Questions before booking?</h2>
            <p class="text-gray-500 text-sm mb-6">Check the <a href="{{ route('faq') }}" class="text-warm-500 hover:underline">FAQ</a> or <a href="{{ route('contact') }}" class="text-warm-500 hover:underline">send me a message</a>.</p>
        </div>
    </section>
@endsection

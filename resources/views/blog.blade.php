@extends('layouts.app')

@section('title', 'Insights')
@section('meta_description', 'Practical business insights on strategy, growth, operations, and leadership from 15+ years of experience.')

@section('content')
    {{-- Hero --}}
    <section class="hero-gradient py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-warm-400 text-sm font-medium tracking-wider uppercase mb-4">Insights</p>
                <h1 class="font-serif text-4xl sm:text-5xl text-white leading-tight mb-6">Ideas worth implementing.</h1>
                <p class="text-gray-300 text-lg">Practical strategies from the field — not theory from the ivory tower.</p>
            </div>
        </div>
    </section>

    {{-- Featured --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <div class="rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=700&q=80" alt="Business Strategy" class="w-full h-full object-cover aspect-[16/10]">
                </div>
                <div class="flex flex-col justify-center">
                    <span class="text-xs font-medium text-warm-500 uppercase tracking-wider mb-2">Featured</span>
                    <h2 class="font-serif text-2xl sm:text-3xl text-navy-900 mb-3">The 3 Growth Levers Every Business Owner Ignores</h2>
                    <p class="text-gray-500 leading-relaxed mb-4">After working with 200+ businesses, I've found that almost every owner overlooks the same three growth opportunities. Here's what they are — and how to pull them.</p>
                    <div class="flex items-center gap-4 text-sm text-gray-400">
                        <span>8 min read</span>
                        <span>&bull;</span>
                        <span>Strategy</span>
                    </div>
                </div>
            </div>

            {{-- Articles Grid --}}
            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Why Your Pricing Strategy Is Costing You Clients', 'excerpt' => 'Undercharging doesn\'t attract more clients — it attracts the wrong ones. Here\'s how to price with confidence.', 'category' => 'Strategy', 'time' => '5 min', 'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&q=80'],
                    ['title' => 'The SOPs That Actually Save You Time', 'excerpt' => 'Not all documentation is equal. These are the 5 SOPs every growing business needs — and how to write them in under an hour each.', 'category' => 'Operations', 'time' => '6 min', 'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=400&q=80'],
                    ['title' => 'Hiring Before You\'re Ready? Read This.', 'excerpt' => 'Most businesses hire to solve capacity problems when they should be solving process problems first. Here\'s the framework I use.', 'category' => 'Leadership', 'time' => '7 min', 'image' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=400&q=80'],
                    ['title' => 'Revenue Plateaus: Diagnosis and Treatment', 'excerpt' => 'If your revenue has flatlined, the problem is rarely what you think it is. A diagnostic framework for breaking through.', 'category' => 'Growth', 'time' => '9 min', 'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&q=80'],
                    ['title' => 'The Owner\'s Weekly Review: A Template', 'excerpt' => 'The single most impactful habit I recommend to every client. 45 minutes a week that changes everything.', 'category' => 'Operations', 'time' => '4 min', 'image' => 'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=400&q=80'],
                    ['title' => 'When to Fire Your Biggest Client', 'excerpt' => 'Revenue concentration is a hidden risk. Here\'s how to know when your biggest account is actually your biggest liability.', 'category' => 'Strategy', 'time' => '6 min', 'image' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&q=80'],
                ] as $post)
                <article class="group">
                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-4">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-xs font-medium text-warm-500">{{ $post['category'] }}</span>
                        <span class="text-xs text-gray-300">&bull;</span>
                        <span class="text-xs text-gray-400">{{ $post['time'] }} read</span>
                    </div>
                    <h3 class="font-semibold text-navy-900 mb-2 group-hover:text-warm-600 transition-colors">{{ $post['title'] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $post['excerpt'] }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Newsletter --}}
    <section class="py-16 bg-navy-50">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-2xl text-navy-900 mb-3">Get insights delivered</h2>
            <p class="text-gray-500 text-sm mb-6">One actionable business insight per week. No fluff, no spam. Unsubscribe anytime.</p>
            <form class="flex gap-3 max-w-md mx-auto">
                <input type="email" placeholder="your@email.com" class="flex-1 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-warm-400/20 focus:border-warm-400">
                <button type="button" class="bg-navy-900 text-white text-sm font-medium px-6 py-3 rounded-lg hover:bg-navy-800 transition-colors whitespace-nowrap">Subscribe</button>
            </form>
        </div>
    </section>
@endsection

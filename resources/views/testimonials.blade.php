@extends('layouts.app')

@section('title', 'Client Results')
@section('meta_description', 'Real results from real business owners. See how ConsultPro has helped companies grow revenue, cut costs, and scale operations.')

@section('content')
    {{-- Hero --}}
    <section class="hero-gradient py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-warm-400 text-sm font-medium tracking-wider uppercase mb-4">Client Results</p>
                <h1 class="font-serif text-4xl sm:text-5xl text-white leading-tight mb-6">Don't take my word for it.</h1>
                <p class="text-gray-300 text-lg">Here's what happens when strategy meets execution.</p>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="py-12 border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl font-serif text-warm-500">96%</p>
                    <p class="text-sm text-gray-500 mt-1">Client Satisfaction</p>
                </div>
                <div>
                    <p class="text-3xl font-serif text-warm-500">4.9/5</p>
                    <p class="text-sm text-gray-500 mt-1">Average Rating</p>
                </div>
                <div>
                    <p class="text-3xl font-serif text-warm-500">$14M+</p>
                    <p class="text-sm text-gray-500 mt-1">Revenue Generated</p>
                </div>
                <div>
                    <p class="text-3xl font-serif text-warm-500">72%</p>
                    <p class="text-sm text-gray-500 mt-1">Return Clients</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Case Study --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-navy-50 rounded-2xl p-8 sm:p-12">
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <span class="text-xs font-medium bg-warm-50 text-warm-600 px-2.5 py-1 rounded-full">Featured Case Study</span>
                        <h2 class="font-serif text-3xl text-navy-900 mt-4 mb-2">Apex Digital</h2>
                        <p class="text-sm text-gray-400 mb-6">B2B SaaS &bull; 12 employees &bull; Growth Audit + VIP Day</p>
                        <blockquote class="text-gray-600 leading-relaxed mb-6 text-lg italic border-l-2 border-warm-400 pl-4">
                            "Within 90 days, we identified $340K in untapped revenue streams. The strategy session alone paid for itself 100 times over."
                        </blockquote>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-navy-200 rounded-full flex items-center justify-center">
                                <span class="text-sm font-bold text-navy-800">JT</span>
                            </div>
                            <div>
                                <p class="font-semibold text-navy-900">Jennifer Torres</p>
                                <p class="text-sm text-gray-400">CEO, Apex Digital</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                            <p class="text-3xl font-serif text-navy-900">+$340K</p>
                            <p class="text-xs text-gray-400 mt-1">New Revenue Found</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                            <p class="text-3xl font-serif text-navy-900">47%</p>
                            <p class="text-xs text-gray-400 mt-1">Revenue Growth</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                            <p class="text-3xl font-serif text-navy-900">3x</p>
                            <p class="text-xs text-gray-400 mt-1">Sales Pipeline</p>
                        </div>
                        <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                            <p class="text-3xl font-serif text-navy-900">90</p>
                            <p class="text-xs text-gray-400 mt-1">Days to Results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial Grid --}}
    <section class="py-20 sm:py-28 bg-navy-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['quote' => 'I was drowning in operational chaos. After the VIP Day, we had SOPs, a hiring plan, and I actually took my first vacation in 3 years.', 'name' => 'Michael Chen', 'role' => 'Founder, GreenLeaf Co', 'service' => 'VIP Day', 'result' => 'First vacation in 3 years'],
                    ['quote' => 'The growth audit showed me exactly where we were leaking money. We cut overhead by 23% and grew revenue by 40% in the same quarter.', 'name' => 'Sarah Williams', 'role' => 'Owner, Precision MFG', 'service' => 'Growth Audit', 'result' => '+40% revenue, -23% costs'],
                    ['quote' => 'I\'d been stuck at the same revenue for 18 months. One strategy session gave me a roadmap that broke through the ceiling in 60 days.', 'name' => 'David Park', 'role' => 'CEO, Stacked Agency', 'service' => 'Strategy Session', 'result' => 'Broke 18-month plateau'],
                    ['quote' => 'We were about to hire 5 people we didn\'t need. The audit revealed we needed better processes, not more headcount. Saved us $400K/year.', 'name' => 'Lisa Morrison', 'role' => 'COO, BridgeTech', 'service' => 'Growth Audit', 'result' => '$400K saved annually'],
                    ['quote' => 'Most consultants give you a PDF and disappear. This was different — we built the actual systems together during the VIP Day. Game changer.', 'name' => 'Robert Kim', 'role' => 'Founder, Atlas Fitness', 'service' => 'VIP Day', 'result' => '3 SOPs built same day'],
                    ['quote' => 'I went from working 70-hour weeks to 45 while growing revenue 25%. The operations review alone was worth 10x what I paid.', 'name' => 'Amanda Reyes', 'role' => 'Owner, Bloom Events', 'service' => 'Growth Audit', 'result' => '-25 hrs/week, +25% rev'],
                    ['quote' => 'Brought clarity to our pricing strategy. We raised prices 30% and lost zero clients. Should have done this years ago.', 'name' => 'Thomas Wright', 'role' => 'MD, Wright Consulting', 'service' => 'Strategy Session', 'result' => '+30% pricing, 0% churn'],
                    ['quote' => 'The follow-up support was exceptional. Not just advice — real accountability. My revenue grew 60% in 6 months post-engagement.', 'name' => 'Nicole Foster', 'role' => 'Founder, Elevate HR', 'service' => 'VIP Day', 'result' => '+60% revenue in 6 months'],
                    ['quote' => 'Finally understand my numbers. The dashboards we built during the VIP Day are now the heartbeat of our weekly team meetings.', 'name' => 'James Liu', 'role' => 'CEO, Meridian Health', 'service' => 'VIP Day', 'result' => 'Data-driven decisions'],
                ] as $t)
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex gap-0.5">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-3.5 h-3.5 text-warm-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="text-xs font-medium text-gray-400">{{ $t['service'] }}</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">"{{ $t['quote'] }}"</p>
                    <div class="flex items-center justify-between border-t border-gray-50 pt-4">
                        <div>
                            <p class="text-sm font-semibold text-navy-900">{{ $t['name'] }}</p>
                            <p class="text-xs text-gray-400">{{ $t['role'] }}</p>
                        </div>
                        <span class="text-xs font-medium bg-warm-50 text-warm-600 px-2 py-0.5 rounded-full">{{ $t['result'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

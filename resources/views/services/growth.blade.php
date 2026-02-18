@extends('layouts.app')

@section('title', 'Growth Audit')
@section('meta_description', 'A comprehensive 2-week business analysis covering revenue, operations, team, and growth levers — with a custom roadmap.')

@section('content')
    <section class="hero-gradient pt-32 pb-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('services') }}" class="text-warm-400 text-sm hover:text-warm-300 mb-4 inline-block">&larr; All Services</a>
            <div class="flex items-center gap-3 mb-4">
                <h1 class="font-serif text-4xl sm:text-5xl text-white">Growth Audit</h1>
                <span class="bg-warm-500 text-white text-xs font-medium px-3 py-1 rounded-full">Most Popular</span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-2xl font-serif text-warm-400">$1,497</span>
                <span class="text-gray-400">/ 2 weeks</span>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="md:col-span-2 space-y-8">
                    <div>
                        <h2 class="font-serif text-2xl text-navy-900 mb-4">The complete picture of your business — and exactly where to go next.</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed">
                            <p>Most business owners know something is off. Revenue has plateaued. The team feels stretched. Growth feels harder than it should. But they can't pinpoint <em>why</em>.</p>
                            <p>The Growth Audit is a systematic review of every growth lever in your business. Over two weeks, I analyze your revenue model, operations, team structure, marketing, and competitive position. You receive a 25-40 page custom roadmap with prioritized recommendations and a clear execution timeline.</p>
                            <p>This isn't a template. Every audit is built from scratch based on your specific business, your specific market, and your specific goals.</p>
                        </div>
                    </div>

                    <div class="gold-line"></div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">What Gets Analyzed</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            @foreach([
                                ['title' => 'Revenue Model', 'desc' => 'Pricing, packaging, upsells, retention, LTV analysis, revenue concentration risk'],
                                ['title' => 'Operations', 'desc' => 'Workflows, bottlenecks, tool stack, automation opportunities, process documentation'],
                                ['title' => 'Team & Leadership', 'desc' => 'Org structure, role clarity, delegation patterns, hiring priorities, culture indicators'],
                                ['title' => 'Marketing & Sales', 'desc' => 'Channel effectiveness, funnel analysis, conversion rates, acquisition cost, positioning'],
                                ['title' => 'Financial Health', 'desc' => 'Margin analysis, cash flow patterns, expense optimization, reinvestment priorities'],
                                ['title' => 'Competitive Position', 'desc' => 'Market positioning, differentiation gaps, competitive threats, untapped opportunities'],
                            ] as $area)
                            <div class="bg-gray-50 rounded-lg p-5">
                                <h4 class="font-semibold text-navy-900 text-sm mb-1">{{ $area['title'] }}</h4>
                                <p class="text-xs text-gray-500 leading-relaxed">{{ $area['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">The Process</h3>
                        <div class="space-y-6">
                            @foreach([
                                ['step' => 'Week 1', 'title' => 'Discovery & Analysis', 'desc' => 'You complete a comprehensive business questionnaire and share relevant data (financials, metrics, team info). I conduct the full diagnostic analysis.'],
                                ['step' => 'Week 2', 'title' => 'Roadmap & Presentation', 'desc' => 'I build your custom growth roadmap with prioritized recommendations. We meet for a 60-minute presentation where I walk you through every finding and recommendation.'],
                            ] as $step)
                            <div class="flex gap-4">
                                <span class="text-warm-400 font-serif text-sm font-bold shrink-0 mt-0.5 bg-warm-50 px-3 py-1 rounded-full">{{ $step['step'] }}</span>
                                <div>
                                    <h4 class="font-semibold text-navy-900 mb-1">{{ $step['title'] }}</h4>
                                    <p class="text-sm text-gray-500 leading-relaxed">{{ $step['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-navy-50 rounded-xl p-6 sticky top-28 border border-warm-200">
                        <span class="text-xs font-medium bg-warm-500 text-white px-2.5 py-1 rounded-full">Most Popular</span>
                        <h3 class="font-semibold text-navy-900 mb-4 mt-3">Growth Audit</h3>
                        <p class="text-3xl font-serif text-navy-900 mb-1">$1,497</p>
                        <p class="text-sm text-gray-400 mb-6">One-time investment</p>
                        <ul class="space-y-3 mb-6">
                            @foreach(['Full business diagnostic', 'Revenue model review', 'Operations assessment', '25-40 page roadmap', '60-min presentation call', '14 days email support'] as $f)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('book.growth') }}" class="block text-center bg-navy-900 text-white text-sm font-medium py-3 rounded-lg hover:bg-navy-800 transition-colors">Book Now</a>
                        <p class="text-xs text-gray-400 text-center mt-3">100% satisfaction guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

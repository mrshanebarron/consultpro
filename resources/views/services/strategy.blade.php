@extends('layouts.app')

@section('title', 'Strategy Session')
@section('meta_description', 'A focused 90-minute deep-dive into your biggest business challenge. Walk away with clarity and a written action plan.')

@section('content')
    <section class="hero-gradient pt-32 pb-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('services') }}" class="text-warm-400 text-sm hover:text-warm-300 mb-4 inline-block">&larr; All Services</a>
            <h1 class="font-serif text-4xl sm:text-5xl text-white mb-4">Strategy Session</h1>
            <div class="flex items-center gap-4">
                <span class="text-2xl font-serif text-warm-400">$297</span>
                <span class="text-gray-400">/ 90 minutes</span>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="md:col-span-2 space-y-8">
                    <div>
                        <h2 class="font-serif text-2xl text-navy-900 mb-4">One session. One problem. One clear path forward.</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed">
                            <p>You know that thing keeping you up at night? The pricing question you can't answer, the team issue you can't resolve, the growth ceiling you can't break through? That's what we tackle.</p>
                            <p>This isn't a vague coaching call. Before we meet, you'll complete a detailed questionnaire so I can come prepared. We spend 90 minutes going deep on your specific challenge, and you walk away with a concrete action plan — not theory, not "things to think about."</p>
                        </div>
                    </div>

                    <div class="gold-line"></div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">How It Works</h3>
                        <div class="space-y-6">
                            @foreach([
                                ['step' => '01', 'title' => 'Book & Questionnaire', 'desc' => 'After booking, you receive a detailed questionnaire. This ensures we hit the ground running — no wasted time on context-setting.'],
                                ['step' => '02', 'title' => 'The Session', 'desc' => '90 minutes of focused problem-solving. I ask the questions you haven\'t thought to ask. We map the problem, identify root causes, and build the solution.'],
                                ['step' => '03', 'title' => 'Action Plan Delivery', 'desc' => 'Within 48 hours, you receive a written action plan with specific steps, timelines, and metrics to track. Plus the full session recording.'],
                                ['step' => '04', 'title' => 'Follow-Up Support', 'desc' => '7 days of email access for questions that come up during implementation. Because the best plans need real-world adjustments.'],
                            ] as $step)
                            <div class="flex gap-4">
                                <span class="text-warm-400 font-serif text-lg font-bold shrink-0 mt-0.5">{{ $step['step'] }}</span>
                                <div>
                                    <h4 class="font-semibold text-navy-900 mb-1">{{ $step['title'] }}</h4>
                                    <p class="text-sm text-gray-500 leading-relaxed">{{ $step['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">Best For</h3>
                        <ul class="grid sm:grid-cols-2 gap-3">
                            @foreach(['Pricing strategy decisions', 'Hiring your first employee', 'Choosing between growth paths', 'Breaking a revenue plateau', 'Navigating a partnership issue', 'Launching a new product or service'] as $item)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="bg-navy-50 rounded-xl p-6 sticky top-28">
                        <h3 class="font-semibold text-navy-900 mb-4">Strategy Session</h3>
                        <p class="text-3xl font-serif text-navy-900 mb-1">$297</p>
                        <p class="text-sm text-gray-400 mb-6">One-time investment</p>
                        <ul class="space-y-3 mb-6">
                            @foreach(['90-minute video call', 'Pre-session questionnaire', 'Session recording', 'Written action plan', '7 days email support'] as $f)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('book.strategy') }}" class="block text-center bg-navy-900 text-white text-sm font-medium py-3 rounded-lg hover:bg-navy-800 transition-colors">Book Now</a>
                        <p class="text-xs text-gray-400 text-center mt-3">100% satisfaction guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

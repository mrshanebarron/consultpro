@extends('layouts.app')

@section('title', 'VIP Day')
@section('meta_description', 'A full-day intensive where we solve your biggest problems and build the systems together. Real-time implementation, not just advice.')

@section('content')
    <section class="hero-gradient pt-32 pb-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('services') }}" class="text-warm-400 text-sm hover:text-warm-300 mb-4 inline-block">&larr; All Services</a>
            <h1 class="font-serif text-4xl sm:text-5xl text-white mb-4">VIP Day</h1>
            <div class="flex items-center gap-4">
                <span class="text-2xl font-serif text-warm-400">$2,997</span>
                <span class="text-gray-400">/ Full day intensive</span>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="md:col-span-2 space-y-8">
                    <div>
                        <h2 class="font-serif text-2xl text-navy-900 mb-4">We don't just talk about it. We build it. Together.</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed">
                            <p>The VIP Day is for business owners who are done with advice and ready for action. In a single, focused day, we identify your biggest operational bottlenecks and solve them — live, in real time.</p>
                            <p>By the end of the day, you'll have documented SOPs, team training materials, and implemented systems that were just ideas that morning. This is the fastest way to transform how your business operates.</p>
                        </div>
                    </div>

                    <div class="gold-line"></div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">A Typical VIP Day</h3>
                        <div class="space-y-4">
                            @foreach([
                                ['time' => '9:00 AM', 'title' => 'Strategic Assessment', 'desc' => 'We review your pre-work, align on priorities, and map the day\'s agenda around maximum impact.'],
                                ['time' => '10:00 AM', 'title' => 'Systems Audit', 'desc' => 'Walk through every system in your business — where things break, where they bottleneck, where they leak money.'],
                                ['time' => '12:00 PM', 'title' => 'Working Lunch', 'desc' => 'Casual strategic conversation. Often where the biggest breakthroughs happen.'],
                                ['time' => '1:00 PM', 'title' => 'Build Phase', 'desc' => 'We write SOPs together, create templates, build dashboards, document processes — real deliverables, not slides.'],
                                ['time' => '3:00 PM', 'title' => 'Team Enablement', 'desc' => 'Create training materials and delegation frameworks so your team can execute without you.'],
                                ['time' => '4:00 PM', 'title' => 'Roadmap & Next Steps', 'desc' => 'Prioritize the next 90 days. Set milestones. Define what success looks like.'],
                            ] as $block)
                            <div class="flex gap-4 items-start">
                                <span class="text-xs font-mono text-warm-500 bg-warm-50 px-2 py-1 rounded shrink-0 mt-0.5">{{ $block['time'] }}</span>
                                <div>
                                    <h4 class="font-semibold text-navy-900 text-sm mb-0.5">{{ $block['title'] }}</h4>
                                    <p class="text-sm text-gray-500 leading-relaxed">{{ $block['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">What You Walk Away With</h3>
                        <div class="grid sm:grid-cols-2 gap-3">
                            @foreach(['Documented SOPs for key processes', 'Team training materials', 'Delegation frameworks', 'Dashboard templates', 'Hiring scorecards', '90-day execution roadmap', 'Full day recording', '30 days of email support'] as $item)
                            <div class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $item }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-navy-50 rounded-xl p-6 sticky top-28">
                        <h3 class="font-semibold text-navy-900 mb-4">VIP Day</h3>
                        <p class="text-3xl font-serif text-navy-900 mb-1">$2,997</p>
                        <p class="text-sm text-gray-400 mb-6">One-time investment</p>
                        <ul class="space-y-3 mb-6">
                            @foreach(['6-hour intensive session', 'Real-time implementation', 'SOPs & templates built', 'Team training materials', 'Full day recording', '30 days email support', 'Follow-up strategy call'] as $f)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('book.vip') }}" class="block text-center bg-navy-900 text-white text-sm font-medium py-3 rounded-lg hover:bg-navy-800 transition-colors">Book Now</a>
                        <p class="text-xs text-gray-400 text-center mt-3">Limited to 2 per month</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

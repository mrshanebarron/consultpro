@extends('layouts.app')

@section('title', 'Operations Review')
@section('meta_description', 'Streamline your delivery, team structure, and internal processes. Build systems that scale without adding headcount.')

@section('content')
    <section class="hero-gradient pt-32 pb-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('services') }}" class="text-warm-400 text-sm hover:text-warm-300 mb-4 inline-block">&larr; All Services</a>
            <h1 class="font-serif text-4xl sm:text-5xl text-white mb-4">Operations Review</h1>
            <div class="flex items-center gap-4">
                <span class="text-2xl font-serif text-warm-400">$4,997</span>
                <span class="text-gray-400">/ 4-week engagement</span>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="md:col-span-2 space-y-8">
                    <div>
                        <h2 class="font-serif text-2xl text-navy-900 mb-4">Your business runs on systems — even the ones you haven't built yet.</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed">
                            <p>Every business has processes. The question is whether they're intentional or accidental. Accidental processes create bottlenecks, frustrated teams, and a founder who can't step away without everything falling apart.</p>
                            <p>The Operations Review maps your entire delivery system, identifies where things break, and builds the infrastructure for scale. Not theory — real SOPs, real workflows, real accountability structures that your team can execute.</p>
                        </div>
                    </div>

                    <div class="gold-line"></div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">The 4-Week Process</h3>
                        <div class="space-y-6">
                            @foreach([
                                ['step' => 'Week 1', 'title' => 'Discovery & Mapping', 'desc' => 'I interview key team members, review your tools and workflows, and map every process from client acquisition to delivery. You\'ll see your business as a system for the first time.'],
                                ['step' => 'Week 2', 'title' => 'Analysis & Diagnosis', 'desc' => 'Identify bottlenecks, redundancies, and single points of failure. Benchmark your operations against best practices for your size and industry.'],
                                ['step' => 'Week 3', 'title' => 'Design & Build', 'desc' => 'Create streamlined workflows, write SOPs for critical processes, and design accountability frameworks. We build the systems together so your team understands them.'],
                                ['step' => 'Week 4', 'title' => 'Implementation & Handoff', 'desc' => 'Roll out new processes with your team. Create training materials. Set up KPIs to track whether the new systems are working. 30 days of email support for questions.'],
                            ] as $step)
                            <div class="flex gap-4">
                                <span class="text-xs font-mono text-warm-500 bg-warm-50 px-2 py-1 rounded shrink-0 mt-0.5">{{ $step['step'] }}</span>
                                <div>
                                    <h4 class="font-semibold text-navy-900 mb-1">{{ $step['title'] }}</h4>
                                    <p class="text-sm text-gray-500 leading-relaxed">{{ $step['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">What Gets Reviewed</h3>
                        <div class="grid sm:grid-cols-2 gap-3">
                            @foreach([
                                'Client onboarding & delivery',
                                'Team structure & role clarity',
                                'Communication workflows',
                                'Project management processes',
                                'Technology stack assessment',
                                'Financial operations & reporting',
                                'Hiring & onboarding systems',
                                'Quality control & feedback loops',
                            ] as $item)
                            <div class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $item }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="font-serif text-xl text-navy-900 mb-4">Best For</h3>
                        <ul class="space-y-3">
                            @foreach([
                                'Businesses growing faster than their processes can handle',
                                'Founders who are the bottleneck in their own company',
                                'Teams using too many tools with too little coordination',
                                'Companies preparing for their next stage of growth',
                            ] as $item)
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
                        <h3 class="font-semibold text-navy-900 mb-4">Operations Review</h3>
                        <p class="text-3xl font-serif text-navy-900 mb-1">$4,997</p>
                        <p class="text-sm text-gray-400 mb-6">4-week engagement</p>
                        <ul class="space-y-3 mb-6">
                            @foreach(['Full process mapping', 'Team interviews & assessment', 'Written SOPs & workflows', 'Technology audit', 'Training materials', 'KPI dashboard setup', 'Implementation support', '30 days email access'] as $f)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('book.vip') }}" class="block text-center bg-navy-900 text-white text-sm font-medium py-3 rounded-lg hover:bg-navy-800 transition-colors">Book Now</a>
                        <p class="text-xs text-gray-400 text-center mt-3">Limited to 3 clients per quarter</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Services')
@section('meta_description', 'Strategy sessions, growth audits, and VIP intensives for business owners ready to scale.')

@section('content')
    {{-- Hero --}}
    <section class="hero-gradient py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-warm-400 text-sm font-medium tracking-wider uppercase mb-4">Services</p>
                <h1 class="font-serif text-4xl sm:text-5xl text-white leading-tight mb-6">The right engagement for where you are right now.</h1>
                <p class="text-gray-300 text-lg">Whether you need a quick strategy session or a full-day intensive, every engagement is designed to produce measurable results.</p>
            </div>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-20">

                {{-- Strategy Session --}}
                <div class="grid md:grid-cols-2 gap-12 items-center" id="strategy">
                    <div>
                        <div class="aspect-video rounded-2xl overflow-hidden bg-navy-50">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=700&q=80" alt="Strategy Session" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-10 h-10 bg-warm-50 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                            </span>
                            <span class="text-xs font-medium bg-warm-50 text-warm-600 px-2.5 py-1 rounded-full">90 Minutes</span>
                        </div>
                        <h2 class="font-serif text-3xl text-navy-900 mb-2">Strategy Session</h2>
                        <p class="text-2xl font-serif text-warm-500 mb-4">$297</p>
                        <p class="text-gray-500 leading-relaxed mb-6">A focused, high-impact session where we tackle your biggest business challenge head-on. You come with one problem — you leave with a clear action plan.</p>
                        <ul class="space-y-3 mb-8">
                            @foreach(['Pre-session questionnaire to maximize our time', '90-minute deep-dive video call', 'Recorded session for your reference', 'Written action plan within 48 hours', '7 days of email follow-up'] as $f)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                        <div class="flex gap-4">
                            <a href="{{ route('book.strategy') }}" class="bg-navy-900 text-white text-sm font-medium px-6 py-3 rounded-lg hover:bg-navy-800 transition-colors">Book a Strategy Session</a>
                            <a href="{{ route('services.strategy') }}" class="text-sm font-medium text-warm-600 hover:text-warm-500 flex items-center gap-1">Full details &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="gold-line"></div>

                {{-- Growth Audit --}}
                <div class="grid md:grid-cols-2 gap-12 items-center" id="growth">
                    <div class="md:order-2">
                        <div class="aspect-video rounded-2xl overflow-hidden bg-navy-50">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=700&q=80" alt="Growth Audit" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:order-1">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-10 h-10 bg-warm-50 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg>
                            </span>
                            <span class="text-xs font-medium bg-warm-50 text-warm-600 px-2.5 py-1 rounded-full">2 Weeks</span>
                            <span class="text-xs font-medium bg-navy-900 text-white px-2.5 py-1 rounded-full">Most Popular</span>
                        </div>
                        <h2 class="font-serif text-3xl text-navy-900 mb-2">Growth Audit</h2>
                        <p class="text-2xl font-serif text-warm-500 mb-4">$1,497</p>
                        <p class="text-gray-500 leading-relaxed mb-6">A comprehensive analysis of your entire business — revenue model, operations, team structure, and growth levers. You get a detailed roadmap with prioritized next steps.</p>
                        <ul class="space-y-3 mb-8">
                            @foreach(['Full business diagnostic assessment', 'Revenue model and pricing analysis', 'Operations and workflow review', 'Team structure evaluation', 'Custom growth roadmap (25-40 pages)', '60-minute presentation call'] as $f)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                        <div class="flex gap-4">
                            <a href="{{ route('book.growth') }}" class="bg-navy-900 text-white text-sm font-medium px-6 py-3 rounded-lg hover:bg-navy-800 transition-colors">Book a Growth Audit</a>
                            <a href="{{ route('services.growth') }}" class="text-sm font-medium text-warm-600 hover:text-warm-500 flex items-center gap-1">Full details &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="gold-line"></div>

                {{-- VIP Day --}}
                <div class="grid md:grid-cols-2 gap-12 items-center" id="vip">
                    <div>
                        <div class="aspect-video rounded-2xl overflow-hidden bg-navy-50">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&q=80" alt="VIP Day" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="w-10 h-10 bg-warm-50 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 6.51 6.51 0 009 4.572a6.516 6.516 0 003.862-1.141 6.516 6.516 0 005.5 1.783z"/></svg>
                            </span>
                            <span class="text-xs font-medium bg-warm-50 text-warm-600 px-2.5 py-1 rounded-full">Full Day</span>
                        </div>
                        <h2 class="font-serif text-3xl text-navy-900 mb-2">VIP Day</h2>
                        <p class="text-2xl font-serif text-warm-500 mb-4">$2,997</p>
                        <p class="text-gray-500 leading-relaxed mb-6">A full-day intensive where we don't just plan — we build. I work alongside you to solve your biggest problems and create the systems your business needs to scale.</p>
                        <ul class="space-y-3 mb-8">
                            @foreach(['6-hour intensive working session', 'Real-time implementation together', 'SOPs and templates built live', 'Team training materials included', '30 days of email support', 'One follow-up strategy call'] as $f)
                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-warm-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>
                        <div class="flex gap-4">
                            <a href="{{ route('book.vip') }}" class="bg-navy-900 text-white text-sm font-medium px-6 py-3 rounded-lg hover:bg-navy-800 transition-colors">Book a VIP Day</a>
                            <a href="{{ route('services.vip') }}" class="text-sm font-medium text-warm-600 hover:text-warm-500 flex items-center gap-1">Full details &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Comparison Table --}}
    <section class="py-16 bg-navy-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-serif text-2xl text-navy-900 text-center mb-10">Compare Engagements</h2>
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-gray-100">
                            <th class="text-left py-4 px-6 font-medium text-gray-400 text-xs uppercase tracking-wider">Feature</th>
                            <th class="text-center py-4 px-4 font-medium text-gray-400 text-xs uppercase tracking-wider">Strategy</th>
                            <th class="text-center py-4 px-4 font-medium text-gray-400 text-xs uppercase tracking-wider bg-warm-50/50">Growth</th>
                            <th class="text-center py-4 px-4 font-medium text-gray-400 text-xs uppercase tracking-wider">VIP Day</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                            ['1-on-1 access', true, true, true],
                            ['Written action plan', true, true, true],
                            ['Business diagnostic', false, true, true],
                            ['Revenue analysis', false, true, true],
                            ['Operations review', false, true, true],
                            ['Live implementation', false, false, true],
                            ['SOPs & templates', false, false, true],
                            ['Team training', false, false, true],
                            ['Post-engagement support', '7 days', '14 days', '30 days'],
                        ] as $row)
                        <tr class="border-b border-gray-50">
                            <td class="py-3 px-6 text-gray-700">{{ $row[0] }}</td>
                            @foreach([1, 2, 3] as $col)
                            <td class="py-3 px-4 text-center {{ $col === 2 ? 'bg-warm-50/30' : '' }}">
                                @if(is_bool($row[$col]))
                                    @if($row[$col])
                                        <svg class="w-4 h-4 text-warm-500 mx-auto" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    @else
                                        <span class="text-gray-300">&mdash;</span>
                                    @endif
                                @else
                                    <span class="text-xs font-medium text-gray-600">{{ $row[$col] }}</span>
                                @endif
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="bg-gray-50">
                            <td class="py-4 px-6 font-semibold text-navy-900">Investment</td>
                            <td class="py-4 px-4 text-center font-serif text-lg text-navy-900">$297</td>
                            <td class="py-4 px-4 text-center font-serif text-lg text-navy-900 bg-warm-50/50">$1,497</td>
                            <td class="py-4 px-4 text-center font-serif text-lg text-navy-900">$2,997</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

    {{-- Not Sure --}}
    <section class="py-16">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-serif text-2xl text-navy-900 mb-4">Not sure which is right for you?</h2>
            <p class="text-gray-500 mb-8">Book a free 30-minute discovery call. We'll talk through where your business is today and I'll recommend the best path forward — no pressure, no pitch.</p>
            <a href="{{ route('book') }}" class="inline-block bg-warm-500 hover:bg-warm-400 text-white font-medium px-8 py-3.5 rounded-lg transition-colors text-sm">Book a Free Discovery Call</a>
        </div>
    </section>
@endsection

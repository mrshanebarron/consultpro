@extends('layouts.app')

@section('title', 'Book a Growth Audit')
@section('meta_description', 'Book your comprehensive growth audit — full business diagnostic with a custom roadmap delivered in 2 weeks. $1,497.')
@section('hide_cta', true)

@section('content')
    <section class="py-20 sm:py-28">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('book') }}" class="text-warm-500 text-sm hover:text-warm-400 mb-6 inline-block">&larr; All Booking Options</a>

            <div class="grid md:grid-cols-5 gap-12">
                <div class="md:col-span-3">
                    <span class="text-xs font-medium bg-warm-500 text-white px-2.5 py-1 rounded-full">Most Popular</span>
                    <h1 class="font-serif text-3xl sm:text-4xl text-navy-900 mt-3 mb-2">Book Your Growth Audit</h1>
                    <p class="text-gray-500 mb-8">Select a kickoff date. You'll receive a detailed intake questionnaire immediately — the sooner you complete it, the sooner we start.</p>

                    {{-- Timeline --}}
                    <div class="bg-navy-50 rounded-xl p-6 mb-8">
                        <h3 class="text-sm font-semibold text-navy-900 mb-4">Your 2-Week Timeline</h3>
                        <div class="space-y-4">
                            @foreach([
                                ['day' => 'Day 1', 'event' => 'Kickoff call (60 min) — we align on priorities and scope'],
                                ['day' => 'Days 2-5', 'event' => 'I analyze your revenue model, pricing, and customer metrics'],
                                ['day' => 'Days 6-9', 'event' => 'Operations, team structure, and process deep-dive'],
                                ['day' => 'Day 10', 'event' => 'Draft roadmap preparation and competitive analysis'],
                                ['day' => 'Days 11-12', 'event' => 'Final roadmap assembly (25-40 pages)'],
                                ['day' => 'Day 14', 'event' => 'Presentation call (60 min) — full walkthrough + Q&A'],
                            ] as $step)
                            <div class="flex gap-4 items-start">
                                <span class="text-xs font-bold text-warm-500 bg-warm-50 rounded px-2 py-1 shrink-0 w-20 text-center">{{ $step['day'] }}</span>
                                <p class="text-sm text-gray-600">{{ $step['event'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Kickoff Date Selection --}}
                    <div class="border border-gray-200 rounded-xl p-6">
                        <h3 class="text-sm font-semibold text-navy-900 mb-4">Select Kickoff Week</h3>
                        <div class="space-y-3" x-data="{ selected: 1 }">
                            @foreach([
                                ['week' => 'Feb 24 – Mar 6', 'slots' => '2 spots left'],
                                ['week' => 'Mar 3 – Mar 14', 'slots' => '3 spots left'],
                                ['week' => 'Mar 10 – Mar 21', 'slots' => 'Available'],
                                ['week' => 'Mar 17 – Mar 28', 'slots' => 'Available'],
                            ] as $i => $w)
                            <button @click="selected = {{ $i }}"
                                    class="w-full border rounded-lg px-4 py-3 flex items-center justify-between transition-colors text-left"
                                    :class="selected === {{ $i }} ? 'border-warm-400 bg-warm-50' : 'border-gray-200 hover:border-gray-300'">
                                <span class="text-sm font-medium" :class="selected === {{ $i }} ? 'text-warm-600' : 'text-gray-700'">{{ $w['week'] }}</span>
                                <span class="text-xs" :class="selected === {{ $i }} ? 'text-warm-500' : 'text-gray-400'">{{ $w['slots'] }}</span>
                            </button>
                            @endforeach
                        </div>
                    </div>

                    <button class="w-full mt-6 bg-navy-900 text-white text-sm font-medium py-3.5 rounded-lg hover:bg-navy-800 transition-colors">
                        Confirm Booking — $1,497
                    </button>
                    <p class="text-xs text-gray-400 text-center mt-3">Secure payment via Stripe. Intake questionnaire sent immediately.</p>
                </div>

                <div class="md:col-span-2">
                    <div class="bg-navy-50 rounded-xl p-6 sticky top-28">
                        <h3 class="font-semibold text-navy-900 mb-4">Growth Audit</h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                                <span class="text-gray-600">2-week engagement</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                                <span class="text-gray-600">$1,497 one-time</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                <span class="text-gray-600">25-40 page roadmap</span>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 mt-5 pt-5">
                            <h4 class="text-xs font-medium text-gray-400 uppercase tracking-wider mb-3">Includes</h4>
                            <ul class="space-y-2">
                                @foreach(['Full business diagnostic', 'Revenue model analysis', 'Operations review', 'Team assessment', 'Custom growth roadmap', '60-min kickoff call', '60-min presentation call', '14 days email support'] as $f)
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-3.5 h-3.5 text-warm-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Book a Strategy Session')
@section('meta_description', 'Book your 90-minute strategy session. One problem, one plan, one clear path forward — $297.')
@section('hide_cta', true)

@section('content')
    <section class="py-20 sm:py-28">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('book') }}" class="text-warm-500 text-sm hover:text-warm-400 mb-6 inline-block">&larr; All Booking Options</a>

            <div class="grid md:grid-cols-5 gap-12">
                <div class="md:col-span-3">
                    <h1 class="font-serif text-3xl sm:text-4xl text-navy-900 mb-2">Book Your Strategy Session</h1>
                    <p class="text-gray-500 mb-8">Choose a date and time that works for you. You'll receive a confirmation email with a pre-session questionnaire immediately after booking.</p>

                    {{-- Calendar Placeholder --}}
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <div class="bg-navy-900 text-white px-6 py-4 flex items-center justify-between">
                            <button class="text-gray-400 hover:text-white transition-colors">&larr;</button>
                            <span class="font-medium text-sm">February 2026</span>
                            <button class="text-gray-400 hover:text-white transition-colors">&rarr;</button>
                        </div>
                        <div class="p-4">
                            <div class="grid grid-cols-7 gap-1 text-center text-xs text-gray-400 mb-2">
                                @foreach(['Mon','Tue','Wed','Thu','Fri','Sat','Sun'] as $day)
                                    <span class="py-1">{{ $day }}</span>
                                @endforeach
                            </div>
                            <div class="grid grid-cols-7 gap-1 text-center text-sm" x-data="{ selected: 19 }">
                                @for($i = 0; $i < 6; $i++) <span></span> @endfor
                                @for($d = 1; $d <= 28; $d++)
                                    @php $available = !in_array($d, [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]) && !in_array(($d + 6) % 7, [5, 6]); @endphp
                                    <button
                                        @if($available) @click="selected = {{ $d }}" @endif
                                        class="py-2 rounded-lg text-sm transition-colors {{ $available ? '' : 'text-gray-300 cursor-not-allowed' }}"
                                        :class="selected === {{ $d }} ? 'bg-warm-500 text-white font-medium' : '{{ $available ? 'hover:bg-gray-100 text-gray-700' : '' }}'"
                                    >{{ $d }}</button>
                                @endfor
                            </div>
                        </div>
                        <div class="border-t border-gray-100 px-6 py-4">
                            <p class="text-xs text-gray-400 mb-3">Available times:</p>
                            <div class="flex flex-wrap gap-2" x-data="{ time: '10:00' }">
                                @foreach(['9:00 AM', '10:00 AM', '11:00 AM', '2:00 PM', '3:00 PM', '4:00 PM'] as $time)
                                <button
                                    @click="time = '{{ $time }}'"
                                    class="border rounded-lg px-3 py-2 text-xs transition-colors"
                                    :class="time === '{{ $time }}' ? 'border-warm-400 bg-warm-50 text-warm-600 font-medium' : 'border-gray-200 text-gray-600 hover:border-gray-300'"
                                >{{ $time }}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <button class="w-full mt-6 bg-navy-900 text-white text-sm font-medium py-3.5 rounded-lg hover:bg-navy-800 transition-colors">
                        Confirm Booking — $297
                    </button>
                    <p class="text-xs text-gray-400 text-center mt-3">100% satisfaction guarantee. Secure payment via Stripe.</p>
                </div>

                <div class="md:col-span-2">
                    <div class="bg-navy-50 rounded-xl p-6 sticky top-28">
                        <h3 class="font-semibold text-navy-900 mb-4">Strategy Session</h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-gray-600">90 minutes</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                                <span class="text-gray-600">$297 one-time</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                                <span class="text-gray-600">Satisfaction guarantee</span>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 mt-5 pt-5">
                            <h4 class="text-xs font-medium text-gray-400 uppercase tracking-wider mb-3">Includes</h4>
                            <ul class="space-y-2">
                                @foreach(['Pre-session questionnaire', '90-min video call', 'Session recording', 'Written action plan', '7 days email support'] as $f)
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

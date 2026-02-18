@extends('layouts.app')

@section('title', 'Book a VIP Day')
@section('meta_description', 'Book your VIP Day intensive — 6 hours of focused implementation, SOPs built live, 30 days of support. $2,997.')
@section('hide_cta', true)

@section('content')
    <section class="py-20 sm:py-28">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('book') }}" class="text-warm-500 text-sm hover:text-warm-400 mb-6 inline-block">&larr; All Booking Options</a>

            <div class="grid md:grid-cols-5 gap-12">
                <div class="md:col-span-3">
                    <h1 class="font-serif text-3xl sm:text-4xl text-navy-900 mb-2">Book Your VIP Day</h1>
                    <p class="text-gray-500 mb-8">A full day of intensive, hands-on work. We don't just plan — we build the systems together. Limited to 2 VIP Days per month.</p>

                    {{-- What to Expect --}}
                    <div class="bg-navy-50 rounded-xl p-6 mb-8">
                        <h3 class="text-sm font-semibold text-navy-900 mb-4">Your VIP Day Agenda</h3>
                        <div class="space-y-4">
                            @foreach([
                                ['time' => '9:00 AM', 'event' => 'Kickoff — align on priorities, set the agenda for the day'],
                                ['time' => '9:30 AM', 'event' => 'Deep-dive #1 — tackle your biggest operational bottleneck'],
                                ['time' => '11:00 AM', 'event' => 'Build session — create SOPs, templates, or dashboards live'],
                                ['time' => '12:00 PM', 'event' => 'Break — recharge while I prepare afternoon materials'],
                                ['time' => '1:00 PM', 'event' => 'Deep-dive #2 — revenue strategy or team structure'],
                                ['time' => '2:30 PM', 'event' => 'Build session — implementation, documentation, training materials'],
                                ['time' => '4:00 PM', 'event' => 'Wrap-up — review everything built, set 30-day action items'],
                            ] as $slot)
                            <div class="flex gap-4 items-start">
                                <span class="text-xs font-bold text-warm-500 bg-warm-50 rounded px-2 py-1 shrink-0 w-20 text-center">{{ $slot['time'] }}</span>
                                <p class="text-sm text-gray-600">{{ $slot['event'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Date Selection --}}
                    <div class="border border-gray-200 rounded-xl p-6">
                        <h3 class="text-sm font-semibold text-navy-900 mb-2">Select Your VIP Day</h3>
                        <p class="text-xs text-gray-400 mb-4">Limited availability — 2 dates per month</p>
                        <div class="space-y-3" x-data="{ selected: 0 }">
                            @foreach([
                                ['date' => 'Thursday, Feb 27', 'note' => '1 spot left'],
                                ['date' => 'Wednesday, Mar 5', 'note' => 'Available'],
                                ['date' => 'Thursday, Mar 13', 'note' => 'Available'],
                                ['date' => 'Wednesday, Mar 19', 'note' => 'Available'],
                            ] as $i => $d)
                            <button @click="selected = {{ $i }}"
                                    class="w-full border rounded-lg px-4 py-3 flex items-center justify-between transition-colors text-left"
                                    :class="selected === {{ $i }} ? 'border-warm-400 bg-warm-50' : 'border-gray-200 hover:border-gray-300'">
                                <span class="text-sm font-medium" :class="selected === {{ $i }} ? 'text-warm-600' : 'text-gray-700'">{{ $d['date'] }}</span>
                                <span class="text-xs" :class="selected === {{ $i }} ? 'text-warm-500' : 'text-gray-400'">{{ $d['note'] }}</span>
                            </button>
                            @endforeach
                        </div>
                    </div>

                    <button class="w-full mt-6 bg-navy-900 text-white text-sm font-medium py-3.5 rounded-lg hover:bg-navy-800 transition-colors">
                        Confirm Booking — $2,997
                    </button>
                    <p class="text-xs text-gray-400 text-center mt-3">Secure payment via Stripe. Prep questionnaire sent immediately.</p>
                </div>

                <div class="md:col-span-2">
                    <div class="bg-navy-50 rounded-xl p-6 sticky top-28">
                        <h3 class="font-semibold text-navy-900 mb-4">VIP Day</h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-gray-600">6-hour intensive</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                                <span class="text-gray-600">$2,997 one-time</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                                <span class="text-gray-600">2 per month max</span>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 mt-5 pt-5">
                            <h4 class="text-xs font-medium text-gray-400 uppercase tracking-wider mb-3">Includes</h4>
                            <ul class="space-y-2">
                                @foreach(['6-hour intensive session', 'Real-time implementation', 'SOPs & templates built live', 'Team training materials', 'Session recordings', 'Follow-up strategy call', '30 days email support'] as $f)
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

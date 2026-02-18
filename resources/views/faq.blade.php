@extends('layouts.app')

@section('title', 'FAQ')
@section('meta_description', 'Frequently asked questions about our consulting services, pricing, and what to expect.')

@section('content')
    {{-- Hero --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-serif text-4xl sm:text-5xl text-navy-900 mb-4">Frequently Asked Questions</h1>
            <p class="text-gray-500 text-lg">Everything you need to know before we get started.</p>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="pb-20 sm:pb-28">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ open: null }">
            <div class="space-y-4">
                @foreach([
                    ['q' => 'What kind of businesses do you work with?', 'a' => 'I work primarily with service-based businesses and B2B companies doing between $500K and $10M in annual revenue. My sweet spot is business owners who\'ve proven the concept and are ready to scale — but feel stuck at a plateau. That said, I\'ve worked with everyone from solopreneurs to companies with 100+ employees.'],
                    ['q' => 'How is this different from other consultants?', 'a' => 'Three things: First, I\'ve actually built and scaled businesses myself — $8M in revenue, 40 employees. I\'m not giving you theory from a textbook. Second, I focus on implementation, not just advice. Especially with the VIP Day, we build the actual systems together. Third, every recommendation is tied to measurable outcomes. If we can\'t track it, we don\'t do it.'],
                    ['q' => 'What happens during the free discovery call?', 'a' => 'It\'s a genuine 30-minute conversation — no pitch, no pressure. We\'ll talk about where your business is today, what\'s holding you back, and what you\'re trying to achieve. By the end, I\'ll give you my honest assessment of whether I can help, which engagement makes sense, or if you\'d be better off doing something else entirely.'],
                    ['q' => 'How quickly will I see results?', 'a' => 'It depends on the engagement. Strategy Session clients often implement within 2 weeks and see results within 30-60 days. Growth Audit clients typically see meaningful movement within 90 days. VIP Day clients walk out with finished systems that work immediately. The common thread: every engagement ends with actionable next steps, not vague advice.'],
                    ['q' => 'Do you offer ongoing retainer engagements?', 'a' => 'Not currently. I find that most business owners get the best ROI from focused, intensive engagements rather than monthly retainers. That said, many clients come back for additional sessions as their business evolves — about 72% of my clients return within 12 months.'],
                    ['q' => 'What if I\'m not sure which service is right?', 'a' => 'That\'s what the free discovery call is for. As a general guide: if you have one specific challenge, start with the Strategy Session ($297). If you need a full business assessment, go with the Growth Audit ($1,497). If you need to build systems and are ready to implement, the VIP Day ($2,997) is the way to go.'],
                    ['q' => 'Do you work with businesses outside the US?', 'a' => 'Yes. While most of my clients are US-based, I work with business owners worldwide. All sessions are conducted via video call, so geography isn\'t a barrier. I\'ve worked with clients in Canada, UK, Australia, and several other countries.'],
                    ['q' => 'What\'s your refund policy?', 'a' => 'I offer a satisfaction guarantee on the Strategy Session — if you don\'t walk away with actionable insights, I\'ll refund your investment in full. For the Growth Audit and VIP Day, due to the significant preparation involved, refunds aren\'t available after work begins. I\'ve never had a client request one.'],
                    ['q' => 'How do I prepare for a session?', 'a' => 'After booking, you\'ll receive a pre-session questionnaire. The more thorough your answers, the more focused our time together will be. I also ask clients to bring their last 12 months of revenue data, a list of their top 3 challenges, and any goals they\'re working toward. I review everything before we meet.'],
                ] as $i => $faq)
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button @click="open = open === {{ $i }} ? null : {{ $i }}" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
                        <span class="text-sm font-semibold text-navy-900 pr-4">{{ $faq['q'] }}</span>
                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0 transition-transform duration-200" :class="{ 'rotate-180': open === {{ $i }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                    </button>
                    <div x-show="open === {{ $i }}" x-transition.duration.200ms>
                        <div class="px-6 pb-5 text-sm text-gray-500 leading-relaxed">{{ $faq['a'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-500 mb-4">Still have questions?</p>
                <a href="{{ route('contact') }}" class="text-sm font-medium text-warm-600 hover:text-warm-500">Get in touch &rarr;</a>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="hero-gradient pt-32 pb-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-warm-400 text-sm font-medium tracking-wider uppercase mb-4">About</p>
            <h1 class="font-serif text-4xl sm:text-5xl text-white">The person behind<br>the strategy.</h1>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-start">
                <div class="sticky top-28">
                    <div class="aspect-[3/4] rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="Consultant" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="space-y-6 text-gray-600 leading-relaxed">
                    <h2 class="font-serif text-3xl text-navy-900">I didn't start in consulting.</h2>
                    <p>I started in the trenches. At 26, I launched my first company with $5,000 and a laptop. No investors, no safety net, no MBA — just a conviction that I could build something that mattered.</p>
                    <p>Over the next decade, I grew that company from zero to $8M in annual revenue. Along the way, I made every mistake in the book: hired too fast, scaled too early, burned through cash on marketing that didn't work, and nearly lost the business twice.</p>
                    <p>But I also learned what actually drives growth. Not theory from a textbook — real, battle-tested strategies that work in the messy reality of running a business.</p>

                    <div class="gold-line my-8"></div>

                    <h3 class="font-serif text-2xl text-navy-900">Why I Consult</h3>
                    <p>After successfully exiting my company in 2018, I realized the thing I loved most wasn't running the business — it was solving the problems. The moment a CEO describes a challenge and I can see the path through it? That's what lights me up.</p>
                    <p>I've now worked with over 200 business owners across industries — from e-commerce founders doing $500K to service companies pushing past $5M. The problems are always different, but the principles are always the same.</p>

                    <div class="bg-warm-50 rounded-xl p-6 border border-warm-100 mt-8">
                        <h4 class="font-semibold text-navy-900 mb-3">My Approach</h4>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-start gap-2"><svg class="w-4 h-4 text-warm-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <span><strong>Direct.</strong> I'll tell you what you need to hear, not what you want to hear.</span></li>
                            <li class="flex items-start gap-2"><svg class="w-4 h-4 text-warm-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <span><strong>Practical.</strong> Every recommendation comes with an implementation plan.</span></li>
                            <li class="flex items-start gap-2"><svg class="w-4 h-4 text-warm-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <span><strong>Results-focused.</strong> If I can't help you, I'll tell you upfront.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

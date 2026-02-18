@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Get in touch with ConsultPro. Send us a message or book a free discovery call.')

@section('content')
    {{-- Hero --}}
    <section class="py-20 sm:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16">
                <div>
                    <p class="text-warm-500 text-sm font-medium tracking-wider uppercase mb-4">Contact</p>
                    <h1 class="font-serif text-4xl sm:text-5xl text-navy-900 leading-tight mb-6">Let's start a conversation.</h1>
                    <p class="text-gray-500 leading-relaxed mb-8">Have a question about services, want to discuss your business challenge, or just want to say hello? Send a message and I'll get back to you within 24 hours.</p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-warm-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-navy-900">Email</p>
                                <p class="text-sm text-gray-500">hello@consultpro.com</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-warm-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-navy-900">Location</p>
                                <p class="text-sm text-gray-500">Lawrenceville, GA — working with clients nationwide</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-warm-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-warm-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-navy-900">Response Time</p>
                                <p class="text-sm text-gray-500">Typically within 24 hours, Mon–Fri</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form --}}
                <div>
                    @if(session('success'))
                        <div class="bg-sage-50 border border-sage-500/20 text-sage-600 rounded-xl p-6 mb-6">
                            <p class="font-semibold mb-1">Message sent!</p>
                            <p class="text-sm">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="bg-gray-50 rounded-2xl p-8 space-y-5">
                        @csrf

                        <div>
                            <label for="name" class="text-sm font-medium text-navy-900 mb-1 block">Name <span class="text-warm-500">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-warm-400/20 focus:border-warm-400 transition-colors">
                            @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="email" class="text-sm font-medium text-navy-900 mb-1 block">Email <span class="text-warm-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-warm-400/20 focus:border-warm-400 transition-colors">
                            @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="phone" class="text-sm font-medium text-navy-900 mb-1 block">Phone <span class="text-gray-400 font-normal">(optional)</span></label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                   class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-warm-400/20 focus:border-warm-400 transition-colors">
                        </div>

                        <div>
                            <label for="service" class="text-sm font-medium text-navy-900 mb-1 block">Interested In</label>
                            <select id="service" name="service"
                                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-warm-400/20 focus:border-warm-400 transition-colors">
                                <option value="">Select a service (optional)</option>
                                <option value="strategy" {{ old('service') === 'strategy' ? 'selected' : '' }}>Strategy Session — $297</option>
                                <option value="growth" {{ old('service') === 'growth' ? 'selected' : '' }}>Growth Audit — $1,497</option>
                                <option value="vip" {{ old('service') === 'vip' ? 'selected' : '' }}>VIP Day — $2,997</option>
                                <option value="unsure" {{ old('service') === 'unsure' ? 'selected' : '' }}>Not sure yet</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="text-sm font-medium text-navy-900 mb-1 block">Message <span class="text-warm-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-warm-400/20 focus:border-warm-400 transition-colors resize-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="w-full bg-navy-900 text-white text-sm font-medium py-3.5 rounded-lg hover:bg-navy-800 transition-colors">
                            Send Message
                        </button>
                        <p class="text-xs text-gray-400 text-center">Or <a href="{{ route('book') }}" class="text-warm-500 hover:underline">book a free discovery call</a> instead.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

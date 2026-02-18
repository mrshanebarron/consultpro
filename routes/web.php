<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/services/strategy', 'services.strategy')->name('services.strategy');
Route::view('/services/growth', 'services.growth')->name('services.growth');
Route::view('/services/vip-day', 'services.vip')->name('services.vip');
Route::view('/testimonials', 'testimonials')->name('testimonials');
Route::view('/faq', 'faq')->name('faq');
Route::view('/blog', 'blog')->name('blog');

Route::get('/contact', fn() => view('contact'))->name('contact');
Route::post('/contact', function () {
    request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string|max:30',
        'service' => 'nullable|string',
        'message' => 'required|string|min:10|max:5000',
    ]);

    return back()->with('success', 'Thank you! Your message has been received. We\'ll be in touch within 24 hours.');
})->name('contact.submit');

Route::view('/book', 'book')->name('book');
Route::view('/book/strategy-session', 'book.strategy-session')->name('book.strategy');
Route::view('/book/growth-audit', 'book.growth-audit')->name('book.growth');
Route::view('/book/vip-day', 'book.vip-day')->name('book.vip');

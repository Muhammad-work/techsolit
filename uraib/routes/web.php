<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/e-book', function () {
    return view('e-book');
})->name('e-book');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/logo-design', function () {
    return view('services.logo');
})->name('logo');

Route::get('/socail', function () {
    return view('services.socail');
})->name('socail');

Route::get('/presentation', function () {
    return view('services.Presentation');
})->name('Presentation');

Route::get('/cover-design', function () {
    return view('services.e-book');
})->name('cover-design');

Route::get('/ui-ux', function () {
    return view('services.ui');
})->name('ui');

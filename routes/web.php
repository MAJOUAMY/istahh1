<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
Route::get('/admin',function(){
    return Inertia::render('Admin');
});
Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/module', function () {
    return view('module');
})->name("module");

Route::get('/evenements', function () {
    return view('events');
})->name("events");
Route::get('/blog', function () {
    return view('blog');
})->name("blog");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/faq', function () {
    return view('faq');
})->name("faq");




// formation


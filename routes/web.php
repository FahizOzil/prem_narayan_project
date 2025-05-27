<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

// get routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('aboutAuthor');
})->name('about-us');

Route::get('book' , function (){
    return view('book');
})->name('book');

Route::get('/contact', function () {
    return view('contact');
})->name('contact-us');

Route::get('/buy', function () {
    return view('buynow');
})->name('buy');


// post routes
Route::post('/contact', [ContactController::class , 'sendEmail'])->name('contact.submit');

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');

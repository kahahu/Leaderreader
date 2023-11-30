<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.layout');
});
//about page
Route::get('about', function () {
    return view('frontend.about');
});
//contact page
Route::get('contact', function () {
    return view('frontend.contact');
});

  //home page
Route::get('/', function () {
    return view('frontend.home');
});
//about page
Route::get('about', function () {
    return view('frontend.about');
});
//contact page
Route::get('contact', function () {
    return view('frontend.contact');
});
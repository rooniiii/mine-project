<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('Home');
});

Route::get('contact', function () {
    return view('Contact_US');
});

Route::get('property', function () {
    return view('properties');
});

Route::get('PD', function () {
    return view('property_datails');
});

Route::get('waheed', function () {
    return view('waheed');
});
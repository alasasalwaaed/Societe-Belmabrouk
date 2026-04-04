<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); })->name('home');
Route::get('/about', function () {
    return view('about'); })->name('about');
Route::get('/services', function () {
    return view('services'); })->name('services');
Route::get('/models', function () {
    return view('models'); })->name('models');
Route::get('/testimonial', function () {
    return view('testimonial'); })->name('testimonial');
Route::get('/contact', function () {
    return view('contact'); })->name('contact');
Route::get('/404', function () {
    return view('404'); })->name('page404');
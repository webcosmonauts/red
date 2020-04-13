<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'pages.homepage')->name('homepage');
Route::view('projects', 'pages.projects')->name('projects');
Route::view('partners', 'pages.partners')->name('partners');
Route::view('news', 'pages.news')->name('news');
Route::view('single-news', 'pages.single-news')->name('news.single');
Route::view('jobs', 'pages.jobs')->name('jobs');
Route::view('contact', 'pages.contact')->name('contact');
Route::view('contact/order', 'pages.contact-order')->name('contact-order');
Route::view('contact/partnership', 'pages.contact-partnership')->name('contact-partnership');
Route::view('about', 'pages.about')->name('about');

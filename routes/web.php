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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index.html', function () {
    return view('index');
});

Route::get('/404.html', function () {
    return view('404');
});

Route::get('/about.html', function () {
    return view('about');
});
Route::get('/comingsoon.html', function () {
    return view('comingsoon');
});

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/contact4.html', function () {
    return view('contact4');
});

Route::get('/copyright1.html', function () {
    return view('copyright1');
});

Route::get('/event-single-full.html', function () {
    return view('event-single-full');
});

Route::get('/event-single-left.html', function () {
    return view('index');
});

Route::get('/event-single-right.html', function () {
    return view('event-single-right');
});

Route::get('/events-full.html', function () {
    return view('events-full');
});

Route::get('/events-left.html', function () {
    return view('events-left');
});

Route::get('/events-right.html', function () {
    return view('events-right');
});

Route::get('/faq.html', function () {
    return view('faq');
});

Route::get('/faq2.html', function () {
    return view('faq2');
});

Route::get('/footer1.html', function () {
    return view('footer1');
});

Route::get('/gallery-image-4-cols-fullwidth.html', function () {
    return view('gallery-image-4-cols-fullwidth');
});

Route::get('/gallery-title-4-cols-fullwidth.html', function () {
    return view('gallery-title-4-cols-fullwidth');
});

Route::get('/gallery-title.html', function () {
    return view('gallery-title');
});

Route::get('/index_static.html', function () {
    return view('index_static');
});

Route::get('/pricing.html', function () {
    return view('pricing');
});

Route::get('/service-single.html', function () {
    return view('service-single');
});

Route::get('/services.html', function () {
    return view('services');
});

Route::get('/services3.html', function () {
    return view('services3');
});

Route::get('/team-single.html', function () {
    return view('team-single');
});

Route::get('/team.html', function () {
    return view('team');
});

Route::get('/timetable.html', function () {
    return view('timetable');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

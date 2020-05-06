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
    return view('index');
});

Route::get('/about.html', function () {
    return view('index');
});
Route::get('/comingsoon.html', function () {
    return view('index');
});

Route::get('/contact.html', function () {
    return view('index');
});

Route::get('/contact4.html', function () {
    return view('index');
});

Route::get('/copyright1.html', function () {
    return view('index');
});

Route::get('/event-single-full.html', function () {
    return view('index');
});

Route::get('/event-single-left.html', function () {
    return view('index');
});

Route::get('/event-single-right.html', function () {
    return view('index');
});

Route::get('/events-full.html', function () {
    return view('index');
});

Route::get('/events-left.html', function () {
    return view('index');
});

Route::get('/events-right.html', function () {
    return view('index');
});

Route::get('/faq.html', function () {
    return view('index');
});

Route::get('/faq2.html', function () {
    return view('index');
});

Route::get('/footer1.html', function () {
    return view('index');
});

Route::get('/gallery-image-4-cols-fullwidth.html', function () {
    return view('index');
});

Route::get('/gallery-title-4-cols-fullwidth.html', function () {
    return view('index');
});

Route::get('/gallery-title.html', function () {
    return view('index');
});

Route::get('/index_static.html', function () {
    return view('index');
});

Route::get('/pricing.html', function () {
    return view('index');
});

Route::get('/service-single.html', function () {
    return view('index');
});

Route::get('/services.html', function () {
    return view('index');
});

Route::get('/services3.html', function () {
    return view('index');
});

Route::get('/team-single.html', function () {
    return view('index');
});

Route::get('/team.html', function () {
    return view('index');
});

Route::get('/timetable.html', function () {
    return view('index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

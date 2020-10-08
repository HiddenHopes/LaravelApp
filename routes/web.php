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
    return redirect('shofiuddin_bjit');
});

Route::get('/shofiuddin_bjit', function () {
    return view('home_page');
});

Route::get('/shofiuddin_bjit/about_us', function () {
    return view('about_us');
});

Route::get('/shofiuddin_bjit/contact_us', function () {
    return view('contact_us');
});

Route::get('/shofiuddin_bjit/term_service', function () {
    return view('term_service');
});

Route::get('/shofiuddin_bjit/privacy_policy', function () {
    return view('privacy_policy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


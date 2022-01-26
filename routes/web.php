<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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

Route::resource('sliders',SliderController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('templates.master');
});

Route::get('/about', function () {
    return view('templates.about');
});

Route::get('/cart', function () {
    return view('templates.cart');
});
Route::get('/blog-details', function () {
    return view('templates.blog-details');
});
Route::get('/blog', function () {
    return view('templates.blog');
});
Route::get('/checkout', function () {
    return view('templates.checkout');
});
Route::get('/contact', function () {
    return view('templates.contact');
});
Route::get('/faq', function () {
    return view('templates.faq');
});
Route::get('/forget-password', function () {
    return view('templates.forget-password');
});
Route::get('/index-2', function () {
    return view('templates.index-2');
});
Route::get('/index', function () {
    return view('templates.index');
});
Route::get('/login', function () {
    return view('templates.login');
});
Route::get('/my-account', function () {
    return view('templates.my-account');
});
Route::get('/privacy-policy', function () {
    return view('templates.privacy-policy');
});
Route::get('/product-details', function () {
    return view('templates.product-details');
});
Route::get('/register', function () {
    return view('templates.register');
});
Route::get('/services', function () {
    return view('templates.services');
});
Route::get('/tracking', function () {
    return view('templates.tracking');
});
Route::get('/wishlist', function () {
    return view('templates.wishlist');
});
Route::get('/404', function () {
    return view('templates.404');
});


Route::view('/home2', 'sliders.index');
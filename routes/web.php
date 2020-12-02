<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PageController@dashboard')->name('dashboard');
Route::get('/product/{id}', 'PageController@product')->name("product");
Route::get('/addCart/{id}', 'PageController@addToCart')->name("addToCart");
Route::get('/cart', 'PageController@cart')->name("cart");
Route::get('/transaction', 'PageController@transaction')->name("transaction");
Route::get('/updateCart/{id}', 'PageController@updateCart')->name("updateCart");

// Access Control
Route::match(['post','get'],'/login','PageController@login')->name('login');
// Route::get('/login','PageController@login')->name('login');
// Route::post('/login','PageController@login');

Route::match(['post','get'],'/register','PageController@register')->name('register');
// Route::get('/register','PageController@register')->name('register');
// Route::post('/register','PageController@register');

Route::get('/logout', 'LoginController@logout')->name('logout');


// Add new Item
Route::get('/addProduct', 'PageController@addProduct')->name('addProduct');
Route::post('/addProduct', 'ProductController@add')->name('addProduct_post');

// For Testing Perpose
Route::any('/test', 'PageController@test')->name('test');

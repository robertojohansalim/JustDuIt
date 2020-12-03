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

//
// Cart
// View Cart
Route::get('/cart', 'PageController@cart')->name("cart");
// Add Item to Cart
Route::get('/addCart/{id}', 'PageController@addToCart')->name("addToCart");
Route::post('/addCart/{id}', 'CartController@addItem');
// Update Item in Cart
Route::get('/updateCart/{id}', 'PageController@updateCart')->name("updateCartItem");
Route::post('/updateCart/{id}', 'CartController@updateItem');
// Remove Item from Cart
Route::post('/removeCart', 'CartController@removeItem')->name("removeCartItem");

//
// View Transaction Page
Route::get('/transaction', 'PageController@transaction')->name("transaction");

//
// Access Control
// Login
Route::get('/login','PageController@login')->name('login');
Route::post('/login','PageController@login');

// Register
Route::match(['post','get'],'/register','PageController@register')->name('register');

// Logout
Route::get('/logout', 'LoginController@logout')->name('logout');

// Admin Access Pages
// Add new Item
Route::get('/addProduct', 'PageController@addProduct')->name('addProduct');
Route::post('/addProduct', 'ProductController@add');

// For Testing Perpose
Route::any('/test', 'PageController@test')->name('test');
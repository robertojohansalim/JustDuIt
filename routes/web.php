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

// Access Control
// Login
Route::get('/login','PageController@login')->name('login');
// Route::post('/login','PageController@login');
Route::post('/login','LoginController@login');

// Register
Route::get('/register','PageController@register')->name('register');
// Route::post('/register','PageController@register');
Route::post('/register','RegisterController@register');

// Logout
Route::get('/logout', 'LoginController@logout')->name('logout');

// Cart
// View Cart
Route::get('/cart', 'PageController@cart')->name("cart");
// Add Item to Cart
Route::get('/addCart/{id}', 'PageController@addToCart')->middleware('checkMember')->name("addToCart");
Route::post('/addCart/{id}', 'CartController@addItem');
// Update Item in Cart
Route::get('/updateCart/{id}', 'PageController@updateCart')->middleware('checkMember')->name("updateCartItem");
Route::post('/updateCart/{id}', 'CartController@updateItem');
// Remove Item from Cart
Route::post('/removeCart', 'CartController@removeItem')->middleware('checkMember')->name("removeCartItem");

// Checkout
Route::post('/checkout', 'CartController@checkout')->name('checkoutCart');
// END of Cart
//
// View Transaction Page
Route::get('/transaction', 'PageController@transaction')->middleware('checkLogin')->name("transaction");

// Admin Access Pages
// Add new Item
Route::get('/addProduct', 'PageController@addProduct')->middleware('checkAdmin')->name('addProduct');
Route::post('/addProduct', 'ProductController@add');
// Update Item
Route::get('/updateProduct/{id}', 'PageController@updateProduct')->middleware('checkAdmin')->name("updateProduct");
Route::post('/updateProduct/{id}', 'ProductController@update');

// For Testing Perpose
Route::any('/test', 'PageController@test')->name('test');
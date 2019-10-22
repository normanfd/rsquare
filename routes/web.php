<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Produk Jadi
    Route::get('/VWAvailableProduct', 'AvailableProductController@VWAvailableProduct')->name('admin.VWAvailProduct');
    Route::post('/VWAvailableProduct', 'AvailableProductController@StoreAvailableProduct')->name('admin.StoreAvailProduct');
    // Custom Cardigan
    Route::get('/addcustomcardigan', 'CustomCardiganController@FormAddCustomCardigan')->name('admin.addcustomcardigan');
    Route::post('/addcustomcardigan', 'CustomCardiganController@StoreFormAddCustomCardigan')->name('admin.Storeaddcustomcardigan');
    // Custom Hoodie
    Route::get('/addcustomhoodie', 'CustomHoodieController@FormAddCustomHoodie')->name('admin.addcustomhoodie');
    // Custom Jacket
    Route::get('/addcustomjacket', 'CustomJacketController@FormAddCustomJacket')->name('admin.addcustomjacket');
    // Custom Shirt
    Route::get('/addcustomshirt', 'CustomShirtController@FormAddCustomShirt')->name('admin.addcustomshirt');
    // Custom Shoes
    Route::get('/addcustomshoes', 'CustomShoesController@FormAddCustomShoes')->name('admin.addcustomshoes');
    // Custom Sweater
    Route::get('/addcustomsweater', 'CustomSweaterController@FormAddCustomSweater')->name('admin.addcustomsweater');
    // Custom Tshirt
    Route::get('/addcustomtshirt', 'CustomTshirtController@FormAddCustomTshirt')->name('admin.addcustomtshirt');
    
  });

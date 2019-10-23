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
Route::get('/cardigan', 'UserController@VWCardigan');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Produk Jadi
    Route::get('/VWAvailableProduct', 'AvailableProductController@VWAvailableProduct')->name('admin.VWAvailProduct');
    Route::post('/VWAvailableProduct', 'AvailableProductController@StoreAvailableProduct')->name('admin.StoreAvailProduct');
    Route::get('/listavailableproduct', 'AvailableProductController@TableAvailableProduct')->name('admin.tableavailableproduct');
    // Custom Cardigan
    Route::get('/addcustomcardigan', 'CustomCardiganController@FormAddCustomCardigan')->name('admin.addcustomcardigan');
    Route::post('/addcustomcardigan', 'CustomCardiganController@StoreFormAddCustomCardigan')->name('admin.Storeaddcustomcardigan');
    Route::get('/editcardigan/{id}', 'CustomCardiganController@EditCustomCardigan')->name('admin.Editcustomcardigan');
    Route::patch('/editcardigan/{id}', 'CustomCardiganController@PostEditCustomCardigan')->name('admin.PostEditcustomcardigan');
    Route::delete('/deletecardigan/{id}', 'CustomCardiganController@DeleteCustomCardigan')->name('admin.Deletecustomcardigan');
    // Custom Hoodie
    Route::get('/addcustomhoodie', 'CustomHoodieController@FormAddCustomHoodie')->name('admin.addcustomhoodie');
    Route::post('/addcustomhoodie', 'CustomHoodieController@StoreFormAddCustomHoodie')->name('admin.Storeaddcustomhoodie');
    // Custom Jacket
    Route::get('/addcustomjacket', 'CustomJacketController@FormAddCustomJacket')->name('admin.addcustomjacket');
    Route::post('/addcustomjacket', 'CustomJacketController@StoreFormAddCustomJacket')->name('admin.Storeaddcustomjacket');
    // Custom Shirt
    Route::get('/addcustomshirt', 'CustomShirtController@FormAddCustomShirt')->name('admin.addcustomshirt');
    Route::post('/addcustomshirt', 'CustomShirtController@StoreFormAddCustomShirt')->name('admin.Storeaddcustomshirt');
    // Custom Shoes
    Route::get('/addcustomshoes', 'CustomShoesController@FormAddCustomShoes')->name('admin.addcustomshoes');
    Route::post('/addcustomshoes', 'CustomShoesController@StoreFormAddCustomShoes')->name('admin.Storeaddcustomshoes');
    // Custom Sweater
    Route::get('/addcustomsweater', 'CustomSweaterController@FormAddCustomSweater')->name('admin.addcustomsweater');
    Route::post('/addcustomsweater', 'CustomSweaterController@StoreFormAddCustomSweater')->name('admin.Storeaddcustomsweater');
    // Custom Tshirt
    Route::get('/addcustomtshirt', 'CustomTshirtController@FormAddCustomTshirt')->name('admin.addcustomtshirt');
    Route::post('/addcustomtshirt', 'CustomTshirtController@StoreFormAddCustomTshirt')->name('admin.Storeaddcustomtshirt');
  });
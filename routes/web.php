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
##cardigan
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cardigan', 'UserController@VWCardigan')->name('user.cardigan');
Route::get('/cardigan/detail/{id}', 'UserController@DetailCardigan')->name('user.detail.cardigan');
Route::get('/cardigan/detail/order/{id}', 'UserController@FormOrderCardigan')->name('user.order.cardigan');
##Hoddie
Route::get('/hoodie', 'UserController@VWHoodie')->name('user.hoodie');
Route::get('/hoodie/detail/{id}', 'UserController@DetailHoodie')->name('user.detail.hoodie');
Route::get('/hoodie/detail/order/{id}', 'UserController@FormOrderHoodie')->name('user.order.hoodie');
##Jacket
Route::get('/jacket', 'UserController@VWJacket')->name('user.jacket');
Route::get('/jacket/detail/{id}', 'UserController@DetailJacket')->name('user.detail.jacket');
Route::get('/jacket/detail/order/{id}', 'UserController@FormOrderJacket')->name('user.order.jacket');
##Shirt
Route::get('/shirt', 'UserController@VWShirt')->name('user.shirt');
Route::get('/shirt/detail/{id}', 'UserController@DetailShirt')->name('user.detail.shirt');
Route::get('/shirt/detail/order/{id}', 'UserController@FormOrderShirt')->name('user.order.shirt');
##Shoes
Route::get('/shoes', 'UserController@VWShoes')->name('user.shoes');
Route::get('/shoes/detail/{id}', 'UserController@DetailShoes')->name('user.detail.shoes');
Route::get('/shoes/detail/order/{id}', 'UserController@FormOrderShoes')->name('user.order.shoes');
##Sweater
Route::get('/sweater', 'UserController@VWSweater')->name('user.sweater');
Route::get('/sweater/detail/{id}', 'UserController@DetailSweater')->name('user.detail.sweater');
Route::get('/sweater/detail/order/{id}', 'UserController@FormOrderSweater')->name('user.order.sweater');
##Tshirt
Route::get('/tshirt', 'UserController@VWTshirt')->name('user.tshirt');
Route::get('/tshirt/detail/{id}', 'UserController@DetailTshirt')->name('user.detail.tshirt');
Route::get('/tshirt/detail/order/{id}', 'UserController@FormOrderTshirt')->name('user.order.tshirt');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Produk Jadi
    Route::get('/VWAvailableProduct', 'AvailableProductController@VWAvailableProduct')->name('admin.VWAvailProduct');
    Route::post('/VWAvailableProduct', 'AvailableProductController@StoreAvailableProduct')->name('admin.StoreAvailProduct');
    Route::get('/listavailableproduct', 'AvailableProductController@TableAvailableProduct')->name('admin.tableavailableproduct');
    // Custom Cardigan
    Route::get('/addcustomcardigan', 'CustomProductController@FormAddCustomCardigan')->name('admin.addcustomcardigan');
    Route::post('/addcustomcardigan', 'CustomProductController@StoreFormAddCustomCardigan')->name('admin.Storeaddcustomcardigan');
    Route::get('/editcardigan/{id}', 'CustomProductController@EditCustomCardigan')->name('admin.Editcustomcardigan');
    Route::patch('/editcardigan/{id}', 'CustomProductController@PostEditCustomCardigan')->name('admin.PostEditcustomcardigan');
    Route::delete('/deletecardigan/{id}', 'CustomProductController@DeleteCustomCardigan')->name('admin.Deletecustomcardigan');
    // Custom Hoodie
    Route::get('/addcustomhoodie', 'CustomProductController@FormAddCustomHoodie')->name('admin.addcustomhoodie');
    Route::post('/addcustomhoodie', 'CustomProductController@StoreFormAddCustomHoodie')->name('admin.Storeaddcustomhoodie');
    Route::get('/edithoodie/{id}', 'CustomProductController@EditCustomHoodie')->name('admin.Editcustomhoodie');
    Route::patch('/edithoodie/{id}', 'CustomProductController@PostEditCustomHoodie')->name('admin.PostEditcustomhoodie');
    Route::delete('/deletehoodie/{id}', 'CustomProductController@DeleteCustomHoodie')->name('admin.Deletecustomhoodie');
    // Custom Jacket
    Route::get('/addcustomjacket', 'CustomProductController@FormAddCustomJacket')->name('admin.addcustomjacket');
    Route::post('/addcustomjacket', 'CustomProductController@StoreFormAddCustomJacket')->name('admin.Storeaddcustomjacket');
    Route::get('/editjacket/{id}', 'CustomProductController@EditCustomJacket')->name('admin.Editcustomjacket');
    Route::patch('/editjacket/{id}', 'CustomProductController@PostEditCustomJacket')->name('admin.PostEditcustomjacket');
    Route::delete('/deletejacket/{id}', 'CustomProductController@DeleteCustomJacket')->name('admin.Deletecustomjacket');
    // Custom Shirt
    Route::get('/addcustomshirt', 'CustomProductController@FormAddCustomShirt')->name('admin.addcustomshirt');
    Route::post('/addcustomshirt', 'CustomProductController@StoreFormAddCustomShirt')->name('admin.Storeaddcustomshirt');
    Route::get('/editshirt/{id}', 'CustomProductController@EditCustomShirt')->name('admin.Editcustomshirt');
    Route::patch('/editshirt/{id}', 'CustomProductController@PostEditCustomShirt')->name('admin.PostEditcustomshirt');
    Route::delete('/deleteshirt/{id}', 'CustomProductController@DeleteCustomShirt')->name('admin.Deletecustomshirt');
    // Custom Shoes
    Route::get('/addcustomshoes', 'CustomProductController@FormAddCustomShoes')->name('admin.addcustomshoes');
    Route::post('/addcustomshoes', 'CustomProductController@StoreFormAddCustomShoes')->name('admin.Storeaddcustomshoes');
    Route::get('/editshoes/{id}', 'CustomProductController@EditCustomShoes')->name('admin.Editcustomshoes');
    Route::patch('/editshoes/{id}', 'CustomProductController@PostEditCustomShoes')->name('admin.PostEditcustomshoes');
    Route::delete('/deleteshoes/{id}', 'CustomProductController@DeleteCustomShoes')->name('admin.Deletecustomshoes');
    // Custom Sweater
    Route::get('/addcustomsweater', 'CustomProductController@FormAddCustomSweater')->name('admin.addcustomsweater');
    Route::post('/addcustomsweater', 'CustomProductController@StoreFormAddCustomSweater')->name('admin.Storeaddcustomsweater');
    Route::get('/editsweater/{id}', 'CustomProductController@EditCustomSweater')->name('admin.Editcustomsweater');
    Route::patch('/editsweater/{id}', 'CustomProductController@PostEditCustomSweater')->name('admin.PostEditcustomsweater');
    Route::delete('/deletesweater/{id}', 'CustomProductController@DeleteCustomSweater')->name('admin.Deletecustomsweater');
    // Custom Tshirt
    Route::get('/addcustomtshirt', 'CustomProductController@FormAddCustomTshirt')->name('admin.addcustomtshirt');
    Route::post('/addcustomtshirt', 'CustomProductController@StoreFormAddCustomTshirt')->name('admin.Storeaddcustomtshirt');
    Route::get('/edittshirt/{id}', 'CustomProductController@EditCustomTshirt')->name('admin.Editcustomtshirt');
    Route::patch('/edittshirt/{id}', 'CustomProductController@PostEditCustomTshirt')->name('admin.PostEditcustomtshirt');
    Route::delete('/deletetshirt/{id}', 'CustomProductController@DeleteCustomTshirt')->name('admin.Deletecustomtshirt');
    
  });
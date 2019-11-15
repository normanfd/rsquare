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
})->name('index');

// Route::get('/', 'HomeController@idx')->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/confirmation', 'HomeController@confirmation')->name('confirmation');

##cardigan
Route::prefix('/cardigan')->group(function(){
    Route::get('/', 'UserController@VWCardigan')->name('user.cardigan');
    Route::get('/detail/{id}', 'UserController@DetailCardigan')->name('user.detail.cardigan');
    Route::get('/detail/order/{id}', 'UserController@FormOrderCardigan')->name('user.order.cardigan');
    Route::post('/detail/order/{id}', 'UserController@CreateCardiganOrder')->name('post.user.order.cardigan');
});

##Hoddie
Route::prefix('/hoodie')->group(function(){
    Route::get('/', 'UserController@VWHoodie')->name('user.hoodie');
    Route::get('/detail/{id}', 'UserController@DetailHoodie')->name('user.detail.hoodie');
    Route::get('/detail/order/{id}', 'UserController@FormOrderHoodie')->name('user.order.hoodie');
    Route::post('/detail/order/{id}', 'UserController@CreateHoodieOrder')->name('post.user.order.hoodie');
});
##Jacket
Route::prefix('/jacket')->group(function(){
    Route::get('/', 'UserController@VWJacket')->name('user.jacket');
    Route::get('/detail/{id}', 'UserController@DetailJacket')->name('user.detail.jacket');
    Route::get('/detail/order/{id}', 'UserController@FormOrderJacket')->name('user.order.jacket');
    Route::post('/detail/order/{id}', 'UserController@CreateJacketOrder')->name('post.user.order.jacket');
});

##Shirt
Route::prefix('/shirt')->group(function(){
    Route::get('/', 'UserController@VWShirt')->name('user.shirt');
    Route::get('/detail/{id}', 'UserController@DetailShirt')->name('user.detail.shirt');
    Route::get('/detail/order/{id}', 'UserController@FormOrderShirt')->name('user.order.shirt');
    Route::post('/detail/order/{id}', 'UserController@CreateShirtOrder')->name('post.user.order.shirt');
});

##Shoes
Route::prefix('/shoes')->group(function(){
    Route::get('/', 'UserController@VWShoes')->name('user.shoes');
    Route::get('/detail/{id}', 'UserController@DetailShoes')->name('user.detail.shoes');
    Route::get('/detail/order/{id}', 'UserController@FormOrderShoes')->name('user.order.shoes');
    Route::post('/detail/order/{id}', 'UserController@CreateShoesOrder')->name('post.user.order.shoes');
});
##Sweater
Route::prefix('/sweater')->group(function(){
    Route::get('/', 'UserController@VWSweater')->name('user.sweater');
    Route::get('/detail/{id}', 'UserController@DetailSweater')->name('user.detail.sweater');
    Route::get('/detail/order/{id}', 'UserController@FormOrderSweater')->name('user.order.sweater');
    Route::post('/detail/order/{id}', 'UserController@CreateSweaterOrder')->name('post.user.order.sweater');
});

##Tshirt
Route::prefix('/tshirt')->group(function(){
    Route::get('/', 'UserController@VWTshirt')->name('user.tshirt');
    Route::get('/detail/{id}', 'UserController@DetailTshirt')->name('user.detail.tshirt');
    Route::get('/detail/order/{id}', 'UserController@FormOrderTshirt')->name('user.order.tshirt');
    Route::post('/detail/order/{id}', 'UserController@CreateTshirtOrder')->name('post.user.order.tshirt');
});

##Available Product
Route::get('/availableproduct', 'UserController@VWAvailableProduct')-> name('user.availableproduct');
Route::get('/availableproduct/detail/{id}', 'UserController@DetailAvailable')->name('user.detail.available');
route::get('/availbalrproduct/detail/order/{id}', 'UserController@FormAvailable')->name('user.detail.form.available');


Route::prefix('admin')->group(function() {
//------------------------------------------Route untuk Admin CRUD Produk-----------------------------------------------------------------
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Produk Jadi
        // Create
        Route::get('/addavailableproduct', 'AvailableProductController@FormAvailableProduct')->name('admin.VWAvailProduct');
        Route::post('/addAvailableproduct', 'AvailableProductController@SaveFormAvailableProduct')->name('admin.StoreAvailProduct');
        // Read
        Route::get('/viewavailableproduct', 'AvailableProductController@ViewAvailableProduct')->name('admin.listavailableproduct');
        // Update
        Route::get('/editavailableproduct/{id}', 'AvailableProductController@EditFormAvailableProduct')->name('admin.EditAvailProduct');
        Route::patch('/editavailableproduct/{id}', 'AvailableProductController@SaveEditFormAvailableProduct')->name('admin.PostEditAvailableProduct');
        // Delete
        Route::delete('/deleteavailableproduct/{id}', 'AvailableProductController@DeleteAvailableProduct')->name('admin.DeleteAvailProduct');

    // Custom Cardigan
        // create
        Route::get('/addcustomcardigan', 'CustomProductController@FormAddCustomCardigan')->name('admin.addcustomcardigan');
        Route::post('/addcustomcardigan', 'CustomProductController@StoreFormAddCustomCardigan')->name('admin.Storeaddcustomcardigan');
        // read
        Route::get('/viewcustomcardigan', 'CustomProductController@ViewCustomCardigan')->name('admin.viewcustomcardigan');
        // update
        Route::get('/editcardigan/{id}', 'CustomProductController@EditFormCustomCardigan')->name('admin.Editcustomcardigan');
        Route::patch('/editcardigan/{id}', 'CustomProductController@SaveEditFormCustomCardigan')->name('admin.PostEditcustomcardigan');
        //delete
        Route::delete('/deletecardigan/{id}', 'CustomProductController@DeleteCustomCardigan')->name('admin.Deletecustomcardigan');
    // Custom Hoodie
        //create
        Route::get('/addcustomhoodie', 'CustomProductController@FormAddCustomHoodie')->name('admin.addcustomhoodie');
        Route::post('/addcustomhoodie', 'CustomProductController@StoreFormAddCustomHoodie')->name('admin.Storeaddcustomhoodie');
        // read
        Route::get('/viewcustomhoodie', 'CustomProductController@ViewCustomHoodie')->name('admin.viewcustomhoodie');
        // update
        Route::get('/edithoodie/{id}', 'CustomProductController@EditCustomHoodie')->name('admin.Editcustomhoodie');
        Route::patch('/edithoodie/{id}', 'CustomProductController@PostEditCustomHoodie')->name('admin.PostEditcustomhoodie');
        // delete
        Route::delete('/deletehoodie/{id}', 'CustomProductController@DeleteCustomHoodie')->name('admin.Deletecustomhoodie');
    // Custom Jacket
        //create
        Route::get('/addcustomjacket', 'CustomProductController@FormAddCustomJacket')->name('admin.addcustomjacket');
        Route::post('/addcustomjacket', 'CustomProductController@StoreFormAddCustomJacket')->name('admin.Storeaddcustomjacket');
        //read
        Route::get('/viewcustomjacket', 'CustomProductController@ViewCustomJacket')->name('admin.viewcustomjacket');
        //update
        Route::get('/editjacket/{id}', 'CustomProductController@EditCustomJacket')->name('admin.Editcustomjacket');
        Route::patch('/editjacket/{id}', 'CustomProductController@PostEditCustomJacket')->name('admin.PostEditcustomjacket');
        //delete
        Route::delete('/deletejacket/{id}', 'CustomProductController@DeleteCustomJacket')->name('admin.Deletecustomjacket');
    // Custom Shirt
    Route::get('/addcustomshirt', 'CustomProductController@FormAddCustomShirt')->name('admin.addcustomshirt');
    Route::post('/addcustomshirt', 'CustomProductController@StoreFormAddCustomShirt')->name('admin.Storeaddcustomshirt');
    Route::get('/viewcustomshirt', 'CustomProductController@ViewCustomShirt')->name('admin.viewcustomshirt');
    Route::get('/editshirt/{id}', 'CustomProductController@EditCustomShirt')->name('admin.Editcustomshirt');
    Route::patch('/editshirt/{id}', 'CustomProductController@PostEditCustomShirt')->name('admin.PostEditcustomshirt');
    Route::delete('/deleteshirt/{id}', 'CustomProductController@DeleteCustomShirt')->name('admin.Deletecustomshirt');
    // Custom Shoes
    Route::get('/addcustomshoes', 'CustomProductController@FormAddCustomShoes')->name('admin.addcustomshoes');
    Route::post('/addcustomshoes', 'CustomProductController@StoreFormAddCustomShoes')->name('admin.Storeaddcustomshoes');
    Route::get('/viewcustomshoes', 'CustomProductController@ViewCustomShoes')->name('admin.viewcustomshoes');
    Route::get('/editshoes/{id}', 'CustomProductController@EditCustomShoes')->name('admin.Editcustomshoes');
    Route::patch('/editshoes/{id}', 'CustomProductController@PostEditCustomShoes')->name('admin.PostEditcustomshoes');
    Route::delete('/deleteshoes/{id}', 'CustomProductController@DeleteCustomShoes')->name('admin.Deletecustomshoes');
    // Custom Sweater
    Route::get('/addcustomsweater', 'CustomProductController@FormAddCustomSweater')->name('admin.addcustomsweater');
    Route::post('/addcustomsweater', 'CustomProductController@StoreFormAddCustomSweater')->name('admin.Storeaddcustomsweater');
    Route::get('/viewcustomsweater', 'CustomProductController@ViewCustomSweater')->name('admin.viewcustomsweater');
    Route::get('/editsweater/{id}', 'CustomProductController@EditCustomSweater')->name('admin.Editcustomsweater');
    Route::patch('/editsweater/{id}', 'CustomProductController@PostEditCustomSweater')->name('admin.PostEditcustomsweater');
    Route::delete('/deletesweater/{id}', 'CustomProductController@DeleteCustomSweater')->name('admin.Deletecustomsweater');
    // Custom Tshirt
    Route::get('/addcustomtshirt', 'CustomProductController@FormAddCustomTshirt')->name('admin.addcustomtshirt');
    Route::post('/addcustomtshirt', 'CustomProductController@StoreFormAddCustomTshirt')->name('admin.Storeaddcustomtshirt');
    Route::get('/viewcustomtshirt', 'CustomProductController@ViewCustomTshirt')->name('admin.viewcustomtshirt');
    Route::get('/edittshirt/{id}', 'CustomProductController@EditCustomTshirt')->name('admin.Editcustomtshirt');
    Route::patch('/edittshirt/{id}', 'CustomProductController@PostEditCustomTshirt')->name('admin.PostEditcustomtshirt');
    Route::delete('/deletetshirt/{id}', 'CustomProductController@DeleteCustomTshirt')->name('admin.Deletecustomtshirt');

    //--------------------------------------------------Order Admin-------------------------------------------------------
    //show all order
    Route::get('/allcustomorder', 'AdminOrderController@ShowAllOrder')->name('admin.showallorder');
    //cardigan
    Route::get('/allcustomorder/cardigan/{id}', 'AdminOrderController@DetailCardigan')->name('admin.detailcardiganorder');
    //Hoodie
    Route::get('/allcustomorder/hoodie/{id}', 'AdminOrderController@DetailHoodie')->name('admin.detailhoodieorder');
    //Jacket
    Route::get('/allcustomorder/jacket/{id}', 'AdminOrderController@DetailJacket')->name('admin.detailjacketorder');
    //shirt
    Route::get('/allcustomorder/shirt/{id}', 'AdminOrderController@DetailShirt')->name('admin.detailshirtorder');
    // shoes
    Route::get('/allcustomorder/shoes/{id}', 'AdminOrderController@DetailShoes')->name('admin.detailshoesorder');
    // sweater
    Route::get('/allcustomorder/sweater/{id}', 'AdminOrderController@DetailSweater')->name('admin.detailsweaterorder');
    // tshirt
    Route::get('/allcustomorder/tshirt/{id}', 'AdminOrderController@DetailTshirt')->name('admin.detailtshirtorder');
    // View Custom Product\
    Route::get('/vwcustomproduct', 'CustomProductController@VwCustomProduct')->name('admin.vwcustomproduct');
  });
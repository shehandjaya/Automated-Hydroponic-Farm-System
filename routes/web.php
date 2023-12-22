<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GmailApiController;

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





// routes/web.php


Route::get('/forgot-password', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/forgot-password', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/reset-password/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/reset-password', 'ResetPasswordController@reset')->name('password.update');


use App\Models\web_image;
//welcome page route
Route::get('/', function () {
    $webImageData = web_image::select('image_name')->where('status',1)->get();
    return view('webSite.index', ['webImageData' => $webImageData]);
});

///////////////////////////web site routes//////////////////////////////////



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/store.balde', 'Store@index')->name('store.balde');
Route::get('/store.balde', [Store::class, 'index'])->name('store.balde');





////////////////////////////////////Dashboard Routes//////////////////////////
Route::get('/director',['middleware'=>'isdirector', function() {
    return view('dashboard/director');
}]);
Route::get('/cEngineer',['middleware'=>'iscEngineer',function() {
    return view('dashboard/cEngineer');
}]);
Route::get('/admin',['middleware'=>'isadmin',function() {

    $reading_update = \App\Models\reading_update::all();
    return view('dashboard/admin')
    ->with('reading_update',$reading_update);

}]);
Route::get('/user',['middleware'=>'isuser',function() {
    return view('dashboard/user');
}]);

///////////////////////////////////////Edit Profile Routes////////////////////////
//return edit profile view of admin
Route::get('/returnEditProfileAdmin',[App\Http\Controllers\editProfileController::class,'returnEditProfileAdmin']);
Route::post('/UpdateAdminProfileFunc',[App\Http\Controllers\editProfileController::class,'UpdateAdminProfileFunc']);
Route::post('/userProfileEdit', [App\Http\Controllers\editProfileController::class, 'UpdateUserProfileFunc'])->name('userProfileEdit.UpdateUserProfileFunc');
Route::get('/returnEditProfileUser', [App\Http\Controllers\editProfileController::class, 'returnEditProfileUser']);



//////////////////////////////////cahnege passwords routes////////////////////////////
Route::get('/returnEditPasswordAdmin',[App\Http\Controllers\editPasswordController::class,'returnEditPasswordAdmin']);
Route::post('/ChangeAdminPasswordFunc',[App\Http\Controllers\editPasswordController::class,'ChangeAdminPasswordFunc']);



////////////////////////////////////Admin Routes/////////////////////////////////////
Route::get('/adminAddUesr',[App\Http\Controllers\admin::class,'returnAdminAddUesr']);
Route::post('/storeNewUserAdmin',[App\Http\Controllers\admin::class,'storeNewUserAdmin']);

Route::get('/manageUsersTbl',[App\Http\Controllers\admin::class,'returnmanageUsersTbl']);
Route::get('/removeUserDetailsAdmin/{id}',[App\Http\Controllers\admin::class,'removeUserDetailsAdmin'])->name('removeUserDetailsAdmin');
Route::get('/editUserDetailsAdmin/{id}',[App\Http\Controllers\admin::class,'editUserDetailsAdmin']);
Route::get('/storeUpdatedUserDetailsAdmin',[App\Http\Controllers\admin::class,'storeUpdatedUserDetailsAdmin']);

//////////////////////////////////Admin Meter Charts routes////////////////////////////////
Route::get('/adminMeterIndex',[App\Http\Controllers\AdminCharts::class,'adminMeterIndex']);



////////////////////////getData.php//////////////////////////
Route::get('/getRoute',[App\Http\Controllers\ReadingController::class,'getReading']);
Route::get('/update-sensor-data',[App\Http\Controllers\SensorController::class, 'updateSensorData']);



/////////////////////////////////update web iages route//////////////////////////
Route::get('/updateWebImages',[App\Http\Controllers\webImages::class, 'updateWebImages']);
Route::post('/uploadSiderImage',[App\Http\Controllers\webImages::class,'uploadSiderImage']);
Route::get('/removeWebImageAdmin/{id}',[App\Http\Controllers\webImages::class, 'removeWebImageAdmin']);


//////////////////////////////Admin checkbox status cahnge routes///////////////////////////
Route::get('/changeStatusWMOn',[App\Http\Controllers\admin::class,'changeStatusWMOn']);
Route::get('/changeStatusWMOff',[App\Http\Controllers\admin::class,'changeStatusWMOff']);

//////////////////////////////////change items routes////////////////////////////
Route::get('/items', [App\Http\Controllers\ItemsController::class, 'index'])->name('items');

Route::match(['get', 'post'], '/items/{item_id}', [CartController::class, 'custom_item'])->name('items.custom_item');
Route::get('/cart', [ItemsController::class, 'index'])->name('cart');
Route::post('/cart/{item_id}', [ItemsController::class, 'addToCart'])->name('cart.addToCart');
Route::match(['get', 'post'], '/cart/{cart_id}', [CartController::class, 'deleteCart'])->name('cart.deleteCart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/ItemCount', [CartController::class, 'getCartItemCount'])->name('ItemCount');
Route::get('/search', [ItemsController::class, 'search'])->name('search');
Route::get('/custom_item/{item_id}', [ItemsController::class, 'custom_item'])->name('custom_item.custom_item');


//////////////////////////////////cart routes////////////////////////////
Route::get('/checkout', [ItemsController::class, 'sendCheckoutConfirmationEmail'])->name('checkout');
Route::post('/cartItem', [ItemsController::class, 'addToDb'])->name('cartItem.addToDb');
Route::get('/store-cart-items', [ItemsController::class, 'store'])->name('store.cart.items');
Route::post('/cartItems', [CartController::class, 'getEmailBodyData'])->name('cartItems.getEmailBodyData');
Route::match(['get', 'post'], '/ordersummery', [CartController::class, 'orderSummeryView'])->name('ordersummery.orderSummeryView');


//////////////////////////////////search routes////////////////////////////
Route::get('/searchItem/{name}', [ItemsController::class, 'searchItem'])->name('searchItem');



//auto reload meeters
Route::get('/getWaterCapacity',[App\Http\Controllers\admin::class,'getWaterCapacity']);
Route::get('/getUpdatedValues', [App\Http\Controllers\admin::class, 'getUpdatedValues']);




/////////////////admin Items Routes///////////////////////
Route::get('/addItemsAdmin', [App\Http\Controllers\admin::class, 'addItemsAdmin']);
Route::post('/storeItemDetais', [App\Http\Controllers\admin::class, 'storeItemDetais']);
Route::get('/manageItemsAdmin', [App\Http\Controllers\admin::class, 'manageItemsAdmin']);
Route::get('/removeItemDetailsAdmin/{id}',[App\Http\Controllers\admin::class,'removeItemDetailsAdmin'])->name('removeItemDetailsAdmin');


Route::get('/getItemDetails/{id}',[App\Http\Controllers\admin::class, 'getItemDetails']);
Route::post('/updateItemDetails/{id}',[App\Http\Controllers\admin::class, 'updateItemDetails']);



////////////////////////////Task Management routes/////////////////////////////
Route::get('/showTask',[App\Http\Controllers\taskController::class, 'showTask']);
Route::post('/add-task',[App\Http\Controllers\taskController::class, 'addTask']);
Route::get('/removeTaskAdmin/{id}',[App\Http\Controllers\taskController::class,'removeTaskAdmin'])->name('removeTaskAdmin');
Route::get('/showTask',[App\Http\Controllers\taskController::class, 'showTask']);
Route::get('/madTask/{id}',[App\Http\Controllers\taskController::class,'madTask']);
Route::get('/mancTask/{id}',[App\Http\Controllers\taskController::class,'mancTask']);




//change status of all buttons (ambient temperature)
Route::get('/updateButtonsToZero', [App\Http\Controllers\admin::class, 'updateButtonsToZero']);




// update Emergency Button

Route::get('/updateEmergencyButton', [App\Http\Controllers\admin::class, 'updateEmergencyButton']);



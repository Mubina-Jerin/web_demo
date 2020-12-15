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

// Route::get('/', function () {
//     //return view('welcome');
     
//     return View::make('pages.home');
// });

Route::get('/','HomeController@index')->name('home');

Auth::routes();
//[login, register, forgetpassword, Verificationroute]
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/userLanding', 'HomeController@showUserHome')->name('userLanding');






//Route::resource('nursery', 'CustomerController');

Route::resource('blog', 'BlogController');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('customer', 'CustomerController');
    Route::resource('provider', 'ProviderController');
    Route::resource('cultivation_info', 'CultivationController');
    Route::resource('item', 'ItemController');
    Route::resource('material', 'MaterialController');
    Route::resource('nursery_catelog', 'Nursery_CatelogController');
    Route::resource('orders', 'OrdersController');
    Route::resource('plant_info', 'Plant_InfosController');
    Route::resource('resourse', 'ResourceController');
    Route::resource('review', 'ReviewController');
    Route::resource('tracking', 'trackingController');
    Route::resource('blog', 'BlogController');
    Route::resource('nursery_inventory', 'NurseryInventoryController');
    Route::resource('nursery_mng', 'NurseryController');
    Route::get('/createInvByNusId/{id}', 'ProviderServices@createInvByNusId')->name('createInvByNusId');
    Route::get('/createPlantByInvId/{inv_id}', 'ProviderServices@createPlantByInvId')->name('createPlantByInvId');
    Route::get('/adCreationLanding','ProviderServices@AdCreationHomePage')->name('adCreationLanding');
    Route::get('/showServices', 'ProviderServices@showServices')->name('showServices');
    Route::get('/nurseryDetailsShow/{id}','ProviderServices@showNurseryDetails')->name('nurseryDetailsShow');
    Route::get('/postAd/{plant_id}','ProviderServices@postAd')->name('postAd');
    Route::get('/showAd/{plant_id}','ProviderServices@showAd')->name('showAd');
    Route::post('/publishAd','ProviderServices@publishAd')->name('publishAd');
    Route::post('/order','HomeController@orderComplete')->name('order');
    Route::post('/EditCustomer','HomeController@EditCustomer')->name('EditCustomer');
    Route::post('/EditProvider','HomeController@EditProvider')->name('EditProvider');
    Route::get('/ShowListOfNurseries','HomeController@ShowListOfNurseries')->name('ShowListOfNurseries');
    Route::get('/ShowallPlantAd','HomeController@ShowallPlantAd')->name('ShowallPlantAd');
    Route::get('/ShowOrderSummery','HomeController@ShowOrderSummery')->name('ShowOrderSummery');
    Route::get('/orderItem/{mat_id}','HomeController@orderItem')->name('orderItem');
});

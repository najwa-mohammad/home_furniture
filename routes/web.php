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

Route::get('/','frontSiteController@showhome')->name('frontsite.index');
Route::get('/aboutus','frontSiteController@showaboutus')->name('frontsite.aboutus');
Route::get('/category','frontSiteController@showcategory')->name('frontsite.category');
Route::get('/cms','frontSiteController@showcms')->name('frontsite.cms');
Route::get('/productpage','frontSiteController@showproductpage')->name('frontsite.productpage');
Route::get('/pricing','frontSiteController@showpricing')->name('frontsite.pricing');
Route::get('/profile','frontSiteController@showprofile')->name('frontsite.profile');
Route::get('/howitworks','frontSiteController@showhowitworks')->name('frontsite.howitworks');



Route::prefix('dashboard')->group(function(){
     Route::get('/','Dashboard\DashboardCont@index');
     Route::resource('posts','Dashboard\postCont');
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index', function () {
//     return view('frontsite.index');
// })->name('frontsite.index');

// Route::get('aboutus', function () {
//     return view('frontsite.aboutus');
// })->name('frontsite.aboutus');

// Route::get('category', function () {
//     return view('frontsite.category');
// })->name('frontsite.category');

// Route::get('cms', function () {
//     return view('frontsite.cms');
// })->name('frontsite.cms');

// Route::get('howitworks', function () {
//     return view('frontsite.howitworks');
// })->name('frontsite.howitworks');

// Route::get('pricing', function () {
//     return view('frontsite.pricing');
// })->name('frontsite.pricing');

// Route::get('productpage', function () {
//     return view('frontsite.productpage');
// })->name('frontsite.productpage');

// Route::get('profile', function () {
//     return view('frontsite.profile');
// })->name('frontsite.profile');
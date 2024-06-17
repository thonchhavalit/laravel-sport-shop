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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () { 
//     return view('frontend.home');
// });
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/about-us', 'App\Http\Controllers\AboutController@index');
Route::get('/contact-us', 'App\Http\Controllers\ContactController@index');
Route::get('/products', 'App\Http\Controllers\FetchProduct@index');
// Route::get('/', 'App\Http\Controllers\AboutController@index');

Route::get('/newlogin', function () {
    return view('screens/login');
})->name('newlogin');


// registration

Route::get('/registration', function () {
    return view('screens/registration');
})->name('registration');


Route::get('/administrator', function () {
    return view('admin.blank');
});

Route::resource('admin/slide', 'App\Http\Controllers\SlideController');
Route::resource('admin/products', 'App\Http\Controllers\ProductController');

// Route::get('admin/slide', 'App\Http\Controllers\SlideController@index')->name('admin.slide.index');
// Route::get('admin/slide/create', 'App\Http\Controllers\SlideController@create')->name('admin.slide.create');
// Route::post('admin/slide', 'App\Http\Controllers\SlideController@store')->name('admin.slide.store');
// Route::get('admin/slide/{id}', 'App\Http\Controllers\SlideController@show')->name('admin.slide.show');
// Route::get('admin/slide/{id}/edit', 'App\Http\Controllers\SlideController@edit')->name('admin.slide.edit');
// Route::put('admin/slide/{id}', 'App\Http\Controllers\SlideController@update')->name('admin.slide.update');
// Route::delete('admin/slide/{id}', 'App\Http\Controllers\SlideController@destroy')->name('admin.slide.destroy');

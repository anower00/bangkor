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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');


//Route::get('slider/data' , 'Admin\SliderController@getSlider')->name('slider.get');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function (){

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider' , 'SliderController');
    Route::post('allSlider/update', 'SliderController@update');
    Route::get('allSlider/destroy/{id}', 'SliderController@destroy');

    Route::get('statistics' , 'StatisticsController@index')->name('statistics.index');
    Route::get('statistics/fetch_data', 'StatisticsController@fetch_data');
    Route::post('statistics/update_data', 'StatisticsController@update_data')->name('statistics.update_data');

    Route::get('gallery', 'GalleryController@imagesUpload')->name('gallery.index');
    Route::post('images-upload', 'GalleryController@imagesUploadPost')->name('images.upload');
    Route::delete('gallery_images/delete/{id}', 'GalleryController@destroy')->name('gallery_images.destroy');


});

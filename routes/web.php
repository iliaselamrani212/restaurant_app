<?php
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;





Route::get('food',[
    'uses' => 'App\Http\Controllers\FoodController@getfood',
    'as' => 'food'
    ]);
    Route::get('menu','App\Http\Controllers\FoodController@getfoodmenu')->name('foodmenu');
    Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
    Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin'); 
    Route::get('registration', 'App\Http\Controllers\AuthController@registration');
    Route::post('post-registration', 'App\Http\Controllers\AuthController@postRegistration'); 
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');
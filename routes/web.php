<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Visitor ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    $visitor = new Visitor();
$visitor->ip_address = $request->ip();
$visitor->visit_date = now()->format('Y-m-d');
$visitor->save();
    return view('welcome');
});

Route::get('users', 'App\Http\Controllers\UserController@getUsers')->name("users");
Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard')->name("dashboard");

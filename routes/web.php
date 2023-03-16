<?php
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Visitor ;
use App\Models\Commentaire;
use App\Models\Category;



Route::get('food',[
    'uses' => 'App\Http\Controllers\FoodController@getfood',
    'as' => 'food'
    ]);
    Route::get('menu','App\Http\Controllers\FoodController@getfoodmenu')->name('foodmenu');
    Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
    Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin'); 
    Route::get('registration', 'App\Http\Controllers\AuthController@registration');
    Route::post('post-registration', 'App\Http\Controllers\AuthController@postRegistration'); 
    Route::post('addCommentaires','App\Http\Controllers\CommentaireController@addCommentaires')->name('addCommentaires');
   
    Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/', function (Request $request) {
    $visitor = new Visitor;
$visitor->ip_address = $request->ip();
$visitor->visit_date = now()->format('Y-m-d');
$category = Category::OrderBy('name')->get();
$food = Food::OrderBy('name')->get();
$visitor->save();
$user=null;
$commentaire=Commentaire::All();
    return view('welcome')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire);
});

Route::get('users', 'App\Http\Controllers\UserController@getUsers')->name("users");
Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard')->name("dashboard");

Route::get('categories', 'App\Http\Controllers\CategoryController@getCategories')->name("Categories");
Route::post('addCategory', 'App\Http\Controllers\CategoryController@addCategory')->name("addCategory");
Route::post('addReservation', 'App\Http\Controllers\ResarvationController@addReservation')->name("addReservation");
Route::get('delete/{id}', 'App\Http\Controllers\CategoryController@removeCategory')->name("removeCategory");
Route::get('foods', 'App\Http\Controllers\FoodController@getfoods')->name("foods");
Route::get('/about', function () {
    if (Auth::check()) {
        $user = Auth::user();}
        else{
    $user = null;}
    return view('about')->with('user',$user);
})->name('about');



   


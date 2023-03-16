<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{
        public function getfoods(){
        // if($id_category==0){
            $foodrd = Food::where('reduction', '>', 0)
            ->orderBy('name')
            ->get();
            $foods = Food::OrderBy('name')->get();
            $category = Category::OrderBy('name')->get();
        // }
        // else{
          
        // }
        

        return view('Admin/foodAdmin')->with("foods", $foods)->with('category',$category);
    }
    
    public function getfood()
   {
    if (Auth::check()) {
        $user = Auth::user();}
        else{
    $user = null;}
    $category = Category::OrderBy('name')->get();
    $food = Food::OrderBy('name')->get();
    $commentaire=Commentaire::All();
    $foodrd = Food::where('reduction', '>', 0)
            ->orderBy('name')
            ->get();
    return view('welcome')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire)->with('foodrd',$foodrd);
   }
   
   public function getfoodmenu()
   {
    if (Auth::check()) {
        $user = Auth::user();}
        else{
    $user = null;}
    $food = Food::OrderBy('name')->get();
    $category = Category::OrderBy('name')->get();
    $commentaire=Commentaire::All();
    return view('menu')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire);

   }
   

}

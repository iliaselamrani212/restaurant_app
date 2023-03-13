<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;



class FoodController extends Controller
{
        public function getfoods(){
        // if($id_category==0){

            $foods = Food::OrderBy('name')->get();
            $category = Category::OrderBy('name')->get();
        // }
        // else{
          
        // }
        

        return view('Admin/foodAdmin')->with("foods", $foods)->with('category',$category);
    }
    
    public function getfood()
   {
    $user = null;
    $category = Category::OrderBy('name')->get();
    $food = Food::OrderBy('name')->get();
    return view('welcome')->with('food',$food)->with('category',$category)->with('user',$user);
   }
   
   public function getfoodmenu()
   {
    $user = null;
    $food = Food::OrderBy('name')->get();
    $category = Category::OrderBy('name')->get();
    return view('menu')->with('food',$food)->with('category',$category)->with('user',$user);

   }
   

}

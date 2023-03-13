<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function getfoods(){
        // if($id_category==0){
            $foods =  Food::All();
        // }
        // else{
          
        // }
        

        return view('Admin/foodAdmin')->with("foods", $foods);
    }
}

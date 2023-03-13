<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = Category::All();
        return view('Admin/categories')->with('categories',$categories);
        
    }
    public function addCategory(Request $request){
        $category = new Category;
        $category->name = $request->name ;
        $category->save();
        return redirect()->back();
    
    }
    public function removeCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}

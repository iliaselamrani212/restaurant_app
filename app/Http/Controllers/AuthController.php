<?php
 
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\Category;
use App\Models\Food;
 
class AuthController extends Controller
{
 
    public function index()
    {
        
        return view('login');
    }  
 
    public function registration()
    {
        return view('registration');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
       
 
        $credentials = $request->only('email', 'password');
        $category = Category::OrderBy('name')->get();
            $food = Food::OrderBy('name')->get();
            $user = null; 
            $commentaire=Commentaire::All();
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return view('welcome')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire);
            
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
        $category = Category::OrderBy('name')->get();
            $food = Food::OrderBy('name')->get();
            $commentaire=Commentaire::All();
           
                return view('login');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('welcome');
      }
       return view("welcome")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => '0' ,
        'adresse' => $data['adresse']
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        $user=null;
        $commentaire=Commentaire::All();
        $category = Category::OrderBy('name')->get();
        $food = Food::OrderBy('name')->get();
        return view('welcome')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire);
    }
}
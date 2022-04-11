<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    //

    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $user = User::where('email', $request['email'])->first();
        if($user){
           $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
            //    return redirect('/')->withSuccess('Signed in');
            return view('welcome');
           
        }
        else{
            return view('Registration');
        }
        }
      else  return redirect("registration")->withError('Login details are not valid');
    }

    public function registration()
    {
        return view('registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        // $check = User::create($data);
         $check = new User([
            'name' => $request['name'],
            'email' =>$request['email'] ,
            'password' =>Hash::make($request['password']), 
         ]);
        if($check->save()){
            return redirect("dashboard")->withSuccess('You have signed-in'); 
        }
        else{return redirect("dashboard")->withError('You could not sign-in');  }
    }
    

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        //if(Auth::check()){
           return view('welcome');
       // }
  
    //    return redirect("welcome")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
    
        




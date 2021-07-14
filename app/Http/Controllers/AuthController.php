<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
      return view("auth.login");
    }
    
    public function register(){
       return view("auth.register");
    }
    
    public function customRegister(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $data = $req->all();
        $this->create($data);
        
        return redirect()->route("login");
    }
    
    public function create(array $data){
        return User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => Hash::make($data['password']),
        ]);
    }
    
    public function customLogin(Request $req){
        $req->validate([
           'email' => 'required|email',
           'password' => 'required',
        ]);
        
        $cred = $req->only('email','password');
        
        if(Auth::attempt($cred)){
           return redirect()->route("index");
        }
        
        return redirect()->route("login");
    }
    
    public function logout(){
       session()->flush();
       auth()->logout();
       
       return redirect()->route("login");
    }
}
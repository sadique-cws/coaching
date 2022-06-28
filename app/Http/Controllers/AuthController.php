<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        if($req->isMethod("post")){

            $req->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $auth = $req->only("email","password");

            if(Auth::attempt($auth)){
                return redirect()->route("student.index");
            }
            else{
                $req->session()->flash("error","login with incorrect details try again");
                return redirect()->back();
            }
           
            
        }
        return view("auth.login");
    }
    public function signup(Request $req){

        if($req->isMethod("post")){
            $req->validate([
                'name' => 'required',
                'contact' => 'required',
                'email' => 'required:email|unique:users',
                'password' => 'required|min:6'
            ]);

            $user = new User();
            $user->name = $req->name;
            $user->contact = $req->contact;
            $user->email = $req->email;
            $user->password = Hash::make($req->password); 
            $user->save();

            return redirect()->route("login");
        }
        else{
            return view("auth.signup");
        }
    }
    public function logout(Request $req){
            $req->session()->flush();
            Auth::logout();

            return redirect()->route("login");
    }
    
    public function reset_password(){

    }
    public function forget_password(){

    }
    public function verify(){

    }
    public function send_mail(){

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class loginController extends Controller
{
    //
    function index(){
        return view('LoginView');
    }

    function authenticatin(Request $req){
        $req->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);


        if(\Auth::attempt($req->only('email','password'))){
            return redirect('home');
        }else{

            return redirect('login')->withError('Login detail are not valid');
        }


    }

    function callback(){

        return "sonu";
    }




    // facebook login 

    function facebook(){
        return Socialite::driver('facebook');
    }

    function callbackfb(){
        return "sonu";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class signupController extends Controller
{
    //

    function index(){
        return view('signupView');
    }

    function authenticatin(Request $req){
        //return $req;
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' =>\Hash::make($req->password)
        ]);

        if(\Auth::attempt($req->only('email','password'))){
            return redirect('home');
        }else{

            return redirect('signup')->withError('Error');
        }

    }

    function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('login');
    }
}

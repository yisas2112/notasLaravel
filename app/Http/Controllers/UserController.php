<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        $remember = (!empty($request->remember)) ? TRUE : FALSE;
        if(Auth::attempt($credentials)){
            $user = User::where(['email' =>$credentials['email']])->first();
            Auth::login($user, $remember);
            return redirect('/notas');
        }else{
            return redirect('/login')->withErrors('Credenciales inválidas');
        }
        
    }
}

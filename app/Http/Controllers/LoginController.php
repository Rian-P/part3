<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('landing.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $auth = Auth::attempt($credentials);
        $request->session()->regenerate();
            $user = Auth::User();
            return redirect('/dashboard');
        if ($auth) {
            $request->session()->regenerate();
            $user = Auth::User();
            return redirect()->intended('dashboard');
        }else {
            $data['msg']='Username atau Password anda salah';
            return redirect('/login', $data);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


}

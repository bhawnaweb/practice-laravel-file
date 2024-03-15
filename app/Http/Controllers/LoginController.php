<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req) {
        $email = $req->email;
        $pwd = $req->password;
        $record = User::where('email', $email)->where('password', $pwd)->get();
        if ($record->isNotEmpty()) {
            $req->session()->put('uid', $record[0]);
            return redirect('/user/dashboard1');
        } else {
            return redirect('/user/index')->with('msg', 'Invalid Username and password');
        }
    }

    public function logout(Request $req) {
     $req->session()->forget('uid');
     return redirect('/user/index')->with('msg', 'successfully logged out');
    }
    
}


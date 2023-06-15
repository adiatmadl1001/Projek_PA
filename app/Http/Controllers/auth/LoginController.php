<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (auth::check())
        {
            return redirect('main');
        }
        else
        {
            return view('\auth\login');
        }
    }
    public function loginaksi(Request $request)
    {
        $data =[
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ];
        if (auth::Attempt($data))
        {
            return redirect('main');
        }
        else
        {
            Session::flash('error', 'email atau password salah');
            return redirect('/');
        }
    }
    public function logoutaksi()
    {
        auth::logout();
        return redirect('/');
    }
}

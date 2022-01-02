<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AccountController extends Controller
{
    public function login()
    {
        return view('backend.account.login');
    }

    public function postLogin(Request $request)
    {
        $user = user::where('username',$request->username)->where('password',$request->password)->first();
        
        return redirect(route('dashboard_index'));
    }

    public function logout()
    {
        return redirect(route('login'));
    }
}

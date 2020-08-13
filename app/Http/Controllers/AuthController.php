<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function register()
    {
        return view('admin.auth.register');
    }
    public function registrationProcess(Request $request)
    {
        $encryptPassword = bcrypt($request->password);
        $request->merge([
            'password' => $encryptPassword,
        ]);
        User::create($request->all());
        return redirect('/login');
    }
    public function loginProcess(Request $request)
    {
        $credentials    = $request->only('name', 'password');
        $isLoginSuccess = Auth::attempt($credentials);
        if ($isLoginSuccess) {
            return redirect()->intended('/');
        } else {
            return redirect()->back();
        }
    }
}

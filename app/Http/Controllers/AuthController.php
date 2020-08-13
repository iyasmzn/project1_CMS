<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

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
}

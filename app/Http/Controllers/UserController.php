<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->model = new User();
    }
    public function store(Request $request)
    {
        $this->model->create($request->all());
        return redirect('/login');
    }
}

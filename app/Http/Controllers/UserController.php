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
    public function index()
    {
        $users = $this->model->all();
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $this->model->create($request->all());
        return redirect('/admin/users/');
    }
    public function edit($id)
    {
        $user = $this->model->find($id);
        return view(('admin.users.edit'), compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = $this->model->find($id)->update($request->all());
        return redirect(route('admin.users.index'));
    }
    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect(route('admin.users.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->model     = new User();
        $this->imagePath = public_path('img');
    }
    public function index()
    {
        // $this->authorize('viewAny', $this->model);
        $users = $this->model->all();
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        if ($request->photo_file) {
            $request = $this->uploadImage($request);
        }
        $encryptPassword = bcrypt($request->password);
        $request->merge([
            'password' => $encryptPassword,
        ]);
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
        $encryptPassword = bcrypt($request->password);
        $request->merge([
            'password' => $encryptPassword,
        ]);
        $model = $this->model->find($id);
        if ($request->photo_file) {
            $this->removeImage($model->photo);
            $request = $this->uploadImage($request);
        }
        $model->update($request->all());
        return redirect(route('admin.users.index'));
    }
    public function delete($id)
    {
        $model = $this->model->find($id);
        $this->removeImage($model->photo);
        $model->delete();

        return redirect(route('admin.users.index'));
    }
    public function uploadImage($request)
    {
        $img     = $request->file('photo_file');
        $newName = time() . '.' . $img->GetClientOriginalExtension();
        $img->move($this->imagePath, $newName);
        $request->merge([
            'photo' => $newName,
        ]);
        return $request;
    }
    public function removeImage($img)
    {
        $fullPath = $this->imagePath . '/' . $img;
        if ($img && file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}

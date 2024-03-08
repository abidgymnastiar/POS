<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show($id, $name)
    {
        return view('user.profile', ['id' => $id, 'name' => $name]);
    }

    // public function index()
    // {
    //     $user = UserModel::all();
    //     return view('user.index', ['data' => $user]);
    // }

    public function tambah()
    {
        return view('user.user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user/index');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user.user_ubah', ['user' => $user]);
    }

    public function ubah_simpan(Request $request, $id)
    {
        $user = UserModel::find($id);
        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        $user->save();
        return redirect('/user/index');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user/index');
    }

    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user.index', ['data' => $user]);
    }
}

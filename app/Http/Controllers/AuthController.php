<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function index()
    {
        // kita ambil data user lalu simpan pada variabel user
        $user = Auth::user();

        // Kondisi jika user nya ada 
        if ($user) {
            // jika user nya memiliki level admin
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            }
            // jika user nya memiliki level manager 
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }
    public function proses_login(Request $request)
    {
        // kita validasi data yang di inputkan oleh user
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // ambil data request username dan password saja 
        $credential = $request->only('username', 'password');

        // cek jika data username dan password nya valid
        if (Auth::attempt($credential)) {
            // kalau berhasil simpan data user nya ke dalam variabel user
            $user = Auth::user();

            // cek lagi jika level user admin maka arahkan ke halaman admin
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            }
            // jika user nya memiliki level manager 
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
            // jika belum ada role maka ke halaman /
            return redirect()->intended('/');
        }

        // jika ga ada data user yang valid maka kembalikan lagi ke halaman login
        // pastikan kirim pesan error juga kalu login gagal 
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Login gagal, silahkan cek username dan password anda']);
    }

    public function register()
    {
        // tampilkan halaman register
        return view('register');
    }

    // aksi form registrasi 
    public function proses_register(Request $request)
    {
        // validasi data yang di inputkan oleh user
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ]);

        // kalau gagal kembali ke halaman register dengan munculkan pesan error
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // kalau berhasil isi level & hash passwordnya biar secure
        $request['level_id'] = 2;
        $request['password'] = Hash::make($request->password);

        // masukkan semua data pada request ke dalam tabel m_user
        UserModel::create($request->all());

        // Kalau berhasil arahkan ke halaman login
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        // logout itu harus menghapus session yang ada
        $request->session()->flush();

        // lakukan logout
        Auth::logout();

        // arahkan ke halaman login
        return redirect()->route('login');
    }
}

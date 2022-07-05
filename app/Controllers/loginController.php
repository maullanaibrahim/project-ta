<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Karyawan;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
    
        return back()->with('failed', 'Username atau Password Salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function create()
    {
        $data = Karyawan::all();
        return view('login.create', ['data' => $data]);
    }
    
    public function store(Request $request)
    {
     
        $validatedData = $request->validate([
            'nama' => ['required'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255'],
            'divisi' => ['required'],
            'jabatan' => ['required'],
            'nik' => ['required'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/')->with('success', 'Registrasi berhasil. Silakan masuk!');
    }
}
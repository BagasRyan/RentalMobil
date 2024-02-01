<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{

    public function registerView(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginStore(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])){
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('Gagal', 'GAGAL LOGIN !!, Pastikan username dan password benar');
    }

    public function registerStore(Request $request){

        $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'nama' => 'required',
            'telepon' => 'required|numeric',
            'sim' => 'required'
        ]);

        $password = Hash::make($request->password);

        DB::table('users')->insert([
            'username' => $request->username,
            'password' => $password,
            'nama' => $request->nama,
            'no_telp' => $request->telepon,
            'no_sim' => $request->sim
        ]);

        return redirect()->route('login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


}

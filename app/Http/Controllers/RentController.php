<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class RentController extends Controller
{
    public function index(){
        $database = DB::table('mobil')->get();
        $users = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('dashboard', compact('database', 'users'));
    }

    public function create(){
        return view('create');
    }

    public function rentStore(Request $request){

        $gambar = $request->gambar; 
        $namaGambar = $gambar->getClientOriginalName(); 
        $gambar->move('storage/mobil', $namaGambar);


        DB::table('mobil')->insert([
            'users_id' => Auth::user()->id,
            'gambar' => $namaGambar,
            'merk' => $request->merk,
            'model' => $request->model,
            'no_plat' => $request->plat,
            'tarif' => $request->tarif
        ]);

        return redirect()->route('dashboard');
    }

    public function detail($id){
        $data = DB::table('mobil')->where('id',$id)->first();

        //ambil data table users berdasarkan users_id
        $usersId = DB::table('mobil')->where('id', $id)->value('users_id');
        $users = DB::table('users')->where('id', $usersId)->first();

        return view('detail', compact('data', 'users'));
    }

    public function profil(){
        $users = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('profile', compact('users'));
    }

    public function rented($id){
        return view('rent', compact('id'));
    }

    public function rentedStore(Request $request){
        $id = $request->id;

        //gunakan fungsi try catch agar tidak terjadi kecacatan data saat meng insert
        try {

            DB::beginTransaction();
            
            DB::table('tersewa')->insert([
                'id_mobil' => $id,
                'users_id' => Auth::user()->id,
                'tanggal_disewakan' => $request->mulai,
                'tanggal_berakhir' => $request->berakhir
            ]);
    
            DB::table('mobil')->where('id', $id)->update([
                'stok' => 'Disewakan'
            ]);
                   
            
            DB::commit();
        
            return redirect()->route('dashboard');
            } catch (\Exception $e) {
                DB::rollback();

                return redirect()->route('dashboard');
             }
    }

    public function delete($id){

        DB::table('mobil')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function myRentCar(){
         //ambil id_mobil berdasarkan id user yang login
         $idMobil = DB::table('tersewa')->where('users_id', Auth::user()->id)->value('id_mobil');

         $mobil = DB::table('mobil')->where('id', $idMobil)->get();

        return view('myRentCar', compact('mobil'));
    }

    public function myCar(){
        $mobil = DB::table('mobil')->where('users_id', Auth::User()->id)->get();
        

        return view('myCar', compact('mobil'));
    }

}

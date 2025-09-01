<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index(){
        return view('welcome');
    }
    public function komentar(){
        $komen = User::all('komentar','id');
        return view('komentar', compact('komen'));
    }

    public function simpan(Request $request){
        $request->validate([
            'komentar' => 'required',

        ]);
        DB::table('komen')->insert([
            'komentar' => $request->komentar
        ]);
        return redirect()->back();
    }

    public function hapus($id){
        User::destroy($id);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\product;
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
    public function product(){
        return view('layouts.layout');
    }
    public function komentar(){
        $komen = User::all('komentar','id');
        return view('users.komentar', compact('komen'));
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

    public function storeProduct(Request $prodimg, $prodname, $proddesc, $prodtype) {
        $prodimg->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $prodname->validate([
            'product' => 'required',
        ]);
        $proddesc->validate([
            'description' => 'required',
        ]);
        $prodtype->validate([
            'type' => 'required',
        ]);

        if ($prodimg->hasFile('image')) {
            $file = $prodimg->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename); // Saves to storage/app/public/images
            product::create(['image_path' => $filename]);

            return back()->with('success', 'Image uploaded successfully!');
        }

        DB::table('product')->insert([

        ]);
    }
}

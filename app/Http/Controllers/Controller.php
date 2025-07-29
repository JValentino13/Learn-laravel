<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    public function mahasiswa(){
        $data =[
            ['nama' => 'Andi', 'nim' => '12345', 'jurusan' => 'Informatika'],
            ['nama' => 'Budi', 'nim' => '67890', 'jurusan' => 'Sistem Informasi'],
            ['nama' => 'Citra', 'nim' => '11223', 'jurusan' => 'Teknik Komputer']];
        return view('mahasiswa')->with('data', $data);
    }
}

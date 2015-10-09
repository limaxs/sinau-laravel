<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function show_register(){
        return view('registrasi');
    }

    public function show_all(){
        $datas = Mahasiswa::all()->toArray();

        return view('tablemahasiswa')->with('datas',$datas);
    }

    public function delete($id){
        Mahasiswa::find($id)->delete();

        return redirect('/list');
    }

    public function edit($id){
        $data = Mahasiswa::find($id)->toArray();

        return view('editmahasiswa')->with('data',$data);
    }
}

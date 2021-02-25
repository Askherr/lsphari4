<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\Models\Mahasiswa::all();
        return view('mahasiswa.mahasiswa',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function tambah()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $request -> nama,
            'npm' => $request -> npm,
            'materi' => $request -> materi,
            'created_at'=> \Carbon\Carbon::now(), 
            'updated_at'=> \Carbon\Carbon::now()
        ]);
    
          return redirect('/mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        return view('mahasiswa/edit',['mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request, $id)
    {
        $mahasiswa =\App\Models\Mahasiswa::find($id);
        $mahasiswa -> update($request ->all());
        return redirect('/mahasiswa')->with('Sukses','Data berhasil Di update');   
    }
    public function delete($id)
    {
        $mahasiswa =\App\Models\Mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect('/mahasiswa');
    }
}

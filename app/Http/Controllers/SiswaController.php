<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $req)
    {
        Siswa::create($req->all());
//        return $req->all(); // bentuk json
        return redirect('/siswa')->with('sukses', 'Data sukses ditambahkan !');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
//        dd($siswa); // untuk ngecek dulu
        return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data sukses diupdate !');

    }
}

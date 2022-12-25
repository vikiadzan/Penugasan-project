<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //

        return view('mahasiswa.index',[
            'mahasiswas'=>Mahasiswa::latest()->paginate(8) 
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.create',[
            'jurusans'=>Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData= $request->validate([
            'nim' =>'required|unique:mahasiswas|size:10',
            'nama'=> 'required',
            'jenis_kelamin' => 'required',
            'jurusan_id' => 'required',
            'alamat' => 'required'

        ]);
        
        Mahasiswa::create($validateData);
        return redirect('/mahasiswa');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
        return view('mahasiswa.edit',[
            'mahasiswas'=>$mahasiswa,
            'jurusans'=>Jurusan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
        $validateData= $request->validate([
            'nim' =>'required',
            'nama'=> 'required',
            'jenis_kelamin' => 'required',
            'jurusan_id' => 'required',
            'alamat' => 'required'

        ]);
        Mahasiswa::where('id',$mahasiswa->id)->update($validateData);
        return redirect('/mahasiswa')->with('pesan','Data berhasil di Ubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('pesan','Data berhasil di Hapus');
    }
}

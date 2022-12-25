<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('guru.index',[
            'gurus'=>Guru::latest()->paginate(8) 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create',[
     
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
        $validateData= $request->validate([
            'nip' =>'required|unique:gurus|size:12',
            'nama_guru'=> 'required',
            'no_tlp' => 'required',
            'alamat' => 'required'

        ]);
        guru::create($validateData);
        return redirect('/guru');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(guru $guru)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(guru $guru)
    {
        return view('guru.edit',[
            'gurus'=>$guru,
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guru $guru)
    {
        //
        $validateData= $request->validate([
            'nip' =>'required|unique:dosens|size:12',
            'nama_guru'=> 'required',
            'no_tlp' => 'required',
            'alamat' => 'required'
        ]);
        guru::where('id',$guru->id)->update($validateData);
        return redirect('/guru')->with('pesan','Data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(guru $guru)
    {
        //
        guru::destroy($guru->id);
        return redirect('/guru')->with('pesan','Data berhasil di Hapus');
    }
}

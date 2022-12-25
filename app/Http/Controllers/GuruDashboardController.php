<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.guru.index',[
            'gurus'=>guru::latest()->paginate(8) 
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
        return view('dashboard.guru.create',[
        
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
            'nip' =>'required|unique:gurus|size:12',
            'nama_guru'=> 'required',
            'no_tlp' => 'required',
            'alamat' => 'required'
        ]);
        guru::create($validateData);
        return redirect('../gurudashboard');

    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guru  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(guru $guru,$id)
    {
        //
        return view('dashboard.guru.edit',[
            'gurus'=>$guru::find($id),
            
        ]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guru $guru,$id)
    {
        //
        $validateData= $request->validate([
            'nip' =>'required|size:12',
            'nama_guru'=> 'required',
            'no_tlp' => 'required',
            'alamat' => 'required'

        ]);
        guru::where('id',$id)->update($validateData);
        return redirect('/gurudashboard')->with('pesan','Data berhasil di Ubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(guru $guru,$id)
    {
        //
        guru::destroy($id);
        return redirect('/gurudashboard')->with('pesan','Data berhasil di Hapus');
    }
}

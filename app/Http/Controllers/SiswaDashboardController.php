<?php

namespace App\Http\Controllers;


use App\Models\Siswa;

use Illuminate\Http\Request;

class SiswaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.siswa.index',[
            'siswas'=>siswa::latest()->paginate(8) 
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
        return view('dashboard.siswa.create',[
          
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
            'nisn' =>'required|unique:siswas',
            'nama'=> 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'nilai_uas' => 'required'

        ]);
        
        siswa::create($validateData);
        return redirect('../siswadashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa,$id)
    {
        //
        return view('dashboard.siswa.edit',[
            'siswas'=>siswa::find($id),
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa,$id)
    {
        //
        $validateData= $request->validate([
            'nisn' =>'required',
            'nama'=> 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'nilai_uas' => 'required'

        ]);
        siswa::where('id',$id)->update($validateData);
        return redirect('../siswadashboard')->with('pesan','Data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa,$id)
    {
        siswa::destroy($id);
        return redirect('/siswadashboard')->with('pesan','Data berhasil di Hapus');
    }
}

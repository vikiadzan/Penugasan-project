<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.berita.index',[
            'beritas'=>Berita::latest()->paginate(8) 
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
        return view('dashboard.berita.create',[
            'kategoris'=>Kategori::all(),
            'users'=>User::all(),
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
        $validatedData = $request -> validate([
            'title' => 'required',
            'kategori_id' => 'required',
            'file_upload' => 'nullable|image|mimes:png,jpg',
            'body' => 'required'
          ]);
          if ($request -> hasFile('file_upload')) {
            $namaFile = 'img_'.time().'_'.$request -> file_upload -> getClientOriginalName();
            $request -> file_upload -> move('img', $namaFile);
          }
          else {
            $namaFile = '';
          }
          $validatedData['file_upload'] = $namaFile;
          $validatedData['user_id'] = auth() -> user() -> id;
          $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);
          Berita::create($validatedData);
          return redirect('beritadashboard')->with('pesan','Data Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita,$id)
    {
        return view('dashboard.berita.edit',[
            'beritas'=>Berita::find($id),
            'kategoris'=>Kategori::all(),
            'users'=>User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita,$id)
    {
        $validatedData = $request -> validate([
            'title' => 'required',
            'kategori_id' => 'required',
            'file_upload' => 'nullable|image|mimes:png,jpg',
            'body' => 'required'
          ]);
          if ($request -> hasFile('file_upload')) {
            $namaFile = 'img_'.time().'_'.$request -> file_upload -> getClientOriginalName();
            $request -> file_upload -> move('img', $namaFile);
          }
          else {
            $namaFile = '';
          }
          $validatedData['file_upload'] = $namaFile;
          $validatedData['user_id'] = auth() -> user() -> id;
          $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);
          Berita::where('id',$id)->update($validatedData);
          return redirect('beritadashboard')->with('update','Data Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita,$id)
    {
        $cari = Berita::find($id);
        if ($cari -> file_upload='') {
          $image_url = public_path().'/img/'.$cari->file_upload;
          unlink($image_url);
        }
        Berita::destroy($id);
        return redirect('beritadashboard')->with('hapus','Data Deleted Successfully');
    }
}

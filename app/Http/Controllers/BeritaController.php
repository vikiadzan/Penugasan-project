<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index()
    {
        //
        return view('berita.index',[
            'beritas'=>Berita::latest()->paginate(7) 
        ]);
    }

    public function show(Berita $berita, $id)
    {
        return view('berita.show',[
            'berita'=>Berita::find($id) 
        ]);
    }


}

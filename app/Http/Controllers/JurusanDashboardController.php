<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.jurusan.index',[
            'jurusans'=>Jurusan::latest()->paginate(8)
        ]);
    }
}
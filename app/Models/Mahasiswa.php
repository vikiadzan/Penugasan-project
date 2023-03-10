<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }
}

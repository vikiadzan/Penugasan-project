<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
         User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Jurusan::create([
            'nama'=>'Teknologi Informasi'
        ]);

        Jurusan::create([
            'nama'=>'Akuntansi'
        ]);

         Mahasiswa::factory(10)->create();
        Dosen::factory(10)->create();
        Berita::factory(10)->create();

        kategori::create([
            'nama'=>'Web Programing',
        ]);

        kategori::create([
            'nama'=>'Networking',
        ]);

    }
}

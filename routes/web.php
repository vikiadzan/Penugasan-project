<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\DosenDashboardController;
use App\Http\Controllers\BeritaDashboardController;
use App\Http\Controllers\JurusanDashboardController;
use App\Http\Controllers\GuruDashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaDashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/home', function () {
    return view('home');
});


Route::resource('mahasiswa',MahasiswaController::class);
Route::resource('dosen',DosenController::class);
Route::resource('jurusan',JurusanController::class);
Route::resource('guru',GuruController::class);
Route::resource('siswa',SiswaController::class);

Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');

Route::get('/logout',[LoginController::class,'logout']);


Route::post('/login',[LoginController::class,'authenticate']);

Route::get('/berita',[BeritaController::class,'index']);

Route::get('/berita/{id}',[BeritaController::class,'show']);

//Route::post('/dashboard',function (){
   // return view('dashboard.index');
//})->middleware('guest');

Route::resource('mahasiswadashboard',MahasiswaDashboardController::class)->middleware('auth');

Route::resource('dosendashboard',DosenDashboardController::class)->middleware('auth');

Route::resource('beritadashboard',BeritaDashboardController::class)->middleware('auth');


Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('/gurudashboard',[GuruDashboardController::class,'index'])->middleware('auth');
    Route::get('/gurudashboard/create',[GuruDashboardController::class,'create'])->middleware('auth');
    Route::get('/gurudashboard/{id}/edit',[GuruDashboardController::class,'edit'])->middleware('auth');
    Route::post('/gurudashboard',[GuruDashboardController::class,'store'])->middleware('auth');
    Route::get('/gurudashboard/{id}/update',[GuruDashboardController::class,'update'])->middleware('auth');
    Route::get('/gurudashboard/{id}/delete',[GuruDashboardController::class,'delete'])->middleware('auth');

    Route::get('/siswadashboard',[SiswaDashboardController::class,'index'])->middleware('auth');
    Route::get('/siswadashboard/create',[SiswaDashboardController::class,'create'])->middleware('auth');
    Route::get('/siswadashboard/{id}/edit',[SiswaDashboardController::class,'edit'])->middleware('auth');
    Route::post('/siswadashboard',[SiswaDashboardController::class,'store'])->middleware('auth');
    Route::get('/siswadashboard/{id}/update',[SiswaDashboardController::class,'update'])->middleware('auth');
    Route::get('/siswadashboard/{id}/delete',[SiswaDashboardController::class,'delete'])->middleware('auth');

});



Route::group(['middleware' => ['auth','checkRole:guru']],function(){
    Route::get('/siswadashboard',[SiswaDashboardController::class,'index'])->middleware('auth');
    Route::get('/siswadashboard/{id}/edit',[SiswaDashboardController::class,'edit'])->middleware('auth');
    Route::post('/siswadashboard',[SiswaDashboardController::class,'store'])->middleware('auth');
    Route::get('/siswadashboard/{id}/update',[SiswaDashboardController::class,'update'])->middleware('auth');
   

});

Route::group(['middleware' => ['auth','checkRole:siswa']],function(){
    Route::get('/siswadashboard',[SiswaDashboardController::class,'index'])->middleware('auth');
});








<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MengajarController;
use App\Http\Controllers\NilaiController;
use App\http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::controller(IndexController::class)->group(function(){    
    Route::get('/','index');
    Route::post('/login/admin', 'loginAdmin');
    Route::post('/login/siswa', 'loginSiswa');
    Route::post('/login/guru', 'loginGuru');
    Route::get('/home', 'home');
    Route::get('/logout','logout');
});
Route::prefix('/guru')->group(function() {
    Route::get('/index', [GuruController::class, 'index']);
    Route::get('/create', [GuruController::class, 'create']);
    Route::post('/store', [GuruController::class, 'store']);
    Route::get('/edit/{guru}', [GuruController::class, 'edit']);
    Route::post('/update/{guru}', [GuruController::class, 'update']);
    Route::get('/destroy/{guru}', [GuruController::class, 'destroy']);

});
Route::prefix('/jurusan')->group(function() {
    Route::get('/index', [JurusanController::class, 'index']);
    Route::get('/create', [JurusanController::class, 'create']);
    Route::post('/store', [JurusanController::class, 'store']);
    Route::get('/edit/{jurusan}', [JurusanController::class, 'edit']);
    Route::post('/update/{jurusan}', [JurusanController::class, 'update']);
    Route::get('/destroy/{jurusan}', [JurusanController::class, 'destroy']);

});
Route::prefix('/kelas')->group(function() {
    Route::get('/index', [KelasController::class, 'index']);
    Route::get('/create', [KelasController::class, 'create']);
    Route::post('/store', [KelasController::class, 'store']);
    Route::get('/edit/{kelas}', [KelasController::class, 'edit']);
    Route::post('/update/{kelas}', [KelasController::class, 'update']);
    Route::get('/destroy/{kelas}', [KelasController::class, 'destroy']);

});
Route::prefix('/mapel')->group(function() {
    Route::get('/index', [MapelController::class, 'index']);
    Route::get('/create', [MapelController::class, 'create']);
    Route::post('/store', [MapelController::class, 'store']);
    Route::get('/edit/{mapel}', [MapelController::class, 'edit']);
    Route::post('/update/{mapel}', [MapelController::class, 'update']);
    Route::get('/destroy/{mapel}', [MapelController::class, 'destroy']);

});
Route::prefix('/siswa')->group(function(){
    Route::get('/index', [SiswaController::class,'index']);
    Route::get('/create', [SiswaController::class,'create']);
    Route::post('/store', [SiswaController::class,'store']);
    Route::get('/edit/{siswa}', [SiswaController::class,'edit']);
    Route::post('/update/{siswa}', [SiswaController::class,'update']);
    Route::get('/destroy/{siswa}', [SiswaController::class,'destroy']);
});
Route::prefix('/mengajar')->group(function(){
    Route::get('/index', [MengajarController::class,'index']);
    Route::get('/create', [MengajarController::class,'create']);
    Route::post('/store', [MengajarController::class, 'store']);
    Route::get('/edit/{mengajar}', [MengajarController::class, 'edit']);
    Route::post('/update/{mengajar}', [MengajarController::class, 'update']);
    Route::get('/destroy/{mengajar}', [MengajarController::class, 'destroy']);
});
Route::prefix('/nilai')->group(function(){
    Route::get('/index', [NilaiController::class, 'index']);
    Route::get('/create', [NilaiController::class, 'create']);
    Route::post('/store', [NilaiController::class, 'store']);
    Route::get('/edit/{nilai}', [NilaiController::class, 'edit']);
    Route::post('/update/{nilai}', [NilaiController::class, 'update']);
    Route::get('/destroy/{nilai}', [NilaiController::class, 'destroy']);
});

Route::get('/home',[IndexController::class,'home']);
Route::get('/guru/home',[IndexController::class,'home']);
Route::get('/jurusan/home',[IndexController::class,'home']);
Route::get('/kelas/home',[IndexController::class,'home']);
Route::get('/mapel/home',[IndexController::class,'home']);
Route::get('/siswa/home',[IndexController::class,'home']);
Route::get('/mengajar/home',[IndexController::class,'home']);
Route::get('/nilai/home', [IndexController::class, 'home']);

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
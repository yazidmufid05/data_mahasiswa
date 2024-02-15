<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Salam
Route::get('/salam', function(){
    return "Assalamualaikum My Friend, Selamat Belajar Laravel";
});

//Routing dengan Parameter
Route::get('/pegawai/{nama}/{divisi}', function($nama,$divisi){
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Menambahkan Route /kabar
Route::get('/kabar', function(){
    return view('kondisi');
});

//Route Data Mahasiswa
Route::get(
'/mahasiswa',
[MahasiswaController::class, 'dataMahasiswa']
);

//Tambahkan route baru di routes/web.php
Route::get('/pegawai',[PegawaiController::class, 'index']);



Auth::routes();

Route::get(
    '/home',
    [HomeController::class, 'index']
    );
    

    Route::get(
        '/aboutus',[HomeController::class, 'aboutus']);
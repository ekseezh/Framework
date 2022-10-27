<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/Mahasiswa', [MahasiswaController::class,'index']);

Route::get('/Mahasiswa/create', [MahasiswaController::class,'create']);

Route::post('Mahasiswa/input', function (Request $req){
    echo"<pre>";
    print_r($req->post());

});

Route::get('/nama', function (){
    return view ('home');
})->middleware('test1');

Route::get('/home', function (Request $request){
    echo "<h1>Ini Home</h1>";
});

Route::get('/middleware1', function(){
    echo"Berhasil";
})->middleware('Middleware1');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\daftar_articleController;
use App\Http\Controllers\filsafatController;
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

// try{
//     DB::connection()->getPdo();
//     dd("terkoneksi");
// }
// catch(\exception $e){
//     dd("ggal". $e->getMessage());
// }
Route::get('/home', [daftar_articleController::class, 'show']);
Route::get('/filsafat', [filsafatController::class, 'show']);


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('filsafat', function () {
//     return view('filsafat');
// });
// Route::get('home', function () {
//     return view('home');
// });
Route::get('sejarah', function () {
    return view('sejarah');
});

Route::get('halo', function () {
    return view('assdasf.halo');
});

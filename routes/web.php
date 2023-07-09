<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\daftar_articleController;
use App\Http\Controllers\filsafatController;
use App\Http\Controllers\sejarahController;

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
Route::get('/sejarah', [sejarahController::class, 'show']);
// Route::get('/articlesejarah.satu', [sejarahController::class, 'showArticle']);


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('filsafat', function () {
//     return view('filsafat');
// });
// Route::get('home', function () {
//     return view('home');
// });
// Route::get('sejarah', function () {
//     return view('sejarah');
// });



//Article Sejarah
Route::get('articlesejarah.satu', function () {
    return view('articlesejarah.satu');
});
Route::get('articlesejarah.tigaa', function () {
    return view('articlesejarah.tigaa');
});
Route::get('articlesejarah.empatbelas', function () {
    return view('articlesejarah.empatbelas');
});
Route::get('articlesejarah.limabelas', function () {
    return view('articlesejarah.limabelas');
});
Route::get('articlesejarah.enambelas', function () {
    return view('articlesejarah.enambelas');
});
Route::get('articlesejarah.tujuhbelas', function () {
    return view('articlesejarah.tujuhbelas');
});
Route::get('articlesejarah.delapanbelas', function () {
    return view('articlesejarah.delapanbelas');
});
Route::get('articlesejarah.sembilanbelas', function () {
    return view('articlesejarah.sembilanbelas');
});
Route::get('articlesejarah.duapuluh', function () {
    return view('articlesejarah.duapuluh');
});
Route::get('articlesejarah.duapuluhsatu', function () {
    return view('articlesejarah.duapuluhsatu');
});
Route::get('articlesejarah.duapuluhdua', function () {
    return view('articlesejarah.duapuluhdua');
});




//Article Filsafat
Route::get('articlefilsafat.dua', function () {
    return view('articlefilsafat.dua');
});
Route::get('articlefilsafat.empat', function () {
    return view('articlefilsafat.empat');
});
Route::get('articlefilsafat.lima', function () {
    return view('articlefilsafat.lima');
});
Route::get('articlefilsafat.enam', function () {
    return view('articlefilsafat.enam');
});
Route::get('articlefilsafat.tujuh', function () {
    return view('articlefilsafat.tujuh');
});
Route::get('articlefilsafat.delapan', function () {
    return view('articlefilsafat.delapan');
});
Route::get('articlefilsafat.sembilan', function () {
    return view('articlefilsafat.sembilan');
});
Route::get('articlefilsafat.sepuluh', function () {
    return view('articlefilsafat.sepuluh');
});
Route::get('articlefilsafat.sebelas', function () {
    return view('articlefilsafat.sebelas');
});
Route::get('articlefilsafat.duabelas', function () {
    return view('articlefilsafat.duabelas');
});
Route::get('articlefilsafat.tigabelas', function () {
    return view('articlefilsafat.tigabelas');
});

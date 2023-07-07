<?php

namespace App\Http\Controllers;

use App\Models\Tb_daftar_articles;
use Illuminate\Http\Request;

class daftar_articleController extends Controller
{
    public function show()
    {
        $daftar_article = Tb_daftar_articles::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19])->get();
        return view('home', compact('daftar_article'));
    }
}

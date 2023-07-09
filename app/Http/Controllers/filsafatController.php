<?php

namespace App\Http\Controllers;

use App\Models\Tb_daftar_articles;
use Illuminate\Http\Request;

class filsafatController extends Controller
{
    public function show()
    {
        $filsafat = Tb_daftar_articles::where('kategori', '2')
            ->whereIn('id', [2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13])
            ->get();

        return view('filsafat', compact('filsafat'));
    }
}

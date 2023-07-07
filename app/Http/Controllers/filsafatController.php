<?php

namespace App\Http\Controllers;

use App\Models\Tb_daftar_articles;
use Illuminate\Http\Request;

class filsafatController extends Controller
{
    public function show()
    {
        $filsafat = Tb_daftar_articles::where('kategori', '2')
            ->whereIn('id', [1, 2, 3, 4, 5, 6])
            ->get();

        return view('filsafat', compact('filsafat'));
    }
}

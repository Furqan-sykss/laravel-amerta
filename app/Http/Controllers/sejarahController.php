<?php

namespace App\Http\Controllers;

use App\Models\Tb_daftar_articles;
use Illuminate\Http\Request;

class sejarahController extends Controller
{
    public function show()
    {
        $kategori = '2'; // Ganti dengan kategori yang diinginkan
        $id = [2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]; // Ganti dengan ID yang diinginkan

        $filsafat = Tb_daftar_articles::whereHas('category', function ($query) use ($kategori) {
            $query->where('nama', $kategori);
        })->whereIn('id', $id)->get();

        return view('sejarah', compact('filsafat'));
    }
}

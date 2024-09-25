<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PersegiPanjangController extends Controller
{
    public function hitung(Request $request)
    {
        $panjang = $request->panjang;
        $lebar = $request->lebar;

        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        return new PostResource(true, 'Berhasil hitung persegi panjang!', [
            'luas' => $luas,
            'keliling' => $keliling
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class KubusController extends Controller
{
    public function hitung(Request $request)
    {
        $sisi = $request->sisi;

        $volume = $sisi ** 3;
        $luasPermukaan = 6 * ($sisi ** 2);

        return new PostResource(true, 'Berhasil hitung kubus!', [
            'volume' => $volume,
            'luas_permukaan' => $luasPermukaan
        ]);
    }
}

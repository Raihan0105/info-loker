<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriLokerController extends Controller
{
    public function list(): View
    {
        $data = KategoriLoker::all();
        return view('kategori_loker.list', ['data' => $data]);
    }
}

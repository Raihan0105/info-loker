<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Loker;
use App\Models\KategoriLoker;
use Illuminate\View\View;

class LokerController extends Controller
{
    public function list(): View
    {
        $data = Loker::all();
        return view('loker.list', [ 'data' => $data]);
    }

    public function list_kategori($id): View
    {
        $data = Berita:: where ("kategori_id", $id)->get();
        $dataKategori = KategoriLoker:: find ($id);
        return view('loker.kategori', [ 'data' => $data, 'kategori'=>$dataKategori ]);
    }

    public function detail($id): View
    {
        $data = Loker:: find($id);
        return view('loker.detail', ['data' => $data]);
    }
}

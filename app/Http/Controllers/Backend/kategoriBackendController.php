<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriBackendController extends Controller
{
    public function indexKategori()
    {
        $kategori_buku = DB::table('kategori_buku')
        ->select(
            'kategori_buku.*',
            'users.name as created_by',
        )
            ->orderBy('kategori_buku.id', 'DESC')
            ->join('users', 'users.id', 'kategori_buku.created_by')
            ->paginate(5);

        return view('Backend.kategori.index', compact('kategori_buku'));
    }
}

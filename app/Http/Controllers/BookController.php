<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookController extends Controller
{
    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request){
        $today = \Carbon\Carbon::now();
        DB::beginTransaction();

        DB::insert("
            INSERT INTO books
            (judul, isbn, penulis, penerbit, tahun_terbit, jumlah_buku, harga_pokok, harga_jual, ppn, diskon, created_at, updated_at)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", [$request->judul, $request->isbn, $request->penulis, $request->penerbit, $request->tahun_terbit, $request->jumlah_buku, $request->harga_pokok, $request->harga_jual, $request->ppn, $request->diskon, $today, $today]);

        DB::commit();

        return redirect('/index/book')->with('success','Student edited successfully.');
    }

    public function index()
    {
        $books = Book::get();
        return view('buku.index', compact('books'));
    }
}

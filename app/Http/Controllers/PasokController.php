<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pasok;
use App\Book;
use App\Distributor;

class PasokController extends Controller
{
    public function index()
    {
        $pasoks = Pasok::get();
        return view('pasok.index', compact('pasoks'));
    }

    public function create(){
        $books = Book::orderBy('created_at', 'ASC')->get();
        $distributors = Distributor::orderBy('created_at', 'ASC')->get();
        
        return view('pasok.create', compact('books', 'distributors'));
    }

    public function store(Request $request){
        $today = \Carbon\Carbon::now();

        $transaksi = Pasok::create([
            'id_distributor' => $request->distributor,
            'id_buku' => $request->buku,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        $transaksi->book->where('id_buku', $transaksi->id_buku)
                        ->update([
                            'jumlah_buku' => ($transaksi->book->jumlah_buku + $request->jumlah),
                            ]);

        return redirect('/index/pasok')->with('success','Added successfully.');
    }
}

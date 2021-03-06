<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Book;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::get();
        return view('transaction.index', compact('transactions'));
    }

    public function create(){
        $getRow = Transaction::orderBy('id_transaksi', 'DESC')->get();
        $rowCount = $getRow->count();
        $lastId = $getRow->first();

        $bukus = Book::where('jumlah_buku', '>', 0)->get();
        
        return view('transaction.create', compact('lastId', 'bukus'));
    }

    public function store(Request $request){
        $today = \Carbon\Carbon::now();

        $transaksi = Transaction::create([
            'id_buku' => $request->buku_id,
            'id_kasir' => Auth::user()->id,
            'jumlah_buku' => $request->jumlah,
            'bayar' => $request->bayar,
            'kembalian' => $request->kembalian,
            'total_harga' => $request->total,
            'tanggal' => $today,
            'created_at' => $today,
            'updated_at' =>$today,
        ]);

        $transaksi->book->where('id_buku', $transaksi->id_buku)
                        ->update([
                            'jumlah_buku' => ($transaksi->book->jumlah_buku - $request->jumlah),
                            ]);

        return redirect('/index/transaction')->with('success','Added successfully.');
    }

    public function cetak_pdf()
    {
    	$transactions = Transaction::all();
 
    	$pdf = PDF::loadview('pdf/transaction_pdf',['transactions'=>$transactions]);
    	return $pdf->stream();
    }

    public function cetak_struk($id_transaksi)
    {
    	$transactions = Transaction::findOrFail($id_transaksi);
 
    	$pdf = PDF::loadview('pdf/transaction_struk',['transactions'=>$transactions]);
    	return $pdf->stream();
    }
}

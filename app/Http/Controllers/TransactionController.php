<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Book;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::get();
        return view('transaction.index', compact('transactions'));
    }

    public function create(){
        $getRow = Transaction::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        $lastId = $getRow->first();

        $bukus = Book::where('jumlah_buku', '>', 0)->get();
        
        return view('transaction.create', compact('lastId', 'bukus'));
    }
}

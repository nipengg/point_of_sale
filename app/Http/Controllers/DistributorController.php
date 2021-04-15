<?php

namespace App\Http\Controllers;
use App\Distributor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Distributor::get();
        return view('distributor.index', compact('distributors'));
    }

    public function create(){
        $getRow = Distributor::orderBy('id_distributor', 'DESC')->get();
        $rowCount = $getRow->count();
        $lastId = $getRow->first();
        
        return view('distributor.create', compact('lastId'));
    }

    public function store(Request $request){
        $today = \Carbon\Carbon::now();

        Distributor::create([
            'nama_distributor' => $request->name,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        return redirect('/index/distributor')->with('success','Added successfully.');
    }
}

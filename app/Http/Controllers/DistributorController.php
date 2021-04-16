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

    public function edit($id_distributor){
        $distributors = Distributor::findOrFail($id_distributor);
        return view('distributor.edit', compact('distributors'));
    }

    public function update(Request $request, $id_distributor){
        Distributor::find($id_distributor)->update([
               'nama_distributor' => $request->get('name'),
               'alamat' => $request->get('alamat'),
               'telpon' => $request->get('telpon'),
        ]);

        return redirect('/index/distributor')->with('success','Distributor edited successfully.');
    }

    public function destroy($id_distributor)
    {
        Distributor::find($id_distributor)->delete();
        return redirect('/index/distributor')->with('success','Distributor deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }

    public function create(){
        $getRow = User::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        $lastId = $getRow->first();
        return view('user.create', compact('lastId'));
    }

    public function store(Request $request){
        $today = \Carbon\Carbon::now();
        DB::beginTransaction();

        DB::insert("
            INSERT INTO users
            (id, name, username, email, password, telepon, level, remember_token, created_at, updated_at)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", [$request->id, $request->name, $request->username, $request->email, bcrypt($request->password), $request->telepon, $request->level, '', $today, $today]);

        DB::commit();

        return redirect('/index/user')->with('success','Added successfully.');
    }
}

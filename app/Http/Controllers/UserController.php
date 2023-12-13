<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function showAllUsers()
    {
        if (
            Auth::user()->role != 'admin'
        ) {
            abort(403);
        }
        $users = User::all();
        return view("user", [
            'title' => 'User List',
            'users' => $users
        ]);
    }

    public function insertUsers(Request $request)
    {
        $data = User::create($request->all());
        // dd($request);
        return redirect()->route("users")->with("sukses", "Data berhasil ditambahkan");
    }
    public function deleteUsers($id){
        $data= User::find($id);
        $data-> delete();
        return redirect()->route('users')->with('sukses','Data Telah Di Hapus !!!');
    }
    
}

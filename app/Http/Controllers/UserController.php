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
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('user-photos/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        // dd($request);
        return redirect()->route("users")->with("sukses", "Data berhasil ditambahkan");
    }
    public function deleteUsers($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('users')->with('sukses', 'Data Telah Di Hapus !!!');
    }

    public function viewUsers($id)
    {
        $data = User::find($id);
        // dd($request);
        return view('userview', compact('data'));
    }

    public function editUsers($id)
    {
        $data = User::find($id);
        return view('users-edit', compact('data'));
    }

    public function updateusers(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')) {
            // dd($request-> file('foto'));
            $request->file('foto')->move('user-photos/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        $data->save();
        return redirect()->route('users')->with('sukses', 'Data Sudah Ter Edit !!!');
    }
}

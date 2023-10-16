<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function showAllUsers()
    {
        $users = User::all();
        return view("user", [
            'title' => 'User List',
            'users' => $users
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    function getAllPlaylists()
    {
        $playlists = Playlist::all();
        return view("index")->with('playlists', $playlists);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function showBySlug($slug)
    {
        $playlist = Playlist::where('slug', $slug)->first();
        $songs = Song::where('playlist_id', $playlist->id)->with('artist')->get();
        $totalDurationSeconds = 0;

        foreach ($songs as $song) {
            if (preg_match('/^(\d+):(\d+):(\d+)$/', $song['duration'], $matches)) {
                $hours = (int)$matches[1];
                $minutes = (int)$matches[2];
                $seconds = (int)$matches[3];
                $songDurationSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

                $totalDurationSeconds += $songDurationSeconds;
            } else {
                echo "Error: Format durasi tidak benar pada lagu dengan judul '" . $song['title'] . "'.";
            }
        }

        $totalDurationHours = floor($totalDurationSeconds / 3600);
        $totalDurationMinutes = floor(($totalDurationSeconds % 3600) / 60);
        $totalDurationSeconds = $totalDurationSeconds % 60;
        $totalDurationFormatted = sprintf("%02d:%02d:%02d", $totalDurationHours, $totalDurationMinutes, $totalDurationSeconds);
        $totalSongs = count($songs);

        $totalDurationText = '';
        if ($totalDurationHours > 0) {
            $totalDurationText .= $totalDurationHours . ' minute' . ($totalDurationHours > 1 ? 's' : '') . ' ';
        }
        if ($totalDurationMinutes > 0) {
            $totalDurationText .= $totalDurationMinutes . ' second' . ($totalDurationMinutes > 1 ? 's' : '') . ' ';
        }
        if ($totalDurationSeconds > 0) {
            $totalDurationText .= $totalDurationSeconds . ' milisecond' . ($totalDurationSeconds > 1 ? 's' : '') . ' ';
        }

        return view('songs', compact("playlist", "songs", "totalDurationText", "totalSongs"));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Playlists;

class ShowPlaylists extends Controller
{
    public function AllPlaylists(Request $request){
        $Playlists = DB::table('playlists')->get();
        $Playlists->toArray();
        return view('playlists.index',['playlists' => $Playlists]);
    }
}

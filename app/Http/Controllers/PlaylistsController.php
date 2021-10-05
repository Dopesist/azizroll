<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Playlists;

class PlaylistsController extends Controller
{

    
    public function __construct(){
        $this->middleware('auth');
    }

    public function Dashboard(){
        $Playlists = playlists::latest()->GET();
        return view('dashboard',compact('Playlists'));
    }
    
    public function AddPL(Request $request){
        $validated = $request->validate([
        'Playlist_Name' => 'required',
        'Playlist_Link' => 'required',
        'Playlist_Poster' => 'required|mimes:jpg,jpeg,png,gif,webp',
        ]);

        // Posters
        $Playlist_Poster = $request->file('Playlist_Poster');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($Playlist_Poster->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'images/Poster/';
        $last_poster = $up_location.$img_name;
        $Playlist_Poster->move($up_location,$img_name);

        //Database Insert
        playlists::insert([
            'Playlist_Name' => $request->Playlist_Name,
            'Playlist_Link' => $request->Playlist_Link,
            'Playlist_Poster' => $last_poster,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->Route('dashboard')->with('success', 'Playlist Published Successfully.');

    }

    public function AddPLPage(){
        $Playlists = playlists::latest()->GET();
        return view('playlists.AddPL',compact('Playlists'));
    }

    public function Edit($id){
        $playlists = playlists::find($id);
        return view('playlists.edit', compact('playlists'));
    }

    public function Update(Request $request, $id){

        $validated = $request->validate([
            'Playlist_Name' => 'required',
            'Playlist_Link' => 'required',
            'Playlist_Poster' => 'required|mimes:jpg,jpeg,png,gif,webp',
            ]);
    
        // Posters
        $old_poster = $request->old_poster;
        $Playlist_Poster = $request->file('Playlist_Poster');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($Playlist_Poster->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'images/Poster/';
        $last_poster = $up_location.$img_name;
        $Playlist_Poster->move($up_location,$img_name);
        
        unlink($old_poster);
        //Database Update
        playlists::find($id)->update([
            'Playlist_Name' => $request->Playlist_Name,
            'Playlist_Link' => $request->Playlist_Link,
            'Playlist_Poster' => $last_poster,
        ]);

        return Redirect()->Route('dashboard')->with('success', 'Playlist Updated Successfully.');

    }

    public function Delete($id){

        $poster = Playlists::find($id);
        $old_poster = $poster->Playlist_Poster;
        unlink($old_poster);

        
        Playlists::find($id)->delete();
        return Redirect()->Route('dashboard')->with('deleted', 'Playlist Updated Successfully.');

    }

}

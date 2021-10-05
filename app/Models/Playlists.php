<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlists extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'Playlist_Name',
        'Playlist_Link',
        'Playlist_Poster', 
    ];
}

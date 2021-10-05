<title>عَــزّو | Playlists</title> 
@extends('layouts.master')
@section('content')
<br><br><br><br><br><br>
<h1>MUSIC PLAYLISTS <i class="fas fa-music"></i></h1>
<br><br><br><br><br><br>

  <div class="py-14">
      <div class="container">
          <div class="row">

                <!-- Show Playlists -->
                @PHP($x = 1)
                @PHP($y = 2)
                
@foreach($playlists as $pl)
@if ($pl->id == $x)
  <a href="{{ $pl->Playlist_Link }}"><img src="{{ asset($pl->Playlist_Poster) }}" width="450" height="450"></a>
  @php($x+=2)
  @endif
@if($pl->id==$y)
<a href="{{ $pl->Playlist_Link }}"><img src="{{ asset($pl->Playlist_Poster) }}" width="450" height="450"></a><br>
@php($y+=2)
@endif
  @endforeach

            </div>
          </div>
          </div>
      </div>
  </div>
  <br><br><br><br><br><br>
<h3><a href="{{ asset('/') }}"><i class="fas fa-step-backward"></i> BACK</a></h3>
@endsection
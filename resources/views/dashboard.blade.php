<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
          Hi <b> {{Auth::user()->name}} </b>
    <b style="float:right">Public Playlists:
      {{ count($Playlists) }} <br>
      {{-- Hidden Playlists: {{ count($Trashed) }} --}}
      </b></h2>
  </x-slot>
  <div class="py-14">
      <div class="container">
          <div class="row">

                <!-- Show Playlists -->
            <div class="col-md-12">
              <div class="card">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{ session('success') }}</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                @elseif(session('deleted'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{ session('deleted') }}</strong>

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
                <div class="card-header">Playlists</div>
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Playlist Name</th>
    <th scope="col">Link</th>
    <th scope="col">Created at</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
@php ($i = 1)
@foreach($Playlists as $pl)
  <tr>
    <th scope="row">{{$i++}}</th>
    <td>{{ $pl->Playlist_Name }}</td>
    <td><a href="{{ $pl->Playlist_Link }}"><img src="{{ asset($pl->Playlist_Poster) }}" width="500" height="500"></a></td>
  <td>{{ $pl->created_at->diffForHumans() }}</td>
  <td>
    <a href="{{ url('playlists/edit/'.$pl->id) }}" class="btn btn-outline-secondary">Edit</a>
    <a href="{{ url('/playlists/delete/'.$pl->id) }}" onclick="return confirm('Are you sure you want to delete this playlist?')" class="btn btn-outline-danger">Delete</a>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
            </div>
          </div>
          </div>
      </div>
  </div>
</x-app-layout>
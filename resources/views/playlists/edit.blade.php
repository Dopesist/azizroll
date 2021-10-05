<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
            <div class="col-md-8">
              <div class="card">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{ session('success') }}</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
                <div class="card-header"></div>
                Update Playlist
              </div>

              <div class="card-body">
                <form action="{{ url('playlists/update/'.$playlists->id) }}" method="post" enctype="multipart/form-data">
                @csrf 
  <div class="mb-3">
    <input type="hidden" name="old_poster" value="{{ $playlists->Playlist_Poster }}">
    <label for="exampleInputEmail1" class="form-label">Playlist Name</label>
    <input type="Text" name="Playlist_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $playlists->Playlist_Name }}">
    @error('Playlist_Name')
    <span class="text-danger"><b>* {{ $message }}</b></span>
  @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Playlist Link</label>
    <input type="text" name="Playlist_Link" class="form-control" value="{{ $playlists->Playlist_Link }}">
    @error('Playlist_Link')
      <span class="text-danger"><b>{{ $message }}</b></span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Playlist Poster</label>
    <input type="file" name="Playlist_Poster" class="form-control" id="exampleInputPassword1" value="{{ $playlists->Playlist_Poster }}">
  </div>
  <div class="form-group">
    <img src="{{ asset($playlists->Playlist_Poster) }}" width="500" height="500">
  </div>
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
</div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
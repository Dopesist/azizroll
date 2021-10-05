<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            Hi <b> {{Auth::user()->name}} </b>
			<b style="float:right">Public Playlists:
        {{ count($Playlists) }} <br>
        </b></h2>
    </x-slot>
    <div class="py-14">
        <div class="container">
            <div class="row">

                  <!-- Create Playlist -->
            <div class="col-md-12"><br><br>
              <div class="card">
                <div class="card-header"</div>
                Create Playlist
              </div>
              <div class="card-body">
              <form action="{{ route('save.Playlists') }}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Playlist Name</label>
    <input type="Text" name="Playlist_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('Playlist_Name')
      <B class="text-danger"> * {{ $message }}</b>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Playlist Link</label>
    <input type="text" name="Playlist_Link" class="form-control" id="exampleInputPassword1">
    @error('Playlist_Link')
      <B class="text-danger"> * {{ $message }}</b>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Playlist Poster</label>
    <input type="file" name="Playlist_Poster" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('Playlist_Poster')
    <B class="text-danger"> * {{ $message }}</b>
    @enderror
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
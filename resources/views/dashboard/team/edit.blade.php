@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
    <h3>Our Team</h1>
  </div>

  @if (session()->has('success'))
  <div class= "alert alert-success" role="alert">
    {{ session('success') }}
  </div>

  @endif

  <form method="post" action="/dashboard/ourTeam/{{ $our->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{ old('nama', $our->nama) }}">
        @error('nama')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <input type="text" class="form-control @error('role') is-invalid @enderror" id="role"  name="role" value="{{ old('role', $our->role) }}">
        @error('role')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="team" class="form-label">Divisi</label>
        <select class="form-select" name='team_id'>
            @foreach ( $team as $team )
            @if ($our->team_id != 0)
                @if (old('team_id', $our->team_id)== $team->id)
                <option value="{{ $team->id }}" selected>{{ $team->nama }}</option>
                    @else
                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                @endif

            @else
                @if (old('team_id', $our->team_id)== $team->id)
                    <option value="{{ $team->id }}" selected>{{ $team->nama }}</option>
                        @else
                        <option value="0">Primary</option>
                @endif


            @endif


            @endforeach

          </select>
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input type="hidden" name="oldImage" value="{{ $our->img }}">
            @if($our->img)
            <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="{{ asset('storage/' . $our->img) }}" alt="">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5" src="" alt="">
            @endif
        <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img" onchange="previewImage()">
        @error('img')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage(){

    const image = document.querySelector('#img');
    const imagePreview= document.querySelector('.img-preview');
    imagePreview.style.display='block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
    imagePreview.src =oFREvent.target.result;
    };
    };
  </script>

@endsection

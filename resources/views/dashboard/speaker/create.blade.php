@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create</h1>
    <h3>Our Speaker</h1>
  </div>

  @if (session()->has('success'))
  <div class= "alert alert-success" role="alert">
    {{ session('success') }}
  </div>

  @endif

  <form method="post" action="/dashboard/ourSpeaker/" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{ old('nama') }}">
        @error('nama')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="speaker" class="form-label">Divisi</label>
        <select class="form-select" name='speaker_id'>
            @foreach ( $speaker as $speaker )
            @if (old('speaker_id')== $speaker->id)
            <option value="{{ $speaker->id }}" selected>{{ $speaker->nama }}</option>
                @else
                <option value="{{ $speaker->id }}">{{ $speaker->nama }}</option>
            @endif

            @endforeach

          </select>
      </div>

      <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5" src="" alt="" >
        <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img" onchange="previewImage()">
        @error('img')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

    <div class="mb-3">
        <label for="text" class="form-label">Deskripsi</label>
        <input id="text" type="hidden" name="text" value="{{ old('text') }}">

        <trix-editor input="text" ></trix-editor>
        @error('text')
        <p class = 'text-danger'>
            {{ $message }}
        </p>
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

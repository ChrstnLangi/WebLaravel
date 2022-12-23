@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
    <h3>Pendaftaran</h1>
  </div>

  @if (session()->has('success'))
  <div class= "alert alert-success" role="alert">
    {{ session('success') }}
  </div>

  @endif

  <form method="post" action="/pendaftaran/{{ $daftar->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{ old('nama', $daftar->nama) }}">
        @error('nama')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="page_id" class="form-label">Program</label>
        <select class="form-select" name='page_id'>
            @foreach ( $program as $program )
            @if (old('program_id', $daftar->page_id)== $program->id)
            <option value="{{ $program->id }}" selected>{{ $program->judul }}</option>
                @else
                <option value="{{ $program->id }}">{{ $program->judul }}</option>
            @endif

            @endforeach

          </select>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"  name="email" value="{{ old('email', $daftar->email) }}">
        @error('email')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="nohp" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp"  name="nohp" value="{{ old('nohp', $daftar->nohp) }}">
        @error('nohp')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name='status'>
            @foreach ( $status as $status )
            @if (old('program_id', $daftar->status)== $status['id'])
            <option value="{{ $status['id'] }}" selected>{{ $status['text'] }}</option>
                @else
                <option value="{{ $status['id'] }}">{{ $status['text'] }}</option>
            @endif

            @endforeach

          </select>
      </div>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    title.addEventListener('change', function(){
        fetch('/dashboard/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage(){

    const image = document.querySelector('#image');
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

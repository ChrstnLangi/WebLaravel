@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
    <h3>Text</h1>
  </div>

  <div class="col-lg-8">

    <form method="post" action="/dashboard/page/{{ $page->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{ old('title', $page->judul) }}">
        </div>

        @foreach ($text as $text)
        <div class="mb-3">
            <label for="text{{ $text->id }}" class="form-label">Text {{ $loop->iteration }} </label>
            <input id="text{{ $text->id }}" type="hidden" name="text{{ $text->id }}" value="{{ old('title', $text->text) }}">
            <trix-editor input="text{{ $text->id }}"></trix-editor>
        </div>
        @endforeach



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>

@endsection

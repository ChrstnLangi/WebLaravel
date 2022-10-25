@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
    <h3>Image</h1>
  </div>

  <div class="col-lg-8">

    <form method="post" action="/dashboard/gambar/{{ $page->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf

        @foreach ($gambar as $gambar)
        <div class="mb-3">

            <label for="image{{ $gambar->id }}" class="form-label">Image {{ $loop->iteration }}</label>
            <input type="hidden" name="oldImage{{ $gambar->id }}" value="{{ $gambar->img }}">
            @if($gambar->img)
            <img class="img-preview{{ $gambar->id }} img-fluid mb-3 col-sm-5 d-block" src="{{ asset('storage/' . $gambar->img) }}" alt="">
            @else
            <img class="img-preview{{ $gambar->id }} img-fluid mb-3 col-sm-5" src="" alt="">
            @endif

            <input class="form-control" type="file" id="image{{ $gambar->id }}" name="image{{ $gambar->id }}" onchange="previewImage{{ $gambar->id }}()">
        </div>
        @endforeach



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
    @for ($i = 0; $i<$gambar->count(); $i++)
    function previewImage{{ $gambar->skip($i)->first()->id }}(){

        const image{{ $gambar->skip($i)->first()->id }} = document.querySelector('#image{{ $gambar->skip($i)->first()->id }}');
        const imagePreview{{ $gambar->skip($i)->first()->id }}= document.querySelector('.img-preview{{ $gambar->skip($i)->first()->id }}');
        imagePreview{{ $gambar->skip($i)->first()->id }}.style.display='block';
        const oFReader{{ $gambar->skip($i)->first()->id }} = new FileReader();
        oFReader{{ $gambar->skip($i)->first()->id }}.readAsDataURL(image{{ $gambar->skip($i)->first()->id }}.files[0]);

        oFReader{{ $gambar->skip($i)->first()->id }}.onload = function(oFREvent){
        imagePreview{{ $gambar->skip($i)->first()->id }}.src =oFREvent.target.result;
    };
};
@endfor


  </script>

@endsection

@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
    <h3>Image</h3>
  </div>

  <div class="col-lg-8">

    <form method="post" action="/dashboard/reviewer/{{ $page->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf

        @foreach ($review as $review)
        <div class="mb-3">

            <label for="image{{ $review->id }}" class="form-label">Image</label>
            <input type="hidden" name="oldImage{{ $review->id }}" value="{{ $review->img }}">
            @if($review->img)
            <img class="img-preview{{ $review->id }} img-fluid mb-3 col-sm-5 d-block" src="{{ asset('storage/' . $review->img) }}" alt="">
            @else
            <img class="img-preview{{ $review->id }} img-fluid mb-3 col-sm-5" src="" alt="">
            @endif

            <input class="form-control" type="file" id="image{{ $review->id }}" name="image{{ $review->id }}" onchange="previewImage{{ $review->id }}()">
        </div>

        <div class="mb-3">
            <label for="nama{{ $review->id }}" class="form-label">Nama</label>
            <input id="nama{{ $review->id }}" type="hidden" name="nama{{ $review->id }}" value="{{ old('nama'.''.$review->id, $review->nama) }}">

            <trix-editor input="nama{{ $review->id }}" ></trix-editor>
            @error('nama{{ $review->id }}')
            <p class = 'text-danger'>
                {{ $message }}
            </p>
        @enderror
        </div>

        <div class="mb-3">
            <label for="role{{ $review->id }}" class="form-label">Role</label>
            <input id="role{{ $review->id }}" type="hidden" name="role{{ $review->id }}" value="{{ old('role'.''.$review->id, $review->role) }}">

            <trix-editor input="role{{ $review->id }}" ></trix-editor>
            @error('role{{ $review->id }}')
            <p class = 'text-danger'>
                {{ $message }}
            </p>
        @enderror
        </div>

        <div class="mb-3">
            <label for="text{{ $review->id }}" class="form-label">Text</label>
            <input id="text{{ $review->id }}" type="hidden" name="text{{ $review->id }}" value="{{ old('text'.''.$review->id, $review->text) }}">

            <trix-editor input="text{{ $review->id }}" ></trix-editor>
            @error('text{{ $review->id }}')
            <p class = 'text-danger'>
                {{ $message }}
            </p>
        @enderror
        </div>

        @if($review->link)
        <div class="mb-3">
            <label for="link{{ $review->id }}" class="form-label">Link</label>
            <input id="link{{ $review->id }}" type="hidden" name="link{{ $review->id }}" value="{{ old('link'.''.$review->id, $review->link) }}">

            <trix-editor input="link{{ $review->id }}" ></trix-editor>
            @error('link{{ $review->id }}')
            <p class = 'text-danger'>
                {{ $message }}
            </p>
        @enderror
        </div>
        @endif
        <h1>----------------------------------------------</h1>

        @endforeach



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
    @for ($i = 0; $i<$review->count(); $i++)
    function previewImage{{ $review->skip($i)->first()->id }}(){

        const image{{ $review->skip($i)->first()->id }} = document.querySelector('#image{{ $review->skip($i)->first()->id }}');
        const imagePreview{{ $review->skip($i)->first()->id }}= document.querySelector('.img-preview{{ $review->skip($i)->first()->id }}');
        imagePreview{{ $review->skip($i)->first()->id }}.style.display='block';
        const oFReader{{ $review->skip($i)->first()->id }} = new FileReader();
        oFReader{{ $review->skip($i)->first()->id }}.readAsDataURL(image{{ $review->skip($i)->first()->id }}.files[0]);

        oFReader{{ $review->skip($i)->first()->id }}.onload = function(oFREvent){
        imagePreview{{ $review->skip($i)->first()->id }}.src =oFREvent.target.result;
    };
};
@endfor


  </script>

@endsection

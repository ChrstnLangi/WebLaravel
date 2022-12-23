@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
    <h3>Our Speaker</h1>
  </div>

  @if (session()->has('success'))
  <div class= "alert alert-success" role="alert">
    {{ session('success') }}
  </div>

  @endif

  <form method="post" action="/dashboard/category/{{ $category->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  name="name" value="{{ old('name', $category->name) }}">
        @error('name')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"  name="slug" value="{{ old('slug', $category->slug) }}">
        @error('slug')
        <div class = 'invalid-feedback'>
            {{ $message }}
        </div>
        @enderror
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    name.addEventListener('change', function(){
        fetch('/dashboard/c/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>

@endsection

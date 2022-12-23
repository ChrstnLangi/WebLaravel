@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Speaker</h1>
  </div>
  @if (session()->has('success'))
  <div class= "alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Category</th>
          <th scope="col">Author</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($article as $article)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $article->title  }}</td>
            <td>{{ $article->Category->name  }}</td>
            <td>{{ $article->author  }}</td>
            <td>
                <a href="/dashboard/article/{{ $article->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/article/{{ $article->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Confirm?')"><span data-feather="x-circle"></span></button>
                </form>

            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

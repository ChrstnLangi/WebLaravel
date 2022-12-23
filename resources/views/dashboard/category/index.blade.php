@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Category</h1>
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
          <th scope="col">Name</th>
          <th scope="col">Slug</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category as $category)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $category->name  }}</td>
            <td>{{ $category->slug  }}</td>
            <td>
                <a href="/dashboard/category/{{ $category->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/category/{{ $category->id }}" method="post" class="d-inline">
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

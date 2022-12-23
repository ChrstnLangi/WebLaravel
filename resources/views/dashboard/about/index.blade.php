@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Text</h1>
  </div>

  <div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($page as $page)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $page->judul  }}</td>
            <td>
                <a href="{{ URL::to('/dashboard/page/' . $page->slug) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/page/{{ $page->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

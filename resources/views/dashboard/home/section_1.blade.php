@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <h3>Home Section 1</h1>
  </div>

  <div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading Hitam</th>
          <th scope="col">Heading Putih</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Tombol</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($homepage as $homepage)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $homepage->judul_hitam }}</td>
            <td>{{ $homepage->judul_putih }}</td>
            <td>{{ $homepage->desk }}</td>
            <td>{{ $homepage->button }}</td>
            <td>
                <a href="/dashboard/home/section_1/{{ $homepage->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

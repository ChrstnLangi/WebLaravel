@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Pendaftaran</h1>
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
          <th scope="col">Program</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($daftar as $daftar)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $daftar->nama  }}</td>
            <td>{{ $daftar->Page->judul  }}</td>
            <td>
            @if ($daftar->status == 0)
                'Belum Dihubungi'
            @endif
            @if ($daftar->status == 1)
                'Menunggu Pembayaran'
            @endif
            @if ($daftar->status == 2)
                'Terkonfirmasi'
            @endif
                </td>
            <td>
                <a href="/pendaftaran/{{ $daftar->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/pendaftaran/{{ $daftar->id }}" method="post" class="d-inline">
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

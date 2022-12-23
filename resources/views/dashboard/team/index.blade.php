@extends('dashboard.dashboard')
@section('contain')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Team</h1>
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
          <th scope="col">Role</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($team as $team)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $team->nama  }}</td>
            <td>{{ $team->role }}</td>
            <td>
                <a href="/dashboard/ourTeam/{{ $team->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                @if ($loop->iteration >12 )
                <form action="/dashboard/ourTeam/{{ $team->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Confirm?')"><span data-feather="x-circle"></span></button>
                    </form>
                @endif


            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

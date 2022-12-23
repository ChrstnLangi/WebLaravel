@extends('layouts.main')

@section('contain')

<header class="section-login">
    <div class="page-padding">
      <div class="container-large row justify-content-center">
        <div class = "row justify-content-center col-md-4">


            <form method="post" action="/pendaftaran/" enctype="multipart/form-data">
                @method('post')
                @csrf
                <div class="mb-3">
                    <label for="page_id" class="form-label">Program</label>
                    <select class="form-select" name='page_id'>
                        @foreach ( $program as $program )
                        @if (old('program_id')== $program->id)
                        <option value="{{ $program->id }}" selected>{{ $program->judul }}</option>
                            @else
                            <option value="{{ $program->id }}">{{ $program->judul }}</option>
                        @endif

                        @endforeach

                      </select>
                  </div>

                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{ old('nama', $user->nama) }}">
                    @error('nama')
                    <div class = 'invalid-feedback'>
                        {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"  name="email" value="{{ old('email', $user->email) }}">
                    @error('email')
                    <div class = 'invalid-feedback'>
                        {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="nohp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp"  name="nohp" value="{{ old('nohp', $user->nohp) }}">
                    @error('nohp')
                    <div class = 'invalid-feedback'>
                        {{ $message }}
                    </div>
                    @enderror
                  </div>



                <button type="submit" class="btn btn-primary">Submit</button>
              </form>



            </div>
        </div>
    </div>
</header>

@endsection

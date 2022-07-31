@extends('layouts.main')
@section('contain')
<header class="section-login">
    <div class="page-padding">
      <div class="container-large row justify-content-center">
        <div class = "row justify-content-center col-md-4">
    <main class="form-registration w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
    <form action="/register" method="post">
        @csrf
      <div class="form-floating">
        <input type="text" name="nama" class="form-control rounded-top @error('nama')
        is-invalid
        @enderror" id="nama" placeholder="Nama" required value="{{ old('nama') }}">
        <label for="nama">Nama </label>
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="number" name="umur" class="form-control @error('umur')
        is-invalid
        @enderror" id="umur" placeholder="Umur" required value="{{ old('umur') }}">
        <label for="umur">Umur </label>
        @error('umur')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="NPA" class="form-control @error('NPA')
        is-invalid
        @enderror" id="NPA" placeholder="NPA" required value="{{ old('NPA') }}">
        <label for="NPA">NPA </label>
        @error('NPA')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="number" name="nohp" class="form-control @error('nohp')
        is-invalid
        @enderror" id="nohp" placeholder="No.HP" required value="{{ old('nohp') }}">
        <label for="nohp">No.HP </label>
        @error('nohp')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')
        is-invalid
        @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
        <label for="email">Email </label>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom @error('password')
        is-invalid
        @enderror" id="password" placeholder="Password" required >
        <label for="password">Password</label>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    </form>
    <small>Sudah Terdaftar? <a href="/login">Login Sekarang</a></small>
    </main>
            </div>
        </div>
    </div>
</header>
@endsection

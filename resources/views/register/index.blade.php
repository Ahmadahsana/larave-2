@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-4">
        <h1 class="mt-5">Silahkan Daftar</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="emailHelp" value="{{ old('name') }}">
              @error('name')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" aria-describedby="emailHelp"  value="{{ old('username') }}">
              @error('username')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" value="{{ old('email') }}">
              @error('email')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label @error('password') is-invalid @enderror">Password</label>
              <input type="password" class="form-control" name="password" id="password">
              @error('password')  
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
          </form>

          <small class="mt-4">Sudah registrasi? <a href="/login">MASUK</a></small>
    </div>
</div>
@endsection
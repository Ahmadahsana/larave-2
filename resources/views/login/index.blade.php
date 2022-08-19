@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-4">
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

            <h1 class="mt-5">Silahkan Login</h1>
            <form action="/login" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" value="{{ old('email') }}">
                  @error('email')  
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
              </form>

              <small class="mt-4">Belum registrasi? <a href="/register">REGISTER</a></small>
        </div>
    </div>
@endsection
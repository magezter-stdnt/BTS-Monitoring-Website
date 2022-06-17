@extends('layouts.main')

@section('container')



<div class="row justify-content-end m-5 banner_login">
  <div class="col-lg-4 card_login p-4">
  
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
  
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
  
      <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Please <span>Login</span></h1>
          <form action="/login" method="post">
          @csrf
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
  
            <div class="form-floating mt-2 box_input box_input_email">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}"required autofocus>
              <label for="email">Email address</label>
              @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
            <div class="form-floating my-2 box_input box_input_password">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
  
            {{-- <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div> --}}
            <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
            {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
          </form>
      </main>
  </div>
</div>


@endsection

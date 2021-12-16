<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-5 text-center">
          <h1 class="display-5 fw-bold lh-1 mb-3"><img src="img/hand.png" class="animate__animated animate__tada hello" style="width: 75px; z-index: 2;" alt="hand"> Masuk</h1>
          <p class="lead">Kamu belum punya akun? <a href="{{ route('register') }}" class="text-success text-decoration-none" style="z-index: 2;">Daftar sekarang</a></p>
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
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-floating">
              <input type="email" name="email" class="form-control text-center @error('email') is-invalid @enderror" id="email" placeholder="Email kamu" value="{{ old('email') }}" required autofocus>
              <label for="email">Email</label>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating mt-3">
              <input type="password" name="password" class="form-control text-center @error('password') is-invalid @enderror" id="password" placeholder="Kata Sandi" required>
              <label for="password">Kata Sandi</label>
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="row justify-content-end mt-3">
              <div class="col">
                <a href="/forgot-password" class="text-success text-decoration-none">Lupa Password</a>
              </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-center mt-3">
              <button type="submit" class="btn btn-outline-success btn-lg px-4 me-md-2 shadow" style="z-index: 2;">Masuk</button>
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <img src="img/signin.png" class="d-block mx-lg-auto img-fluid" alt="Signin" width="700" height="500" loading="lazy">
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
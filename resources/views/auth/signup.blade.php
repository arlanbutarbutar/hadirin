<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-5 text-center">
          <h1 class="display-5 fw-bold lh-1 mb-3"><img src="img/hand.png" class="animate__animated animate__tada hello" style="width: 75px; z-index: 2;" alt="hand"> Daftar Akun</h1>
          <p class="lead">Kamu sudah punya akun? <a href="{{ route('login') }}" class="text-success text-decoration-none" style="z-index: 2;">Masuk sekarang</a></p>
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-floating">
            <input type="number" name="number" class="form-control text-center @error('number') is-invalid @enderror" id="number" placeholder="NUPTK/NIDN" autofocus required value="{{ old('number') }}">
              <label for="number">NUPTK/NIDN</label>
              @error('number')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating mt-3">
              <input type="text" name="name" class="form-control text-center @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
              <label for="name">Nama Lengkap</label>
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating mt-3">
              <input type="email" name="email" class="form-control text-center @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email</label>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-floating mt-3">
                  <input type="password" name="password" class="form-control text-center @error('password') is-invalid @enderror" id="password" placeholder="Kata Sandi" required>
                  <label for="password">Kata Sandi</label>
                  @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-floating mt-3">
                  <input type="password" name="re-password" class="form-control text-center @error('re-password') is-invalid @enderror" id="re-password" placeholder="ulangi Kata Sandi" required>
                  <label for="re-password">ulangi Kata Sandi</label>
                  @error('re-password')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-center mt-5">
              <button type="submit" class="btn btn-outline-success btn-lg px-4 me-md-2 shadow" style="z-index: 2;">Daftar</button>
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <img src="img/signup.png" class="d-block mx-lg-auto img-fluid" alt="Signup" width="700" height="500" loading="lazy">
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
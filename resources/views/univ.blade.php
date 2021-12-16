<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-6 text-center">
          <h1 class="display-5 fw-bold lh-1 mb-3"><img src="img/hand.png" class="animate__animated animate__tada hello" style="width: 75px; z-index: 2;" alt="hand"> Universitas</h1>
          <p class="lead">Masukan kode kelas dari dosen kamu untuk mencari kelas kamu!</p>
          @if(session()->has('message-danger'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('message-danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <form action="/univ" method="POST">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" name="class_code" class="form-control text-center @error('class_code') is-invalid @enderror" id="class_code" placeholder="Kode Kelas" required value="{{ old('class_code') }}">
              <label for="class_code">Kode Kelas</label>
              @error('class_code')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-outline-success btn-lg shadow">Masuk Kelas</button>
            </div>
          </form>
        </div>
        <div class="col-lg-5">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/univ1.png" class="d-block mx-lg-auto img-fluid" alt="univ1" width="700" height="500" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="img/univ2.png" class="d-block mx-lg-auto img-fluid" alt="univ2" width="700" height="500" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="img/univ3.png" class="d-block mx-lg-auto img-fluid" alt="univ3" width="700" height="500" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
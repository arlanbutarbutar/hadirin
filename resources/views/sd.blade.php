<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-6 text-center">
          <h1 class="display-5 fw-bold lh-1 mb-3"><img src="img/hand.png" class="animate__animated animate__tada hello" style="width: 75px; z-index: 2;" alt="hand"> SD</h1>
          <p class="lead">Masukan kode kelas dari guru kamu untuk mencari kelas kamu!</p>
          @if(session()->has('mError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('mError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <form action="/sd" method="POST">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" name="id_class" class="form-control text-center @error('id_class') is-invalid @enderror" id="id_class" placeholder="Kode Kelas" required value="{{ old('id_class') }}">
              <label for="id_class">Kode Kelas</label>
              @error('id_class')
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
                <img src="img/sd1.png" class="d-block mx-lg-auto img-fluid" alt="SD1" width="700" height="500" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="img/sd2.png" class="d-block mx-lg-auto img-fluid" alt="SD2" width="700" height="500" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="img/sd3.png" class="d-block mx-lg-auto img-fluid" alt="SD3" width="700" height="500" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
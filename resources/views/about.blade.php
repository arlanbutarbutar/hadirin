<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="img/hadir.png" class="d-block mx-lg-auto img-fluid" alt="Hadir" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-5">
          <h1 class="display-5 fw-bold lh-1 mb-3"><img src="img/hand.png" class="animate__animated animate__wobble hello" style="width: 75px; z-index: 2;" alt="hand"> Hadirin</h1>
          <p class="lead">Hadirin membantu kamu untuk melakukan absen kelas dengan cepat dan ringkas tanpa tertumpuknya data penting. Gunakan apps Hadirin untuk absen kelas kamu sekarang juga dan unduh apps di sini okey :)</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-outline-success btn-lg px-4 me-md-2" style="z-index: 2;"><ion-icon name="download-outline" size="small"></ion-icon> Unduh</button>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
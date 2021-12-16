<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center mt-5">
        <div class="col-md-10">
          <div class="card shadow border-light text-center" data-title="hello" data-intro="Hai guys!!">
            <div class="card-header">
              <h3 class="font-weight-bold"><img src="img/hand.png" class="animate__animated animate__wobble hello" style="width: 50px; z-index: 2;" alt="hand"> Hadirin</h3>
            </div>
            <div class="card-body">
              <h5 class="card-title">Hadirin dirimu yuk dikelas, jangan bolos!</h5>
              <p class="card-text">Kamu mau cara mudah untuk absensi kelas kamu? pakai ajah Hadirin... gampang kok ikuti pemandu kami untuk tau cara pakainya yah!</p>
              {{-- <a href="#" class="btn btn-outline-success btn-sm shadow">Pemandu Tur</a> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 m-auto">
          <div class="row justify-content-center m-auto mt-5 card-absen" style="z-index: 2;">
            <div class="col-lg-3 mt-3">
              <div class="card card-body shadow border-light h-100">
                <h5 class="absen absen-sd" style="z-index: 2;">SD</h5>
                <p>Absen kehadiran buat anak SD.</p>
                <div class="col">
                  <a href="sd" class="btn btn-outline-success btn-sm shadow">Absen</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mt-3">
              <div class="card card-body shadow border-light">
                <h5 class="absen absen-smp" style="z-index: 2;">SMP</h5>
                <p>Absen kehadiran buat anak SMP.</p>
                <div class="col">
                  <a href="smp" class="btn btn-outline-success btn-sm shadow">Absen</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mt-3">
              <div class="card card-body shadow border-light">
                <h5 class="absen absen-sma" style="z-index: 2;">SMA</h5>
                <p>Absen kehadiran buat anak SMA.</p>
                <div class="col">
                  <a href="sma" class="btn btn-outline-success btn-sm shadow">Absen</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mt-3">
              <div class="card card-body shadow border-light">
                <h5 class="absen absen-univ" style="z-index: 2;">Universitas</h5>
                <p>Absen kehadiran buat anak kuliahan.</p>
                <div class="col">
                  <a href="univ" class="btn btn-outline-success btn-sm shadow">Absen</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
    @include('partials.shepherd')
  </body>
</html>
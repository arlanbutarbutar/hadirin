<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card shadow border-light text-center" data-title="hello" data-intro="Hai guys!!">
            <div class="card-header">
              <h3 class="navbar-brand font-weight-bold"><img src="img/hand.png" class="animate__animated animate__wobble hello" style="width: 50px; z-index: 2;" alt="hand"> Hadirin</h3>
            </div>
            <div class="card-body">
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <form action="/absen" method="POST">
                @csrf
                <h3>Kelas Pemrograman Web 2</h3>
                <div class="form-group mb-3">
                  <label for="absen">Status Absen</label>
                  <select name="id_status_absen" id="absen" class="form-control @error('id_status_absen') is-invalid @enderror" required>
                    <option selected>Pilih Status</option>
                    @foreach ($status as $rowS)
                      <option value="{{ $rowS->id_status_absen }}">{{ $rowS->status_absen }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-sm shadow">Absen</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
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
              <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <h3 class="navbar-brand font-weight-bold"><img src="img/hand.png" class="animate__animated animate__wobble hello" style="width: 50px; z-index: 2;" alt="hand"> Hadirin</h3>
                  <div>
                    <h5 class="card-title">Hai {{ Auth::user()->name }} !</h5>
                    <a href="/console" class="btn btn-outline-success btn-sm shadow"><i class="fas fa-angle-left"></i> Back</a>
                  </div>
                </div>
              </nav>
            </div>
            <div class="card-body">
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Status</th>
                      <th scope="col">Tgl Absen</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($absen as $row)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->name_class }}</td>
                        <td>{{ $row->status_absen }}</td>
                        <td>{{ $row->tgl_absen }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
@extends('partials.dash')
@section('content')
<div class="card-body">
  @if (auth()->user()->id_role == 1)
  <h2 class="card-title">Data Pengguna!</h2>
  @endif
  @if(session()->has('message-success'))
  <div class="alert alert-success alert-dismissible fade show small" role="alert">
    {{ session('message-success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="table-responsive mt-5">
    @if (auth()->user()->id_role == 1)
    <table class="table table-sm table-striped table-borderless">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Tgl Buat</th>
          <th colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $row)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td scope="row">{{$row->name}}</td>
          <td scope="row">{{$row->email}}</td>
          <td scope="row">{{$row->role}}</td>
          <td scope="row">{{$row->date_created}}</td>
          <td>
            <button type="button" class="btn btn-warning btn-sm shadow" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"><i class="far fa-edit"></i> Edit</button>
            <div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Role Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="/console/edit/{{$row->id}}" method="POST">
                    @csrf
                    <div class="modal-body text-center">
                      <div class="form-group">
                        <select name="id_role" id="role" class="form-control">
                          <option>Pilih Role</option>
                          @foreach ($role as $rowRole)
                          <option value="{{$rowRole->id_role}}">{{$rowRole->role}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer border-top-0 justify-content-center">
                      <button type="submit" class="btn btn-warning btn-sm shadow">Edit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </td>
          <td>
            <button type="button" class="btn btn-danger btn-sm shadow" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fas fa-trash"></i> Delete</button>
            <div class="modal fade" id="delete{{ $row->id }}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <p>Anda yakin ingin menghapus {{ $row->role." ".$row->name }}?</p>
                  </div>
                  <div class="modal-footer border-top-0 justify-content-center">
                    <a href="/console/delete/{{ $row->id }}" class="btn btn-danger btn-sm shadow"> Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @elseif(auth()->user()->id_role == 2)
    <table class="table table-sm table-striped table-borderless">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kelas</th>
          <th scope="col">Kode Kelas</th>
          <th scope="col">Tipe Kelas</th>
          <th scope="col">Tgl Buat</th>
          <th colspan="3">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($classes as $row)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td scope="row">{{$row->name_class}}</td>
          <td scope="row" class="d-flex justify-content-center">
            <input type="text" value="{{$row->class_code}}" readonly id="pilih" class="bg-transparent border-0" style="width: 60px; outline: none;">
            <div><span class="badge bg-success text-white" style="cursor:pointer; margin-left: 5px" onclick="copy_text()"><i class="far fa-copy"></i></span></div>
          </td>
          <td scope="row">{{$row->class_type}}</td>
          <td scope="row">{{$row->date_created}}</td>
          <td>
            <button type="button" class="btn btn-success btn-sm shadow" data-bs-toggle="modal" data-bs-target="#detail{{ $row->id_class }}"><i class="far fa-eye"></i> Detail</button>
            <div class="modal fade" id="detail{{ $row->id_class }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar kehadiran</h5>
                    <div class="d-flex">
                      <a href="/console/class-print" target="_blank" class="btn btn-outline-primary btn-sm shadow"><i class="fas fa-print"></i> Print to Printer</a>
                      <a href="/console/class-printpdf" target="_blank" class="btn btn-outline-success btn-sm shadow" style="margin-left: 10px;"><i class="fas fa-print"></i> Print to PDF</a>
                      <button type="button" class="btn-close" style="margin-top: 0px; margin-left: 10px;" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                  <div class="modal-body text-center">
                    <table class="table table-sm table-borderless table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">NIM</th>
                          <th scope="col">Nama Pelajar</th>
                          <th scope="col">Kelas</th>
                          <th scope="col">Status</th>
                          <th scope="col">Tgl Absen</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($absen as $row)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$row->number}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->name_class}}</td>
                          <td>{{$row->status_absen}}</td>
                          <td>{{$row->tgl_absen}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>
            <button type="button" class="btn btn-warning btn-sm shadow" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id_class }}"><i class="far fa-edit"></i> Edit</button>
            <div class="modal fade" id="edit{{ $row->id_class }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="/console/edit-class/{{$row->id_class}}" method="POST">
                    @csrf
                    <div class="modal-body text-center">
                      <div class="form-group">
                        <label for="name">Nama kelas</label>
                        <input type="text" name="name_class" placeholder="Nama Kelas" class="form-control @error('name_class') is-invalid @enderror" value="{{$row->name_class}}" required>
                        @error('name_class')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group mt-3">
                        <label for="class-type">Tipe Kelas</label>
                        <select name="id_class_type" id="class-type" class="form-control @error('id_class_type') is-invalid @enderror" required>
                          <option>Pilih Tipe Kelas</option>
                          @foreach ($class_types as $rowClass)
                          <option value="{{$rowClass->id_class_type}}">{{$rowClass->class_type}}</option>
                          @endforeach
                        </select>
                        @error('id_class_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="modal-footer border-top-0 justify-content-center">
                      <button type="submit" class="btn btn-warning btn-sm shadow">Edit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </td>
          <td>
            <button type="button" class="btn btn-danger btn-sm shadow" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id_class }}"><i class="fas fa-trash"></i> Delete</button>
            <div class="modal fade" id="delete{{ $row->id_class }}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <p>Anda yakin ingin menghapus kelas {{ $row->name_class }}?</p>
                  </div>
                  <div class="modal-footer border-top-0 justify-content-center">
                    <a href="/console/delete-class/{{ $row->id_class }}" class="btn btn-danger btn-sm shadow"> Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @elseif(auth()->user()->id_role == 3)
    <p>Lihat kehadiran kamu di kelas</p>
    <a href="/class" class="btn btn-success btn-sm shadow"><i class="fas fa-book-reader"></i> Kelas</a>
    @endif
  </div>
</div>
@endsection
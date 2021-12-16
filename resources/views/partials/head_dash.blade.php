<div class="card-header shadow border-bottom-0">
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <h3 class="navbar-brand font-weight-bold"><img src="{{url('img/hand.png')}}" class="animate__animated animate__wobble hello" style="width: 50px; z-index: 2;" alt="hand"> Hai {{ Auth::user()->name }}! <br> this is
        @if (auth()->user()->id_role == 1)
          your Dashboard
        @elseif(auth()->user()->id_role == 2)
          Manage your class
        @else
          Your class
        @endif
      </h3>
      <div class="d-sm-flex justify-content-end">
        @if (auth()->user()->id_role == 2)
        <button type="button" class="btn btn-success btn-sm shadow" data-bs-toggle="modal" data-bs-target="#addClass"><i class="fas fa-plus"></i> Add Class</button>
        <div class="modal fade" id="addClass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/console/class/" method="POST">
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label for="name">Nama kelas</label>
                    <input type="text" name="name_class" placeholder="Nama Kelas" class="form-control @error('name_class') is-invalid @enderror" value="{{ old('name_class') }}" required>
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
                  <button type="submit" class="btn btn-success btn-sm shadow">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        @endif
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm shadow" style="margin-left: 10px"><i class="fas fa-sign-out-alt"></i> Log Out</button>
        </form>
      </div>
    </div>
  </nav>
</div>
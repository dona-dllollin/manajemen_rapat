@extends('layouts.main_new')

@section('title','Tambah Kategori Rapat')

@section('dropdown_kategori', 'show')

@section('menu_tambah_kategori', 'active')

@section('menu')
    <li class="breadcrumb-item">Manajemen Kategori</li>
    <li class="breadcrumb-item active">Tambah Kategori Rapat</li>
@endsection

@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-11">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Tambah Kategori Rapat</h5>

            <!-- General Form Elements -->
            <form action="/create_kategori" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Kode Kategori</label>
                <div class="col-sm-10">
                  <input type="text" value="{{ old('kode') }}" name="kode" class="form-control @error('kode') is-invalid @enderror" autofocus placeholder="Masukkan Kode Kategori"  >
                  @error('kode')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              {{-- <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Rapat</label>
                <div class="col-sm-10">
                  <input type="date" value="{{ old('tanggal') }}" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                  @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Waktu Rapat</label>
                <div class="col-sm-10">
                  <input type="time" value="{{ old('waktu') }}" name="waktu" class="form-control @error('waktu') is-invalid @enderror">
                  @error('waktu')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div> --}}
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                  <input type="text" value="{{ old('nama_kategori') }}" placeholder="Masukkan Nama Kategori Rapat" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" id="">
                  @error('nama_kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
             
              
            

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

      {{-- <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Advanced Form Elements</h5>

            <!-- Advanced Form Elements -->
            <form>
              <div class="row mb-5">
                <label class="col-sm-2 col-form-label">Switches</label>
                <div class="col-sm-10">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <label class="col-sm-2 col-form-label">Ranges</label>
                <div class="col-sm-10">
                  <div>
                    <label for="customRange1" class="form-label">Example range</label>
                    <input type="range" class="form-range" id="customRange1">
                  </div>
                  <div>
                    <label for="disabledRange" class="form-label">Disabled range</label>
                    <input type="range" class="form-range" id="disabledRange" disabled>
                  </div>
                  <div>
                    <label for="customRange2" class="form-label">Min and max with steps</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange2">
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Floating labels</label>
                <div class="col-sm-10">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <label class="col-sm-2 col-form-label">Input groups</label>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                  </div>

                  <label for="basic-url" class="form-label">Your vanity URL</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                  </div>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                  </div>

                  <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div> --}}
    </div>
  </section>
@endsection


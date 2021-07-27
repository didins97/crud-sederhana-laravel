@extends('template')
@section('content')
    <div class="container mt-3">
        <form action="/pegawai/store" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Nama Pegawai</label>
              <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" required>
            </div>
            <div class="form-group">
              <label for="umur">Umur</label>
              <input type="text" class="form-control" name="umur" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
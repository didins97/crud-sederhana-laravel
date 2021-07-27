@extends('template')
@section('content')
    <div class="container mt-3">
        @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$p->pegawai_id}}">
            <div class="form-group">
              <label for="name">Nama Pegawai</label>
              <input type="text" class="form-control" name="nama" value="{{$p->pegawai_nama}}" required>
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" value="{{$p->pegawai_jabatan}}" required>
            </div>
            <div class="form-group">
              <label for="umur">Umur</label>
              <input type="text" class="form-control" name="umur" value="{{$p->pegawai_umur}}" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" required>{{$p->pegawai_alamat}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          @endforeach
    </div>
@endsection
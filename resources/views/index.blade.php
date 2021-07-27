@extends('template')
@section('content')
<div class="container mt-3">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
            <tr>
                <th>{{$p->pegawai_id}}</th>
                <td>{{$p->pegawai_nama}}</td>
                <td>{{$p->pegawai_jabatan}}</td>
                <td>{{$p->pegawai_umur}}</td>
                <td>{{$p->pegawai_alamat}}</td>
                <td>
                    <a href="/pegawai/edit/{{$p->pegawai_id}}" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="/pegawai/hapus/{{$p->pegawai_id}}" onclick="return confirm('Hapus?')" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

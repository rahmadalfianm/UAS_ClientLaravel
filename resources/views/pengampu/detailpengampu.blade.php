@extends('master')
@extends('layouts.app')
@section('title','Mengampu')
@section('konten')
<h3>Detail Pengampu</h3><hr>
<table class="table table-bordered">
    <thead class="thead-dark">
            <th style = text-align:center class="short">ID Dosen</th>
            <th style = text-align:center class="short">NIP</th>
            <th style = text-align:center scope="col">Nama Dosen</th>
            <th style = text-align:center scope="col">Nama Mahasiswa</th>
            <th style = text-align:center scope="col">Mengampu</th>
            <th style = text-align:center scope="col">Kelas</th>
    </thead>
    <tbody>
        @foreach($mengampu as $pgm)
        <tr>
            <td style = text-align:center>{{ $pgm['id_mengampu'] }}</td>
            <td style = text-align:center>{{ $pgm['nip'] }}</td>
            <td style = text-align:center>{{ $pgm['nama_dosen'] }}</td>
            <td style = text-align:center>{{ $pgm['nama'] }}</td>
            <td style = text-align:center>{{ $pgm['nama_matkul'] }}</td>
            <td style = text-align:center>{{ $pgm['nama_kelas'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/home/dftrpengampu" class="btn btn-secondary">Kembali</a>
@endsection

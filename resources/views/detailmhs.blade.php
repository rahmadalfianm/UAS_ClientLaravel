@extends('master')
@extends('layouts.app')
@section('title','Mahasiswa')
@section('konten')
<h3>Detail Mahasiswa</h3><hr>
<table class = "table table-bordered">
<thead class = "thead-dark">
        <th>Nama Mahasiswa</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['email'] }}</td>
            <td>{{ $mhs['jurusan'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/home/dftrmhs" class="btn btn-secondary">Kembali</a>
@endsection

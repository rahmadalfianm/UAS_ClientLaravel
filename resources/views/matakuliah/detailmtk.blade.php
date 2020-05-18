@extends('master')
@extends('layouts.app')
@section('title','Mengampu')
@section('konten')
<h3>Detail Matakuliah</h3><hr>
<table class="table table-bordered">
    <thead class="thead-dark">
            <th style = text-align:center class="short">Kode Matakuliah</th>
            <th style = text-align:center class="short">Nama Matakuliah</th>
            <th style = text-align:center scope="col">Tahun Ajaran</th>
            <th style = text-align:center scope="col">Hari</th>
            <th style = text-align:center scope="col">Jam</th>
    </thead>
    <tbody>
        @foreach($matakuliah as $matakuliah)
        <tr>
                <td style = text-align:center>{{ $matakuliah['id_matkul'] }}</td>
                <td style = text-align:center>{{ $matakuliah['nama_matkul'] }}</td>
                <td style = text-align:center>{{ $matakuliah['tahun_ajaran'] }}</td>
                <td style = text-align:center>{{ $matakuliah['hari'] }}</td>
                <td style = text-align:center>{{ $matakuliah['jam'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/home/dftrmatkul" class="btn btn-secondary">Kembali</a>
@endsection

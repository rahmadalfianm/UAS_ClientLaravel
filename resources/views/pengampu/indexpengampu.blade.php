@extends('masterbesar')
@extends('layouts.app')
@section('title','Daftar Pengampu')
@section('judul_halaman','Data Pengampu')
@section('konten')
<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<body>
<style>
</style>
<a href="/home/tambahpengampu" class="btn btn-secondary">Tambah Data Pengampu</a>
    <br/>
    <br/>
    <div class ="table-responsive">
    <table width="350" class="table table-bordered table-hover table-striped ">
        <thead class="thead-dark">
                <th style = text-align:center class="short">No</th>
                <th style = text-align:center class="short">ID Dosen</th>
                <th style = text-align:center class="short">NIP</th>
                <th style = text-align:center scope="col">Dosen</th>
                <th style = text-align:center scope="col">Nama Mahasiswa</th>
                <th style = text-align:center scope="col">Mata Kuliah</th>
                <th style = text-align:center scope="col">Action</th>
        </thead>
        <tbody>
        <?php $no = 1;
        foreach ($pengampu as $pgm) : ?>
            <tr>
                <td ><?= $no ?></td>
                <td style = text-align:center>{{ $pgm['id_mengampu'] }}</td>
                <td style = text-align:center>{{ $pgm['nip'] }}</td>
                <td style = text-align:center>{{ $pgm['nama_dosen'] }}</td>
                <td style = text-align:center>{{ $pgm['nama'] }}</td>
                <td style = text-align:center>{{ $pgm['nama_matkul'] }}</td>
                <td>
                <a style = text-align:center href="/home/editpgm/{{ $pgm['id_mengampu'] }}" class="badge badge-success">Edit</a>
                <a style = text-align:center href="/home/detailpengampu/{{ $pgm['id_mengampu'] }}" class="badge badge-info">Detail</a>
                <a style = text-align:center href="/home/deletepgm/{{ $pgm['id_mengampu'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $pgm['nama_dosen'] }}?');" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            <?php $no += 1;
        endforeach;?>
        </tbody>
    </table>
    </div>
@endsection
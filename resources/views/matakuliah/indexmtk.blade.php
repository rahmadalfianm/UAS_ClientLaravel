@extends('master')
@extends('layouts.app')
@section('title','Daftar Matakuliah')
@section('judul_halaman','Data Matakuliah')
@section('konten')
<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<body>
<style>
</style>
<a href="/home/tambahmtk" class="btn btn-secondary">Tambah Matakuliah</a>
    <br/>
    <br/>
    <div class ="table-responsive">
    <table width="350" class="table table-bordered table-hover table-striped ">
        <thead class="thead-dark">
                <th style = text-align:center class="short">No</th>
                <th style = text-align:center class="short">Kode Matakuliah</th>
                <th style = text-align:center class="short">Nama Matakuliah</th>
                <th style = text-align:center scope="col">Tahun Ajaran</th>
                <th style = text-align:center scope="col">Hari</th>
                <th style = text-align:center scope="col">Jam</th>
                <th style = text-align:center scope="col">Action</th>
        </thead>
        <tbody>
        <?php $no = 1;
        foreach ($matkul as $pgm) : ?>
            <tr>
                <td ><?= $no ?></td>
                <td style = text-align:center>{{ $pgm['id_matkul'] }}</td>
                <td style = text-align:center>{{ $pgm['nama_matkul'] }}</td>
                <td style = text-align:center>{{ $pgm['tahun_ajaran'] }}</td>
                <td style = text-align:center>{{ $pgm['hari'] }}</td>
                <td style = text-align:center>{{ $pgm['jam'] }}</td>
                <td>
                <a style = text-align:center href="/home/editmtk/{{ $pgm['id_matkul'] }}" class="badge badge-success">Edit</a>
                <a style = text-align:center href="/home/detailmtk/{{ $pgm['id_matkul'] }}" class="badge badge-info">Detail</a>
                <a style = text-align:center href="/home/deletemtk/{{ $pgm['id_matkul'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $pgm['nama_matkul'] }}?');" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            <?php $no += 1;
        endforeach;?>
        </tbody>
    </table>
    </div>
@endsection
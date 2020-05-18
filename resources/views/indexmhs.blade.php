@extends('master')
@extends('layouts.app')
@section('title','Daftar Mahasiswa')
@section('judul_halaman','Data Mahasiswa')
@section('konten')
<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<body>
<a href="/home/tambahmhs" class="btn btn-secondary">Tambah Data Mahasiswa</a>
    <br/>
    <br/>
    <div class ="table-responsive">
    <table width="300" class="table table-bordered table-hover table-striped ">
        <thead class="thead-dark">
            <th style = text-align:center>No</th>
            <th style = text-align:center>Nama</th>
            <th style = text-align:center>NIM</th>
            <th style = text-align:center>Kelas</th>
            <th style = text-align:center>Email</th>
            <th style = text-align:center>Aksi</th>
        </thead>
        <tbody>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td style = text-align:center><?= $no ?></td>
                <td style = text-align:center>{{ $mhs['nama'] }}</td>
                <td style = text-align:center>{{ $mhs['nim'] }}</td>
                <td style = text-align:center>{{ $mhs['nama_kelas'] }}</td>
                <td style = text-align:center>{{ $mhs['email'] }}</td>
                <td style = text-align:center>
                <a href="/home/editmhs/{{ $mhs['id'] }}" class="badge badge-success">Edit</a>
                <a href="/home/detailmhs/{{ $mhs['id'] }}" class="badge badge-info">Detail</a>
                <a href="/home/deletemhs/{{ $mhs['id'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $mhs['nama'] }}?');" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            <?php $no += 1;
        endforeach;?>
        </tbody>
    </table>
    </div>
@endsection
@extends('master')
@extends('layouts.app')
@section('konten')
<h3>Tambah Mahasiswa Baru</h3><hr>
<form action="/home/simpanmhs" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama" required placeholder="Masukan Nama Mahasiswa">
      </div>
    <div class="form-group">
        <label for="nim">NIM Mahasiswa</label>
        <input type="text" class="form-control" name="nim" required placeholder="Masukan NIM Mahasiswa">
      </div>
    <div class="form-group">
        <label for="email">Email Mahasiswa</label>
        <input type="text" class="form-control" name="email" required placeholder="Masukan Email">
      </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" required placeholder="Masukan Jurusan">
      </div>
    <input type="submit" value="Tambah Data" class="btn btn-primary">
</form>
@endsection

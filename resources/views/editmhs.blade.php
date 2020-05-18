@extends('master')
@extends('layouts.app')
@section('konten')
<h3>Edit Mahasiswa</h3><hr>
<form action="/home/updatemhs" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Nama Mahasiswa</label>
        <input type="hidden" name="id" value="{{ $mahasiswa['id'] }}"required class="form-control" placeholder="Masukan Nama Mahasiswa">
        <input type="text" name="nama" value="{{ $mahasiswa['nama'] }}"required class="form-control" placeholder="Masukan Nama Mahasiswa">
      </div>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" value="{{ $mahasiswa['nim'] }}" name="nim" placeholder="Masukan NIM Mahasiswa">
      </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" value="{{ $mahasiswa['email'] }}" name="email" placeholder="Masukan Email">
      </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" value="{{ $mahasiswa['jurusan'] }}" name="jurusan" placeholder="Masukan Jurusan Mahasiswa">
      </div>
    <input type="submit" value="Edit Data" class="btn btn-secondary">
</form>
@endsection

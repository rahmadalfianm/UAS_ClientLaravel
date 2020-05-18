@extends('master')
@extends('layouts.app')
@section('konten')
<h3>Edit Pengampu</h3><hr>
<form action="/home/updatepgm" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">NIP Dosen</label>
        <input type="hidden" name="id_mengampu" value="{{ $pengampu['id_mengampu'] }}"required class="form-control" placeholder="Masukan NIP Dosen">
        <input type="text" name="nip" value="{{ $pengampu['nip'] }}"required class="form-control" placeholder="Masukan NIP Dosen">
      </div>
      <div class="form-group">
        <label for="nama_dosen">Nama Dosen</label>
        <input type="text" name="nama_dosen" value="{{ $pengampu['nama_dosen'] }}"required class="form-control" placeholder="Masukan Nama Dosen">
      </div>
    <div class="form-group">
        <label for="id">ID Mahasiswa</label>
        <input type="text" class="form-control" value="{{ $pengampu['id'] }} {{ $pengampu['nama'] }}" name="id" placeholder="Masukan ID Mahasiswa">
      </div>
    <div class="form-group">
        <label for="id_matkul">ID Matakuliah</label>
        <input type="text" class="form-control" value="{{ $pengampu['id_matkul'] }}" name="id_matkul" placeholder="Masukan ID Maratakuliah">
      </div>
    <div class="form-group">
        <label for="id_kelas">ID Kelas</label>
        <input type="text" class="form-control" value="{{ $pengampu['id_kelas'] }}" name="id_kelas" placeholder="Masukan ID Kelas">
      </div>
    <input type="submit" value="Edit Data" class="btn btn-secondary">
</form>
@endsection

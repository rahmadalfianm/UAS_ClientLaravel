@extends('master')
@extends('layouts.app')
@section('konten')
<h3>Edit Matakuliah</h3><hr>
<form action="/home/updatemtk" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="id_matkul">ID Matakuliah</label>
        <input type="numeric" name="id_matkul" value="{{ $matakuliah['id_matkul'] }}"required class="form-control" placeholder="Masukan ID Matakuliah">
      </div>
    <div class="form-group">
        <label for="nama_matkul">Nama Matakuliah</label>
        <input type="text" name="nama_matkul" value="{{ $matakuliah['nama_matkul'] }}"required class="form-control" placeholder="Masukan Nama Matakuliah">
      </div>
    <div class="form-group">
        <label for="tahun_ajaran">Tahun Ajaran</label>
        <input type="text" class="form-control" value="{{ $matakuliah['tahun_ajaran'] }}" name="tahun_ajaran" placeholder="Masukan Tahun Ajaran">
      </div>
    <div class="form-group">
        <label for="hari">Hari</label>
        <input type="text" class="form-control" value="{{ $matakuliah['hari'] }}" name="hari" placeholder="Masukan Hari Matakuliah">
      </div>
    <div class="form-group">
        <label for="jam">Jam</label>
        <input type="text" class="form-control" value="{{ $matakuliah['jam'] }}" name="jam" placeholder="Masukan Jam Matakuliah">
      </div>
    <input type="submit" value="Edit Data" class="btn btn-secondary">
</form>
@endsection

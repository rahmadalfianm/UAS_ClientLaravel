@extends('master')
@extends('layouts.app')
@section('konten')
<h3>Tambah Matakuliah Baru</h3><hr>
<form action="/home/simpanmtk" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama_matkul">Nama Matakuliah</label>
        <input type="text" class="form-control" name="nama_matkul" required placeholder="Masukan Nama Matakuliah">
      </div>
    <div class="form-group">
        <label for="tahun_ajaran">Tahun Ajaran</label>
        <input type="text" class="form-control" name="tahun_ajaran" required placeholder="Masukan Tahun Ajaran">
      </div>
    <div class="form-group">
        <label for="hari">Hari</label>
        <input type="text" class="form-control" name="hari" required placeholder="Masukan Hari">
      </div>
    <div class="form-group">
        <label for="jam">Jam</label>
        <input type="text" class="form-control" name="jam" required placeholder="Masukan Jam Matakuliah">
      </div>
    <input type="submit" value="Tambah Data" class="btn btn-primary">
</form>
@endsection

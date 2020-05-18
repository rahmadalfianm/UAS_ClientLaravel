@extends('master')
@extends('layouts.app')
@section('konten')
<h3>Tambah Pengampu Baru</h3><hr>
<form action="/home/simpanpgm" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nip">NIP Dosen</label>
        <input type="text" class="form-control" name="nip" required placeholder="Masukan NIP Dosen">
      </div>
    <div class="form-group">
        <label for="nama_dosen">Nama Dosen</label>
        <input type="text" class="form-control" name="nama_dosen" required placeholder="Masukan Nama Dosen">
      </div>
      <div class="form-group">
        <label for="id">ID Mahasiswa</label>
        <input type="text" class="form-control"  name="id" placeholder="Masukan ID Mahasiswa">
      </div>
      <div class="form-group">
        <label for="id_matkul">Matakuliah</label>
            <select class="form-control" name="id_matkul" required>
                <optgroup label="Pilih Matakuliah">
                    @foreach($mengampu as $pgm)
                        <option value="{{ $pgm['id_matkul']}}">{{ $pgm['nama_matkul'] }}</option>
                    @endforeach
                </optgroup>
            </select>
    </div>
    <div class="form-group">
        <label for="id_kelas">Kelas</label>
            <select class="form-control" name="id_kelas" required>
                <optgroup label="Pilih Kelas">
                    @foreach($mengampu as $pgm)
                        <option value="{{ $pgm['id_kelas']}}">{{ $pgm['nama_kelas'] }}</option>
                    @endforeach
                </optgroup>
            </select>
    </div>
    <input type="submit" value="Tambah Data" class="btn btn-primary">
    <br>
      <br>
</form>
@endsection

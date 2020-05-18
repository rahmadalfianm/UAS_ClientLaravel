@extends('master')
@extends('layouts.app')
@section('konten')
@if ($message = Session::get('success'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
@endif
<div class ="table-responsive">
    <table width="300" class="table table-bordered table-hover table-striped ">
        <thead class="thead-dark">
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>ID Mahasiswa</th>
            <th>ID Matakuliah</th>
            <th>ID Kelas</th>
        </thead>
        <tbody>
                <td>{{ $pengampu->nip}}</td>
                <td>{{ $pengampu->nama_dosen}}</td>
                <td>{{ $pengampu->id}}</td>
                <td>{{ $pengampu->id_matkul}}</td>
                <td>{{ $pengampu->id_kelas}}</td>    
        </tbody>
    </table>
    </div>
    <a href="/home/dftrpengampu" class="btn btn-secondary">Kembali</a>
@endsection


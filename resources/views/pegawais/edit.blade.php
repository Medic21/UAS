@extends('layouts.app')
  
@section('title', 'Edit Pegawai')
  
@section('contents')
    <h1 class="mb-0">Edit Pegawai</h1>
    <hr />
    <form action="{{ route('pegawais.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $pegawai->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Gaji</label>
                <input type="text" name="gaji" class="form-control" placeholder="gaji" value="{{ $pegawai->gaji }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="Jabatan" class="form-control" placeholder="Jabatan" value="{{ $pegawai->Jabatan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="alamat" >{{ $pegawai->alamat }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
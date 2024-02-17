@extends('layouts.app')
  
@section('title', 'Create Pegawai')
  
@section('contents')
    <h1 class="mb-0">Add Pegawai</h1>
    <hr />
    <form action="{{ route('pegawais.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="nama">
            </div>
            <div class="col">
                <input type="text" name="gaji" class="form-control" placeholder="gaji">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jabatan" class="form-control" placeholder="Pegawai Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="alamat" placeholder="alamat"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
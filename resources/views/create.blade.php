@extends('layouts.main')

@section('container')
    <form action="{{ url('/store') }}" method="POST">
        @csrf
        <h1>Tambah Data Mahasiswa</h1>
        <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa: </label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa: </label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi: </label>
            <input type="text" class="form-control" id="prodi" name="prodi">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

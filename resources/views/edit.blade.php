@extends('layouts.main')

@section('container')
    <form action="{{ url('/update' . '/' . $model->id) }}" method="POST">
        @csrf
        {{-- @method('PATCH') --}}
        <h1>Edit Data Mahasiswa</h1>
        {{-- <input type="hidden" name="_method" value="PATCH"> --}}
        <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa: </label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                value="{{ $model->nama_mahasiswa }}">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa: </label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $model->nim }}">
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi: </label>
            <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $model->prodi }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

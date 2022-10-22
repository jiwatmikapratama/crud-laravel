@extends('layouts.main')
@section('container')
    <a href="{{ url('/create') }}" class="btn btn-primary my-4">Tambah Data</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($datas as $key => $value)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $value->nama_mahasiswa }}</td>
                    <td>{{ $value->nim }}</td>
                    <td>{{ $value->prodi }}</td>
                    <td>
                        <a href="" class="btn btn-danger">Hapus</a>
                        <a href="{{ url('/edit' . '/' . $value->id) }}" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

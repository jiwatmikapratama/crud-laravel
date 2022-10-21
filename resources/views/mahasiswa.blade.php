@extends('layouts.main')
@section('container')
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($datas as $key => $value)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $value->nama_mahasiswa }}</td>
                    <td>{{ $value->nim }}</td>
                    <td>{{ $value->prodi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layout.main')

@section('title', 'mahasiswa')
@section('heading', 'mahasiswa')
@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        mahasiswa
        <a href="/createmahasiswa" class="btn btn-primary">add</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>mahasiswa</th>
                    <th>NIM</th>
                    <th>No telepon</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($data as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->mahasiswa }}</td>
                    <td>{{ $row->NIM }}</td>
                    <td>{{ $row->notelepon }}</td>
                    <td>
                        <a href="/deletedatamahasiswa{{ $row->id }}" class="btn btn-danger">hapus</a>
                        <a href="/tampildatamahasiswa/{{ $row->id }}" class="btn btn-warning">edit</a>
                        <a href="/detailmahasiswa/{{ $row->id }}" class="btn btn-info">detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
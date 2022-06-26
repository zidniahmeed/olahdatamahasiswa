@extends('layout.main')

@section('title', 'jurusan')
@section('heading', 'jurusan')
@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        jurusan
        <a href="/createjurusan" class="btn btn-primary">add</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>jurusan</th>
                    <th>fakultas</th>
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
                    <td>{{ $row->jurusan }}</td>
                    <td>{{ $row->Fakultas->fakultas }}</td>
                    <td>
                        <a href="/deletedatajurusan{{ $row->id }}" class="btn btn-danger">hapus</a>
                        <a href="/tampildatajurusan/{{ $row->id }}" class="btn btn-warning">edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@extends('layout.main')

@section('title', 'fakultas')
@section('heading', 'fakultas')
@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        fakultas
        <a href="/createfakultas" class="btn btn-primary">add</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Fakultas</th>
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
                    <td>{{ $row->fakultas }}</td>
                    <td>
                        <a href="/deletedatafakultas{{ $row->id }}" class="btn btn-danger">hapus</a>
                        <a href="/tampildatafakultas/{{ $row->id }}" class="btn btn-warning">edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
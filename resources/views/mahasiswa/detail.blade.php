@extends('layout.main')

@section('title', 'detail mahasiswa')
@section('heading', 'detail mahasiswa')
@section('content')
<div class="contaniner">
    <div class="row">
        <div class="col-md-6">
            <table style="width: 400px">
                <tr>
                    <td>Nama</td>
                    <td>:{{ $data->mahasiswa }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:{{ $data->NIM }}</td>
                </tr>
                <tr>
                    <td>No telepon</td>
                    <td>:{{ $data->notelepon }}</td>
                </tr>
                <tr>
                    <td>jenis kelamin</td>
                    <td>:{{ $data->jeniskelamin }}</td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>:{{ $data->alamat }}</td>
                </tr>
                <tr>
                    <td>jurusan</td>
                    <td>:{{ $data->Jurusan->jurusan }}</td>
                </tr>
                <tr>
                    @php
                    $id = $data->Jurusan->id_fakultas;
                    $fakultas = App\Models\Fakultas::where('id','=',$id)->first();
                    @endphp
                    <td>Fakultas</td>
                    <td>:{{ $fakultas->fakultas }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <img src="/fotomahasiswa/{{ $data->foto }}" width="300">
        </div>
    </div>
</div>
@endsection
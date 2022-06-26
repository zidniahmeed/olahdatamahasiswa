@extends('layout.main')
@section('title', 'dashboard')
@section('heading', 'dashboard')

@section('content')
<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">fakultas</h5>
                @php
                $data = App\Models\Fakultas::count();
                @endphp
                <h5>
                    {{ $data }} Fakultas
                </h5>
                <a href="/fakultas" class="btn btn-primary">Fakultas</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">jurusan</h5>
                @php
                $data = App\Models\Jurusan::count();
                @endphp
                <h5>
                    {{ $data }} Jurusan
                </h5>
                <a href="/jurusan" class="btn btn-primary">jurusan</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">mahasiswa</h5>
                @php
                $data = App\Models\Mahasiswa::count();
                @endphp
                <h5>
                    {{ $data }} Mahasiswa
                </h5>
                <a href="/mahasiswa" class="btn btn-primary">Mahasiswa</a>
            </div>
        </div>
    </div>
</div>
@endsection
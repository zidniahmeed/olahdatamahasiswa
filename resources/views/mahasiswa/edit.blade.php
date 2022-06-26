@extends('layout.main')

@section('title', 'edit mahasiswa')
@section('heading', 'edit mahasiswa')
@section('content')
<form method="post" action="/updatedatamahasiswa/{{ $data->id }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>mahasiswa</label>
        <input type="text" class="form-control" name="mahasiswa" value="{{ $data->mahasiswa }}" required>
    </div>
    <div class="form-group">
        <label>Nomor Induk mahasiswa</label>
        <input type="number" class="form-control" name="NIM" value="{{ $data->NIM }}" required>
    </div>
    <div class="form-group">
        <label>Nomor telepon</label>
        <input type="number" class="form-control" name="notelepon" value="{{ $data->notelepon }}" required>
    </div>
    <div class="form-group">
        @php
        $select = $data->jeniskelamin
        @endphp
        <label>Jenis Kelamin</label>
        <select name="jeniskelamin" class="form-control">
            <option value="laki-laki" {{ $select==='laki-laki' ? 'selected=" selected"' : '' }} ">laki-laki</option>
            <option value=" perempuan" {{ $select==='perempuan' ? 'selected="selected"' : '' }}">perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label>alamat</label>
        <textarea name="alamat" cols="30" rows="10">{{ $data->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label>foto mahasiswa</label>
        <input type="file" class="form-control" name="foto" value="{{ $data->foto }}">
        <img src="/fotomahasiswa/{{ $data->foto }}" width="200" alt="">
    </div>
    <div class="form-group">
        <label>jurusan</label>
        <select name="id_jurusan" class="form-control">

            <option selected disabled value="{{ $data->id_jusuran }}">
                {{ $data->Jurusan->jurusan }}
            </option>

            @foreach(App\Models\Jurusan::get() as $key)
            <option value="{{ $key->id }}">
                {{ $key->jurusan }}
            </option>
            @endforeach

        </select>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@extends('layout.main')

@section('title', 'create mahasiswa')
@section('heading', 'create mahasiswa')
@section('content')
<form method="post" action="/insertdatamahasiswa" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>mahasiswa</label>
        <input type="text" class="form-control" name="mahasiswa" required>
    </div>
    <div class="form-group">
        <label>Nomor Induk mahasiswa</label>
        <input type="number" class="form-control" name="NIM" required>
    </div>
    <div class="form-group">
        <label>Nomor telepon</label>
        <input type="number" class="form-control" name="notelepon" required>
    </div>
    <div class="form-group">
        <label>Nomor telepon</label>
        <select name="jeniskelamin" class="form-control">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label>alamat</label>
        <textarea name="alamat" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label>foto mahasiswa</label>
        <input type="file" class="form-control" name="foto" required>
    </div>
    <div class="form-group">
        <label>jurusan</label>
        <select name="id_jurusan" class="form-control" required>
            <option value="">pilih jurusan</option>
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
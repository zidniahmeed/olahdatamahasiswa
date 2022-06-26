@extends('layout.main')

@section('title', 'create jurusan')
@section('heading', 'create jurusan')
@section('content')
<form method="post" action="/insertdatajurusan">
    @csrf
    <div class="form-group">
        <label>jurusan</label>
        <input type="text" class="form-control" name="jurusan" required>
    </div>
    <div class="form-group">
        <label>fakultas</label>
        <select name="id_fakultas" class="form-control" required>
            <option value="">pilih fakultas</option>
            @foreach(App\Models\Fakultas::get() as $key)
            <option value="{{ $key->id }}">
                {{ $key->fakultas }}
            </option>
            @endforeach

        </select>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
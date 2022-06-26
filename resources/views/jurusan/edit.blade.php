@extends('layout.main')

@section('title', 'edit jurusan')
@section('heading', 'edit jurusan')
@section('content')
<form method="post" action="/updatedatajurusan/{{ $data->id }}">
    @csrf
    <div class="form-group">
        <label>jurusan</label>
        <input type="text" class="form-control" name="jurusan" value="{{ $data->jurusan }}" required>
    </div>
    <label>fakultas</label>
    <select name="id_fakultas" class="form-control" required>
        <option value="{{ $data->id_fakultas }}">{{ $data->Fakultas->fakultas }}</option>
        @foreach(App\Models\Fakultas::get() as $key)
        <option value="{{ $key->id }}">
            {{ $key->fakultas }}
        </option>
        @endforeach

    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
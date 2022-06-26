@extends('layout.main')

@section('title', 'create fakultas')
@section('heading', 'create fakultas')
@section('content')
<form method="post" action="/insertdatafakultas">
    @csrf
    <div class="form-group">
        <label>Fakultas</label>
        <input type="text" class="form-control" name="fakultas" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
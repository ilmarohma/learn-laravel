@extends('master')

@section('content')
<form method="POST" action="{{ route('pertanyaan.store') }}">
    @csrf
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul" placeholder="CRUD Laravel">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <input type="text" class="form-control" id="isi" name="isi" placeholder="Pertanyaan maksimal 255 karakter">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
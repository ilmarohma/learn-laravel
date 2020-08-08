@extends('master')

@section('content')
<br>
<a class="btn btn-primary" href="{{ route('pertanyaan.create') }}">+ Tambah pertanyaan</a>
<br><br>
<table class="table table-striped table-bordered">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Diperbaharui</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pertanyaans as $key => $prt)
    <tr>
      
        <td>{{ $key+1 }}</td>
        <td>{{ $prt->judul }}</td>
        <td>{{ $prt->isi }}</td>
        <td>{{ $prt->tanggal_dibuat }}</td>
        <td>{{ $prt->tanggal_diperbaharui }}</td>
        <td>
            <form action="{{ route('pertanyaan.destroy',$prt->id) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('pertanyaan.show',$prt->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('pertanyaan.edit',$prt->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
@extends('master')

@section('content')
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
    </tr>
    @endforeach
</table>
@endsection
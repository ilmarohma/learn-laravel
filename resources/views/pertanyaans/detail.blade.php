@extends('master')

@section('content')
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Pertanyaan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Judul: </b>{{$pertanyaan->judul}}</li>
                    <li class="list-group-item"><b>Pertanyaan: </b>{{$pertanyaan->isi}}</li>
                    <li class="list-group-item"><b>Tanggal Dibuat: </b>{{$pertanyaan->tanggal_dibuat}}</li>
                    <li class="list-group-item"><b>Tanggal Diperbaharui: </b>{{$pertanyaan->tanggal_diperbaharui}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('pertanyaan.index') }}">Kembali</a>

        </div>
    </div>
</div>
    
@endsection

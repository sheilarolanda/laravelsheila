@extends('main')

@section('title', 'Program Studi')


@section('content')
<a href="{{ route('prodi.create') }}" class="btn btn-primary mb-3">Tambah Prodi</a>
<h1> Data Prodi</h1>
<table class="table table-bordered table-hover" border="1" cellpadding="10" cellspacing="0" >
    <tr>@
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
    </tr>

    @foreach($prodis as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama_fakultas ?? '-' }}</td>
    </tr>
    @endforeach

</table>
@endsection
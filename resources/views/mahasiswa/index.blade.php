@extends('main')

@section('title', 'mahasiswa')


@section('content')
<a href="{{ route('prodi.create') }}" class="btn btn-primary mb-3">Tambah Prodi</a>
<h1> Data Prodi</h1>
<table class="table table-bordered table-hover" border="1" cellpadding="10" cellspacing="0" >
    <tr>@
        <th>No</th>
        <th>Nama </th>
        <th>ProgramStudi</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswa as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $mhs->npm }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->prodiu->nama_prodi??'-' }}</td>
    </td>
        <td>
            @if ($mhs->foto)
            <img src="{{ asset }}('storage/'. $mhs->foto)}}"alt="Foto" width="50">         
            @else
                <span class="text-muted">Tidak ada foto</span>
            @endif
       
    </tr>
    @endforeach

</table>
@endsection
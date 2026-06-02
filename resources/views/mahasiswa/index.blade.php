
@extends('main')

@section('title', 'mahasiswa')

@section('content')
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
<h1>Data Mahasiswa</h1>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $key => $mhs)
                {{ $mhs->nama }}
    
            <tr>
                <td>{{ $mhs->npm }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->prodi->nama_prodi ?? '-' }}</td>
                <td>
                    @if ($mhs->foto)
                        <img src="{{ asset('storage/' . $mhs->foto) }}" alt="Foto" width="50">
                    @else
                        <span class="text-muted">Tidak ada foto</span>
                    @endif
                </td>
                <td>
                    <!-- Aksi edit / hapus -->
                </td>
            </tr>
             @endforeach
    </tbody>
</table>
@endsection
@extends('main')

@section('title')
    <h1>Tambah Prodi</h1>
@endsection

@section('content')
    <a href="{{ route('prodi.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ route('prodi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_prodi" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="{{ old('nama_prodi') }}" required>
            @error('nama_prodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="singkatan" class="form-label">Singkatan</label>
            <input type="text" class="form-control" id="singkatan" name="singkatan" value="{{ old('singkatan') }}" maxlength="2" required>
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kaprodi" class="form-label">Nama Kaprodi</label>
            <input type="text" class="form-control" id="kaprodi" name="kaprodi" value="{{ old('kaprodi') }}" maxlength="30" required>
            @error('kaprodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
         <div class="form-group">
            <label for="fakultas_id" class="form-label">Fakultas</label>
            <select name="fakultas_id" class="form-control">
                <option value="">Pilih Fakultas</option>
                @foreach($fakultas as $item)
                    <option value="{{ $item->id }}" {{ old('fakultas_id') == $item->id ? 'selected' : '' }}>{{ $item->nama_fakultas }}</option>
                @endforeach
            </select>
            @error('fakultas_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
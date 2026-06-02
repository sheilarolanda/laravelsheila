@extends('main')

@section('title', 'Tambah Fakultas')

@section('content')
    <form action="{{ route('fakultas.store') }}" method="post">
    @csrf
    <div class="m-3">
        <h5>Form Pengisian Data Fakultas</h5>
        <div class="form-group">
            <label for="nama" class="form-label">Nama Fakultas</label>
            <input type="text" name="nama_fakultas" class="form-control" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan" class="form-label">Singkatan Fakultas</label>
            <input type="text" name="singkatan" class="form-control" value="{{ old('singkatan') }}">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror   
        </div>
        <div class="form-group">
            <label for="dekan" class="form-label">Nama Dekan Fakultas</label>
            <input type="text" name="dekan" class="form-control" id="dekan" value="{{ old('dekan') }}">
            @error('dekan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
@endsection
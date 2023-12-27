@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <h2>Edit Pegawai</h2>
        <form method="post" action="{{ route('admin.pegawai.update', $pegawai->id) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" value="{{ $pegawai->jabatan }}" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur:</label>
                <input type="number" name="umur" class="form-control" value="{{ $pegawai->umur }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea name="alamat" class="form-control" required>{{ $pegawai->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

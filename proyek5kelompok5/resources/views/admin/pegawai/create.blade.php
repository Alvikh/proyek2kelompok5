@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Pegawai Baru</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.pegawai.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan:</label>
                        <input type="text" name="jabatan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur:</label>
                        <input type="number" name="umur" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <textarea name="alamat" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<!-- dalam file resources/views/admin/capacities/create.blade.php -->
@extends('layouts.admin.admin')

@section('main-content')
    <div class="container mt-5">
        <h2>Tambah Kapasitas Panel Surya</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.capacities.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="capacity">Kapasitas:</label>
                <input type="text" name="capacity" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <a href="{{ route('admin.capacities.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </div>
@endsection

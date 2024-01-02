<!-- admin.data-pemasangan.edit.blade.php -->

@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Installation</h3>
            </div>
            <div class="card-body">
                <!-- Form for editing an installation -->
                <form action="{{ route('admin.data-pemasangan.update', $installation->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <!-- Installation Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $installation->title }}" required>
                    </div>

                    <!-- Capacity -->
                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacity:</label>
                        <input type="text" name="capacity" class="form-control" value="{{ optional($installation->capacity)->capacity }}" required>
                    </div>

                    <!-- Storage -->
                    <div class="mb-3">
                        <label for="storage" class="form-label">Storage:</label>
                        <input type="text" name="storage" class="form-control" value="{{ optional($installation->storage)->storage }}" required>
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" value="{{ $installation->nama }}" required>
                    </div>

                    <!-- Kota -->
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota:</label>
                        <input type="text" name="kota" class="form-control" value="{{ $installation->kota }}" required>
                    </div>

                    <!-- Nomor HP -->
                    <div class="mb-3">
                        <label for="hp" class="form-label">Nomor HP:</label>
                        <input type="text" name="hp" class="form-control" value="{{ $installation->hp }}" required>
                    </div>

                    <!-- Daya kWh Meter PLN -->
                    <div class="mb-3">
                        <label for="daya" class="form-label">Daya kWh Meter PLN:</label>
                        <input type="text" name="daya" class="form-control" value="{{ $installation->daya }}" required>
                    </div>

                    <!-- Pesan -->
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan:</label>
                        <textarea name="pesan" class="form-control">{{ $installation->pesan }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Installation</button>
                </form>
            </div>
        </div>
    </div>
@endsection

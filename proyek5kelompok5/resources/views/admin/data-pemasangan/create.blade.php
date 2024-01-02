@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Create New Installation</h3>
            </div>
            <div class="card-body">
                <!-- Form for creating a new installation -->
                <form action="{{ route('admin.data-pemasangan.store') }}" method="post">
                    @csrf

                    <!-- Installation Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Produk:</label>
                        <input type="text" name="title" class="form-control" required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Capacity -->
                    <div class="mb-3">
                        <label for="capacity" class="form-label">Kapasitas:</label>
                        <input type="text" name="capacity" class="form-control" required>
                        @error('capacity')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Storage -->
                    <div class="mb-3">
                        <label for="storage" class="form-label">Penyimpanan:</label>
                        <input type="text" name="storage" class="form-control" required>
                        @error('storage')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kota -->
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota:</label>
                        <input type="text" name="kota" class="form-control" required>
                        @error('kota')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nomor HP -->
                    <div class="mb-3">
                        <label for="hp" class="form-label">Nomor HP:</label>
                        <input type="text" name="hp" class="form-control" required>
                        @error('hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Daya kWh Meter PLN -->
                    <div class="mb-3">
                        <label for="daya" class="form-label">Daya:</label>
                        <input type="text" name="daya" class="form-control" required>
                        @error('daya')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Pesan -->
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan:</label>
                        <textarea name="pesan" class="form-control"></textarea>
                        @error('pesan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

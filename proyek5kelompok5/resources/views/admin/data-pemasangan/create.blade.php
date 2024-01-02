<!-- admin.data-pemasangan.create.blade.php -->

@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <h3>Create New Installation</h3>

        <!-- Form for creating a new installation -->
        <form action="{{ route('admin.data-pemasangan.store') }}" method="post">
            @csrf

            <!-- Installation Title -->
            <label for="title">Title:</label>
            <input type="text" name="title" required>

            <!-- Capacity -->
            <label for="capacity">Capacity:</label>
            <input type="text" name="capacity" required>

            <!-- Storage -->
            <label for="storage">Storage:</label>
            <input type="text" name="storage" required>

            <!-- Nama Lengkap -->
            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama" required>

            <!-- Kota -->
            <label for="kota">Kota:</label>
            <input type="text" name="kota" required>

            <!-- Nomor HP -->
            <label for="hp">Nomor HP:</label>
            <input type="text" name="hp" required>

            <!-- Daya kWh Meter PLN -->
            <label for="daya">Daya kWh Meter PLN:</label>
            <input type="text" name="daya" required>

            <!-- Pesan -->
            <label for="pesan">Pesan:</label>
            <textarea name="pesan"></textarea>

            <button type="submit">Create Installation</button>
        </form>
    </div>
@endsection

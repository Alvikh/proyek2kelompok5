<!-- admin.data-pemasangan.edit.blade.php -->

@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <h3>Edit Installation</h3>

        <!-- Form for editing an installation -->
        <form action="{{ route('admin.data-pemasangan.update', $installation->id) }}" method="post">
            @csrf
            @method('PUT')

            <!-- Installation Title -->
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ $installation->title }}" required>

            <!-- Capacity -->
            <label for="capacity">Capacity:</label>
            <input type="text" name="capacity" value="{{ optional($installation->capacity)->capacity }}" required>

            <!-- Storage -->
            <label for="storage">Storage:</label>
            <input type="text" name="storage" value="{{ optional($installation->storage)->storage }}" required>

            <!-- Nama Lengkap -->
            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama" value="{{ $installation->nama }}" required>

            <!-- Kota -->
            <label for="kota">Kota:</label>
            <input type="text" name="kota" value="{{ $installation->kota }}" required>

            <!-- Nomor HP -->
            <label for="hp">Nomor HP:</label>
            <input type="text" name="hp" value="{{ $installation->hp }}" required>

            <!-- Daya kWh Meter PLN -->
            <label for="daya">Daya kWh Meter PLN:</label>
            <input type="text" name="daya" value="{{ $installation->daya }}" required>

            <!-- Pesan -->
            <label for="pesan">Pesan:</label>
            <textarea name="pesan">{{ $installation->pesan }}</textarea>

            <button type="submit">Update Installation</button>
        </form>
    </div>
@endsection

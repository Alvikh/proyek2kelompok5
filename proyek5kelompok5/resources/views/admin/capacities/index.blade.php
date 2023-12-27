<!-- dalam file resources/views/admin/capacities/index.blade.php -->

@extends('layouts.admin.admin')

@section('main-content')
    <h2>Daftar Kapasitas Panel Surya</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Kapasitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($capacities as $capacity)
                <tr>
                    <td>{{ $capacity->id }}</td>
                    <td>{{ $capacity->capacity }}</td>
                    <td>
                        <a href="{{ route('admin.capacities.edit', $capacity->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.capacities.destroy', $capacity->id) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Tidak ada kapasitas panel surya.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('admin.capacities.create') }}" class="btn btn-primary">Tambah Kapasitas</a>
@endsection

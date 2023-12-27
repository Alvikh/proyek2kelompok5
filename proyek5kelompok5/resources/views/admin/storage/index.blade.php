<!-- dalam file resources/views/admin/capacities/index.blade.php -->

@extends('layouts.admin.admin')

@section('main-content')
    <h2>Daftar Storage</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Storage</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($storage as $storages)
                <tr>
                    <td>{{ $storages->id }}</td>
                    <td>{{ $storages->storage }}</td>
                    <td>
                        <a href="{{ route('admin.storage.edit', $storages->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.storage.destroy', $storages->id) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Tidak ada Storage</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('admin.storage.create') }}" class="btn btn-primary">Tambah Storage</a>
@endsection

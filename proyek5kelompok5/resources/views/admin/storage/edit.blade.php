
@extends('layouts.admin.admin')

@section('main-content')
    <div class="container mt-5">
        <h2>Edit Storage</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.storage.update', $storages->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="storage">Storage:</label>
                <input type="text" name="storage" value="{{ $storages->storage }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>

        <a href="{{ route('admin.storage.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </div>
@endsection

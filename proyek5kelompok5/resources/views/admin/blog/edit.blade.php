<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

@extends('layouts.admin.admin')

@section('main-content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Kapasitas Panel Surya</label>
                                <select class="form-control @error('capacity_id') is-invalid @enderror" name="capacity_id">
                                    <option value="" disabled>Select Capacity</option>
                                    @foreach ($capacities as $capacity)
                                        <option value="{{ $capacity->id }}" {{ $blog->capacity_id == $capacity->id ? 'selected' : '' }}>
                                            {{ $capacity->capacity }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('capacity_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Penyimpanan</label>
                                <select class="form-control @error('storage_id') is-invalid @enderror" name="storage_id">
                                    <option value="" disabled>Select Storage</option>
                                    @foreach ($storage as $item)
                                        <option value="{{ $item->id }}" {{ $blog->storage_id == $item->id ? 'selected' : '' }}>
                                            {{ $item->storage }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('storage_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                @if($blog->image)
                                    <img src="{{ asset($blog->image) }}" alt="Blog Image" class="img-thumbnail mt-2" style="max-width: 200px">
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Produk</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $blog->title) }}" placeholder="Enter Blog Title">
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Spesifikasi</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Enter Blog Content">{{ old('content', $blog->content) }}</textarea>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-md btn-secondary">Cancel</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>

</body>

</html>

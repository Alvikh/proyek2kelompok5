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
                        <h2 class="font-weight-bold mb-4">List Produk</h2>
                        <div class="mb-3">
                            <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-success">Create Blog</a>
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No.</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Spesifikasi</th>
                                    <th scope="col">Kapasitas</th>
                                    <th scope="col">Penyimpanan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
<!-- ... -->
<tbody>
    @foreach($blogs as $blog)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
                @if($blog->image)
                    <img src="{{ asset($blog->image) }}" alt="Blog Image" width="50">
                @endif
            </td>
            <td>{{ $blog->title }}</td>
            <td>{!! $blog->content !!}</td>
            <td>{{ $blog->capacity }}</td>
            <td>{{ $blog->storage }}</td>
            <td>
                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
<!-- ... -->


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paket Produk</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

@extends('layouts.app')

@section('content')
<body style="background: lightgray">
    <div class="container mt-5">


        @if (session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif

        <div class="row mt-3">
            @forelse ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="font-weight-bold">{{ $blog->title }}</h3>
                            @if($blog->image)
                                <img src="{{ asset($blog->image) }}" alt="Blog Image" class="img-fluid blog-image mb-3">
                            @endif
                            <p>Capacity: {{ optional($blog->capacity)->capacity }}</p>
                            <p>Storage: {{ optional($blog->storage)->storage }}</p>

                            <!-- Add Pasang Sekarang and Lihat Spesifikasi links -->
                            <!-- Add Pasang Sekarang and Lihat Spesifikasi links -->
<div class="mt-2">
    <a href="{{ route('user.blogs') }}" class="btn btn-sm btn-success">Pasang Sekarang</a>
    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal{{ $blog->id }}">Lihat Spesifikasi</button>
</div>

                        </div>
                    </div>
                </div>
                <!-- Modal -->
<div class="modal fade" id="exampleModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $blog->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                <!-- Your specific content goes here -->
                {!! $blog->content !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Add additional buttons or actions as needed -->
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

            @empty
                <div class="col-md-12">
                    <div class="alert alert-warning">No blogs available</div>
                </div>
            @endforelse
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('layouts.footer')
    @endsection
</body>
</html>

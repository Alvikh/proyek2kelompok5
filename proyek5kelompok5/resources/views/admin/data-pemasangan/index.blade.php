<!-- admin.data-pemasangan.index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Admin Confirmation</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <!-- Add any additional styles if needed -->

    <style>
        /* Add your custom styles for the table here */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        button {
            padding: 5px 10px;
            cursor: pointer;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</head>

@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <h3>Data Pemasangan</h3>

        <!-- Add button for creating a new installation -->
        <a href="{{ route('admin.data-pemasangan.create') }}">
            <button>Create New Installation</button>
        </a>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Capacity</th>
                    <th>Storage</th>
                    <th>Nama Lengkap</th>
                    <th>Kota</th>
                    <th>Nomor HP</th>
                    <th>Daya kWh Meter PLN</th>
                    <th>Pesan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($confirmedInstallations as $installation)
                    <tr>
                        <td>{{ $installation->title }}</td>
                        <td>{{ optional($installation->capacity)->capacity }}</td>
                        <td>{{ optional($installation->storage)->storage }}</td>
                        <td>{{ $installation->nama }}</td>
                        <td>{{ $installation->kota }}</td>
                        <td>{{ $installation->hp }}</td>
                        <td>{{ $installation->daya }}</td>
                        <td>{{ $installation->pesan }}</td>
                        <td>
                            <!-- Add edit and delete actions -->
                            <a href="{{ route('admin.data-pemasangan.edit', $installation->id) }}">Edit</a>
                            |
                            <form action="{{ route('admin.data-pemasangan.destroy', $installation->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
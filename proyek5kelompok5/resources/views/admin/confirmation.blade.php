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
<body>

    <div>
        <center>
            <h2>Admin Confirmation</h2>
        </center>
    </div>

    <div class="container">
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formulations as $formulation)
                <tr>
                    <td>{{ $formulation->title }}</td>
                    <td>{{ optional($formulation->capacity)->capacity }}</td>
                    <td>{{ optional($formulation->storage)->storage }}</td>
                    <td>{{ $formulation->nama }}</td>
                    <td>{{ $formulation->kota }}</td>
                    <td>{{ $formulation->hp }}</td>
                    <td>{{ $formulation->daya }}</td>
                    <td>{{ $formulation->pesan }}</td>
                    <td>
                        <!-- Check the status and set button content accordingly -->
                        @if($formulation->status == 'confirmed')
                            Confirmed
                        @else
                            <form action="{{ route('admin.confirm', $formulation->id) }}" method="post">
                                @csrf
                                <button type="submit">Confirm</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>

</html>
@endsection

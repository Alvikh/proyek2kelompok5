
@extends('layouts.admin.admin')

@section('main-content')

<h3>Confirmed Items</h3>

<style>
    .custom-btn-color {
        background-color: #5AB7F4; 
        color: #fff; 
    }
    /* Custom Table Styles */
    .table-custom {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    .table-custom th, .table-custom td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: left;
        color: #000; /* Black text color added */
    }

    .table-custom th {
        background-color: #5AB7F4;
        border: 1px solid #fff; /* Black border added */
        color: #fff; /* Text color */
    }
    .table-custom tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table-custom tbody tr:hover {
        background-color: #e6f7ff;
    }

    .btn-custom {
        margin-right: 5px;
    }
</style>

        <table class="table table-custom">
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
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
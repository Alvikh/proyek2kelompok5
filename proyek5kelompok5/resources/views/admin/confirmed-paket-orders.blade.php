@extends('layouts.admin.admin')

@section('main-content')
    <h1>Data Customer</h1>

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
                <th>Nama</th>
                <th>Kota</th>
                <th>Nomor HP</th>
                <th>Daya</th>
                <th>Paket Kebutuhan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($confirmedPaketOrders as $paketOrder)
                <tr>
                    <td style="padding: 5px; width: 20%;">{{ $paketOrder->nama }}</td>
                    <td style="padding: 5px; width: 10%;">{{ $paketOrder->kota }}</td>
                    <td style="padding: 5px; width: 10%;">{{ $paketOrder->hp }}</td>
                    <td style="padding: 5px; width: 10%;">{{ $paketOrder->daya }}</td>
                    <td style="padding: 5px; width: 20%;">{{ $paketOrder->paket_kebutuhan }}</td>
                    <td style="padding: 5px; width: 20%;">{{ $paketOrder->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.admin.admin')

@section('main-content')

<h2>Admin Konfirmasi Form</h2>

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

    .table-custom th,
    .table-custom td {
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
            <th>Nama Produk</th>
            <th>Kapasitas</th>
            <th>Penyimpanan</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Nomor HP</th>
            <th>Daya</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($formulations as $formulation)
        <tr>
            <td>{{ $formulation->title }}</td>
            <td>{{ $formulation->capacity }}</td>
            <td>{{ $formulation->storage }}</td>
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
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@extends('layouts.admin.admin')

@section('main-content')

    <h2>Data Pemasangan</h2>
        <a href="{{ route('admin.data-pemasangan.create') }}" class="btn custom-btn-color mb-3">Masukkan Pemasukkan</a>     


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
                padding: 10px; /* Increase padding for better readability */
                text-align: left;
                color: #000;
            }
        
            .table-custom th {
                background-color: #5AB7F4;
                border: 1px solid #fff;
                color: #fff;
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
        
    
</head>
        <table class="table-custom">
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
                        <td style="width: 140px; padding: 10px;" >{{ $installation->title }}</td>
                        <td style="width: 150px; padding: 10px;" >{{ optional($installation->capacity)->capacity }}</td>
                        <td style="width: 150px; padding: 10px;">{{ optional($installation->storage)->storage }}</td>
                        <td style="width: 150px; padding: 10px;">{{ $installation->nama }}</td>
                        <td>{{ $installation->kota }}</td>
                        <td>{{ $installation->hp }}</td>
                        <td>{{ $installation->daya }}</td>
                        <td style="width: 150px; padding: 10px;">{{ $installation->pesan }}</td>
                        <td>
                            <!-- Add edit and delete actions -->
                            <a href="{{ route('admin.data-pemasangan.edit', $installation->id) }}" class="btn btn-warning btn-custom">Edit</a>
                            <form action="{{ route('admin.data-pemasangan.destroy', $installation->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('Apakah Anda yakin ingin menghapus data pemasukkan?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection

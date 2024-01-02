@extends('layouts.admin.admin')

@section('main-content')

        <h2>Data Pegawai</h2>
        <a href="{{ route('admin.pegawai.create') }}" class="btn custom-btn-color mb-3">Tambah Pegawai</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

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
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td style="padding: 5px; width: 20%;">{{ $p->nama }}</td>
                    <td style="padding: 5px; width: 20%;">{{ $p->jabatan }}</td>
                    <td style="padding: 5px; width: 10%;">{{ $p->umur }}</td>
                    <td style="padding: 5px; width: 30%;">{{ $p->alamat }}</td>
                    <td style="padding: 5px; width: 20%;">
                        <a href="{{ route('admin.pegawai.edit', $p->id) }}" class="btn btn-warning btn-custom">Edit</a>
                        <form action="{{ route('admin.pegawai.destroy', $p->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('Apakah Anda yakin ingin menghapus data pegawai?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>

@endsection

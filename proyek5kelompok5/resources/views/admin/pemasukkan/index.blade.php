@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <h2>Data Pemasukkan</h2>
        <a href="{{ route('pemasukkan.create') }}" class="btn custom-btn-color mb-3">Masukkan Pemasukkan</a>

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
                    <th>Tanggal</th>
                    <th>Uang Masuk</th>
                    <th>Uang Keluar</th>
                    <th>Jumlah Sisa Uang Masuk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalJumlahSisaUangMasuk = 0;
                @endphp
            
                @foreach($pemasukkan as $item)
                    <tr>
                        <td style="padding: 5px; width: 20%;">{{ $item->tanggal }}</td>
                        <td style="padding: 5px; width: 20%;">{{ number_format($item->uang_masuk, 0, ',', '.') }}</td>
                        <td style="padding: 5px; width: 20%;">{{ number_format($item->uang_keluar, 0, ',', '.') }}</td>
                        <td style="padding: 5px; width: 20%;">{{ number_format($item->jumlah_sisa_uang_masuk, 0, ',', '.') }}</td>
                        <td style="padding: 5px; width: 20%;">
                            <a href="{{ route('pemasukkan.edit', $item->id) }}" class="btn btn-warning btn-custom">Edit</a>
                            <form action="{{ route('pemasukkan.destroy', $item->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('Apakah Anda yakin ingin menghapus data pemasukkan?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $totalJumlahSisaUangMasuk += $item->jumlah_sisa_uang_masuk;
                    @endphp
                @endforeach
            
                <tr>
                    <td colspan="3"></td>
                    <td style="padding: 5px; width: 20%;">Total: {{ number_format($totalJumlahSisaUangMasuk, 0, ',', '.') }}</td>
                    <td></td>
                </tr>
            </tbody>
            
        </table>
    </div>
@endsection

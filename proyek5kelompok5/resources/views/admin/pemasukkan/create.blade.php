@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <h2>Tambah Pemasukkan</h2>
        
        {{-- Include any form validation error messages here --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pemasukkan.store') }}" method="post">
            @csrf

            {{-- Add your form fields here --}}
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="uang_masuk">Uang Masuk:</label>
                <input type="number" name="uang_masuk" id="uang_masuk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="uang_keluar">Uang Keluar:</label>
                <input type="number" name="uang_keluar" id="uang_keluar" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jumlah_sisa_uang_masuk">Jumlah Sisa Uang Masuk:</label>
                <input type="number" name="jumlah_sisa_uang_masuk" id="jumlah_sisa_uang_masuk" class="form-control" readonly>
            </div>

            <script>
                // JavaScript code to update Jumlah Sisa Uang Masuk based on Uang Masuk and Uang Keluar
                document.getElementById('uang_masuk').addEventListener('input', updateJumlahSisa);
                document.getElementById('uang_keluar').addEventListener('input', updateJumlahSisa);

                function updateJumlahSisa() {
                    var uangMasuk = parseFloat(document.getElementById('uang_masuk').value) || 0;
                    var uangKeluar = parseFloat(document.getElementById('uang_keluar').value) || 0;

                    var jumlahSisa = uangMasuk - uangKeluar;
                    document.getElementById('jumlah_sisa_uang_masuk').value = jumlahSisa.toFixed(2);
                }
            </script>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection

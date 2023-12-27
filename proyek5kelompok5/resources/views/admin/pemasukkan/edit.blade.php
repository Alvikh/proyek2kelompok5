@extends('layouts.admin.admin')

@section('main-content')
    <div class="container">
        <h2>Edit Pemasukkan</h2>

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

        <form action="{{ route('pemasukkan.update', $pemasukkan->id) }}" method="post">
            @csrf
            @method('put')

            {{-- Add your form fields here --}}
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $pemasukkan->tanggal }}" required>
            </div>

            <div class="form-group">
                <label for="uang_masuk">Uang Masuk:</label>
                <input type="number" name="uang_masuk" class="form-control" value="{{ $pemasukkan->uang_masuk }}" required>
            </div>

            <div class="form-group">
                <label for="uang_keluar">Uang Keluar:</label>
                <input type="number" name="uang_keluar" class="form-control" value="{{ $pemasukkan->uang_keluar }}" required>
            </div>

            <div class="form-group">
                <label for="jumlah_sisa_uang_masuk">Jumlah Sisa Uang Masuk:</label>
                <input type="number" name="jumlah_sisa_uang_masuk" class="form-control" value="{{ $pemasukkan->jumlah_sisa_uang_masuk }}" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <script>
        // JavaScript code to update Jumlah Sisa Uang Masuk based on Uang Masuk and Uang Keluar
        document.addEventListener('DOMContentLoaded', function() {
            updateJumlahSisa(); // Initial calculation on page load

            document.getElementsByName('uang_masuk')[0].addEventListener('input', updateJumlahSisa);
            document.getElementsByName('uang_keluar')[0].addEventListener('input', updateJumlahSisa);

            function updateJumlahSisa() {
                var uangMasuk = parseFloat(document.getElementsByName('uang_masuk')[0].value) || 0;
                var uangKeluar = parseFloat(document.getElementsByName('uang_keluar')[0].value) || 0;

                var jumlahSisa = uangMasuk - uangKeluar;
                document.getElementsByName('jumlah_sisa_uang_masuk')[0].value = jumlahSisa.toFixed(2);
            }
        });
    </script>
@endsection

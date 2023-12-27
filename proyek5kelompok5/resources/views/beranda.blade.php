<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Yoto Agro Dita - Beranda</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Beranda.css') }}" media="screen">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

</head>
<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en">

  @include('layouts.header')
  @include('layouts.chat')

  <section class="u-clearfix u-custom-color-4 u-section-1" id="sec-6496" style="display: flex; justify-content: center; align-items: center;">
    <img class="u-image u-image-default u-image-1" src="{{ asset('img/fotoberanda1.jpg') }}" alt="Deskripsi Gambar" width="1000" height="535">
  </section>
    <section class="u-clearfix u-custom-color-4 u-section-2" id="sec-fbcb">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">
                <span style="font-weight: 700;">YOTO BASKARA Sys ENVIRONMENT</span>
                <br>
                <br>
                <span style="font-weight: 400;">Pembangkit listrik EBT sebagai sumber listrik utama<br>Smart Regulator Energy sebagai pengatur supply listrik<br>Sumber listrik lain sebagai alternatif (optional)</span>
            </p>
            <p class="u-custom-font u-font-montserrat u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xs u-text-2">KEUNGGULAN YOTO BASKARA Sys</p>
            <p class="u-custom-font u-font-montserrat u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xs u-text-3">Hybrid&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Mengintegrasikan banyak sumber listrik<br>Automatic&nbsp; &nbsp; : Tanpa interaksi operator<br>Seamless&nbsp; &nbsp; &nbsp; : Perpindahan sumber listrik tanpa downtime<br>Standalone&nbsp; : Dapat menghasilkan listrik tanpa PLN<br>Scalable&nbsp; &nbsp; &nbsp; &nbsp; : Dapat ditingkatkan kapasitasnya</p>
        </div>
    </section>
    <section class="u-clearfix u-custom-color-2 u-hidden-lg u-hidden-md u-section-3" id="sec-3d02">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">
                <span style="font-weight: 700;"></span>
                <span style="font-weight: 700;">TEKNOLOGI YANG DIGUNAKAN</span>
                <br>
                <br>Teknologi Seamless Hybrid Power Supply yang digunakan YOTO BASKARA Sys menjadikan penggunaan listrik dengan sumber energi alternatif tidak berbeda dengan PLN, berkualitas sama atau lebih baik, dan mampu berpindah sumber listrik tanpa downtime / delay.
            </p>
            <img class="u-image u-image-contain u-image-default u-image-1" src="{{ asset ('img/perbedaan.png') }}" alt="" data-image-width="817" data-image-height="290">
            <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">
                <span style="font-weight: 700;"></span>
                <span style="font-weight: 700;">SEAMLESS HYBRID POWER SUPPLY</span>
                <br>
                <br>Segera setelah beban kritis tidak menerima daya, cadangan dari berbagai sumber (salah satunya listrik tenaga matahari) mulai menyediakan daya. Tidak ada jumlah waktu yang signifikan bahwa beban tidak bertenaga. Sumber daya tanpa gangguan dengan pengalihan transfer otomatis
            </p>
        </div>
    </section>

    @include('layouts.footer')

</body>
</html>
@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>formulir terkirim</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/PaketKebutuhan.css') }}" media="screen">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/LOGOMITRA.png"
    }</script>
</head>
<body style="background-color: #3498db;">

    @section('content')
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Terima kasih!</h4>
            <p>Formulir Anda telah berhasil terkirim.</p>
            <hr>
            <p class="mb-0">Kami akan segera memproses formulir Anda. Terima kasih atas partisipasi Anda.</p>
        </div>
    </div>
    @include('layouts.footer')
    @endsection
</body>

</html>

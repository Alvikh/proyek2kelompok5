@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Formulir Terkirim</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/PaketKebutuhan.css') }}" media="screen">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white">Form Submitted Successfully</div>

                    <div class="card-body">
                        <h5 class="card-title">Thank you for submitting the form!</h5>
                        <p class="card-text">Your data has been successfully recorded.</p>
                        <!-- You can customize the content of the submitted page as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>

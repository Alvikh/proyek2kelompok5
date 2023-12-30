@include('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Pemasangan Form</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/PaketKebutuhan.css') }}" media="screen">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/LOGOMITRA.png"
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Beranda">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <style>
    * {
        box-sizing: border-box;
      }
      
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        color: black;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }
      
      label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        color: black;
      }
      
      /* Tambahkan ini ke dalam tag <style> di bagian <head> */
.row input[type=submit] {
  background-color: #5AB7F4;
  color: white;
  padding: 10px 15px; /* Sesuaikan nilai padding sesuai kebutuhan */
  border: none;
  border-radius: 4px;
  cursor: pointer;
  display: block;
  margin: 0 auto; /* Membuat tombol berada di tengah */
}

.row input[type=submit]:hover {
  background-color: black;
}

      
      .container {
        border-radius: 5px;
        background-color: #D9D9D9;
        padding: 20px;
      }
      
      .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
      }
      
      .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
      }
      
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
          width: 100%;
          margin-top: 0;
        }
      }
      </style>
</head>

<div><center><h2>Ajukan Pemasangan</h2><center/></div>
    <div class="container">

      <form action="{{ route('submitted') }}" method="post">
        @csrf

        <div class="row">
          <div class="col-25">
              <label for="title">Title</label>
          </div>
          <div class="col-75">
              <input type="text" id="title" name="title" value="{{ $blog->title }}" readonly>
          </div>
      </div>

      <div class="row">
          <div class="col-25">
              <label for="capacity">Capacity</label>
          </div>
          <div class="col-75">
              <input type="text" id="capacity" name="capacity" value="{{ optional($blog->capacity)->capacity }}" readonly>
          </div>
      </div>

      <div class="row">
          <div class="col-25">
              <label for="storage">Storage</label>
          </div>
          <div class="col-75">
              <input type="text" id="storage" name="storage" value="{{ optional($blog->storage)->storage }}" readonly>
          </div>
      </div>

        <div class="row">
            <div class="col-25">
                <label for="nama">Nama Lengkap</label>
            </div>
            <div class="col-75">
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
            </div>
        </div>
    
        <div class="row">
            <div class="col-25">
                <label for="kota">Kota</label>
            </div>
            <div class="col-75">
                <input type="text" id="kota" name="kota" placeholder="Masukkan Kota">
            </div>
        </div>
    
        <div class="row">
            <div class="col-25">
                <label for="hp">Nomor.Hp</label>
            </div>
            <div class="col-75">
                <input type="text" id="hp" name="hp" placeholder="Masukkan Nomor HP">
            </div>
        </div>
    
        <div class="row">
            <div class="col-25">
                <label for="daya">Daya kWh Meter PLN</label>
            </div>
            <div class="col-75">
                <input type="text" id="daya" name="daya" placeholder="Masukkan Daya kWh PLN">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="pesan">Pesan</label>
            </div>
            <div class="col-75">
                <textarea id="pesan" name="pesan" placeholder="Tulis Pesan Untuk Admin" style="height:200px"></textarea>
            </div>
        </div>
    
        <div class="row">
            <input type="submit" value="Kirim">
        </div>
    </form>
    
      </div>
      <br>

    </section>

    
    @include('layouts.footer')
    
</body></html>
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

  <body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-custom-color-3 u-section-1" id="sec-772a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1">SPESIFIKASI PAKET KEBUTUHAN</p>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-expanded-width u-image u-image-default u-image-1" alt="" data-image-width="800" data-image-height="628" src="img/1.png">
                <h4 class="u-text u-text-2"> Listrik Tenaga Surya Rumah Daya 450VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img class="u-expanded-width u-image u-image-default u-image-2" alt="" data-image-width="800" data-image-height="657" src="img/2.png">
                <h4 class="u-text u-text-3"> Listrik Tenaga Surya Rumah Daya 900VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img class="u-expanded-width u-image u-image-default u-image-3" alt="" data-image-width="800" data-image-height="642" src="img/3.png">
                <h4 class="u-text u-text-4"> Listrik Tenaga Surya Rumah Daya 1300VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <img class="u-expanded-width u-image u-image-default u-image-4" alt="" data-image-width="723" data-image-height="387" src="img/7.png">
                <h4 class="u-text u-text-5"> Listrik Tenaga Surya Rumah Daya 2200VA</h4>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-2">
          <div class="u-repeater u-repeater-2">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <img class="u-expanded-width u-image u-image-default u-image-5" alt="" data-image-width="723" data-image-height="406" src="img/41.png">
                <h4 class="u-text u-text-6"> Listrik Tenaga Surya Rumah Daya 2200VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <img class="u-expanded-width u-image u-image-default u-image-6" alt="" data-image-width="711" data-image-height="402" src="img/7.png">
                <h4 class="u-text u-text-7"> Listrik Tenaga Surya Rumah Daya 3500 VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <img class="u-expanded-width u-image u-image-default u-image-7" alt="" data-image-width="711" data-image-height="401" src="img/51.png">
                <h4 class="u-text u-text-8"> Listrik Tenaga Surya Rumah Daya 3500 VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <img class="u-expanded-width u-image u-image-default u-image-8" alt="" data-image-width="705" data-image-height="402" src="img/8.png">
                <h4 class="u-text u-text-9"> Listrik Tenaga Surya Rumah Daya 4400 VA</h4>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-3" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-4" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-3">
          <div class="u-repeater u-repeater-3">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-9">
                <img class="u-expanded-width u-image u-image-default u-image-9" alt="" data-image-width="705" data-image-height="401" src="img/61.png">
                <h4 class="u-text u-text-10"> Listrik Tenaga Surya Rumah Daya 4400 VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-10">
                <img class="u-expanded-width u-image u-image-default u-image-10" alt="" data-image-width="754" data-image-height="380" src="img/4.png">
                <h4 class="u-text u-text-11"> Listrik Tenaga Surya Rumah Daya 5500VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-11">
                <img class="u-expanded-width u-image u-image-default u-image-11" alt="" data-image-width="754" data-image-height="421" src="img/71.png">
                <h4 class="u-text u-text-12"> Listrik Tenaga Surya Rumah Daya 5500VA</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-12">
                <img class="u-expanded-width u-image u-image-default u-image-12" alt="" data-image-width="380" data-image-height="218" src="img/6.png">
                <h4 class="u-text u-text-13"> Other Option (Daya PLN 5500VA atau lebih)</h4>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-5" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-6" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
        <div class="u-expanded-width u-list u-list-4">
          <div class="u-repeater u-repeater-4">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-13">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-13" data-image-width="377" data-image-height="216" src="img/81.png">
                <h4 class="u-text u-text-14"> Other Option (Daya PLN 5500VA atau lebih)</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-14">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-14" data-image-width="381" data-image-height="217" src="img/9.png">
                <h4 class="u-text u-text-15"> Other Option (Daya PLN 5500VA atau lebih)</h4>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-15">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-15" data-image-width="380" data-image-height="217" src="img/10.png">
                <h4 class="u-text u-text-16"> Other Option (Daya PLN 5500VA atau lebih)</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
<br><br>
<div><center><h2>Ajukan Pemasangan</h2><center/></div>
    <div class="container">
      <form action="{{ route('submitted') }}" method="post">
        @csrf
    
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
                <label for="paket_kebutuhan">Paket Kebutuhan</label>
            </div>
            <div class="col-75">
                <select id="paket_kebutuhan" name="paket_kebutuhan">
                    <option value="paket">Pilih Paket Kebutuhan</option>
                    <option value="A">BASKARA 2kVA-1100 series</option>
                    <option value="B">BASKARA 2kVA-2200 series</option>
                    <option value="C">BASKARA 5kVA-3300 series</option>
                    <option value="D">BASKARA 5kVA-5500 series</option>
                    <option value="E">BASKARA 5kVA-6050 series</option>
                    <option value="F">BASKARA 5kVA-6600 series</option>
                    <option value="G">BASKARA 10kVA-8250 series</option>
                    <option value="H">BASKARA 10kVA-8800 series</option>
                    <option value="I">BASKARA 10kVA-9900 series</option>
                    <option value="J">BASKARA 10kVA-11k series</option>
                    <option value="K">BASKARA 10kVA-11k Plus series</option>
                    <option value="L">BASKARA 15kVA-16.5K series</option>
                    <option value="M">BASKARA 20kVA-22k series</option>
                    <option value="N">BASKARA 20kVA-22k+ series</option>
                    <option value="O">BASKARA 25kVA-27k+ series</option>
                    <option value="P">Paket Request</option>
                </select>
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
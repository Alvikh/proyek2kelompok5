<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Yoto Agro Dita - Profil</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/LOGOMITRA.png"
    }</script>
</head>

<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en" style="background-color: #5AB7F4;">

    @extends('layouts.app')
    @include('layouts.chat')

    @section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <br>
    <br>

    <div class="container-fluid">
        <div class="row ">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">
                    <center><h3>{{ __('Paket Terpasang') }}</h3></center>
                </div>
                <div class="card-body">
                    <div>
                        <h4>Digunakan</h4>
                        @if($paket && $paket->confirmation)
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $paket->nama }}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $paket->kota }}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">HP</label>
                            <div class="col-sm-10">
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $paket->hp }}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Daya</label>
                            <div class="col-sm-10">
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $paket->daya }}">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Paket Kebutuhan</label>
                            <div class="col-sm-10">
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $paket->paket_kebutuhan }}">
                            </div>
                          </div>
                          @endif
                    </div>
                    
                    <br>
                    <a href="{{ route('user.blogs') }}">Pasang Sekarang</a>
                    <br><br>
                    <br>
                </div>
                <!-- Sensor Data Charts -->
       <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="w-full p-4">
                <div class="bg-white border rounded shadow-md text-center">
                    <div class="p-3 border-b">
                        <div class="font-bold">Arus (A)</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-3xl" id="tampilkan-arus">0</h3>
                        <canvas id="arus-Grafik" class="w-full h-48"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="w-full p-4">
                <div class="bg-white border rounded shadow-md text-center">
                    <div class="p-3 border-b">
                        <div class="font-bold">Tegangan (V)</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-3xl" id="tampilkan-tegangan">0</h3>
                        <canvas id="tegangan-Grafik" class="w-full h-48"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="w-full p-4">
                <div class="bg-white border rounded shadow-md text-center">
                    <div class="p-3 border-b">
                        <div class="font-bold">Daya (W)</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-3xl" id="tampilkan-daya">0</h3>
                        <canvas id="daya-Grafik" class="w-full h-48"></canvas>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
            </div>
        </div>
        </div>
    </div>

    
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
    
    <script>
        const clientId = "POLINDRA-IOT-2023-KELOMPOK-100-" + Math.random().toString(16).substr(2, 8);
        const host = "ws://broker.hivemq.com:8000/mqtt";
    
        const options = {
            keepalive: 60,
            clientId: clientId,
            protocolId: "MQTT",
            protocolVersion: 4,
            clean: true,
            reconnectPeriod: 1000,
            connectTimeout: 30 * 1000,
            will: {
                topic: "WillMsg",
                payload: "Connection Closed abnormally..!",
                qos: 0,
                retain: false,
            }
        };
    
        const client = mqtt.connect(host, options);
    
        client.on("error", (err) => {
            console.log("Connection error: ", err);
            client.end();
        });
    
        client.on("reconnect", () => {
            console.log("Reconnecting...");
        });
    
        client.on("connect", () => {
            console.log(`Client connected: ${clientId}`);
            client.subscribe("kelompok-5/sensor/2", { qos: 0 });
        });
    
        // Chart.js
        const maxDataPoints = 10;
    
        function updateChart(chart, value) {
            const timestamp = new Date().toLocaleTimeString();
    
            // Update labels and datasets
            chart.data.labels.push(timestamp);
            chart.data.datasets[0].data.push(value);
    
            // Remove the oldest data point if data exceeds the maximum
            if (chart.data.labels.length > maxDataPoints) {
                chart.data.labels.shift();
                chart.data.datasets[0].data.shift();
            }
    
            // Update the chart
            chart.update();
        }
    
        const arusCtx = document.getElementById('arus-Grafik').getContext('2d');
        const teganganCtx = document.getElementById('tegangan-Grafik').getContext('2d');
        const dayaCtx = document.getElementById('daya-Grafik').getContext('2d');
    
        const arusGrafik = new Chart(arusCtx, {type: 'line',data: {labels: [],datasets: [{label: 'Arus (A)',data: [],backgroundColor: 'rgba(54, 162, 235, 0.2)',borderColor: 'rgba(54, 162, 235, 1)',borderWidth: 1,fill: false,}]},options: {scales: {x: [{type: 'linear',position: 'bottom'}]}}});
        const teganganGrafik = new Chart(teganganCtx, {type: 'line',data: {labels: [],datasets: [{label: 'Tegangan (V)',data: [],backgroundColor: 'rgba(245, 40, 145, 0.5)',borderColor: 'rgba(245, 40, 145, 0.8)',borderWidth: 1,fill: false,}]},options: {scales: {x: [{type: 'linear',position: 'bottom'}]}}});
        const dayaGrafik = new Chart(dayaCtx, {type: 'line',data: {labels: [],datasets: [{label: 'Daya (W)',data: [],backgroundColor: 'rgba(136, 40, 145, 0.5)',borderColor: 'rgba(136, 40, 145, 0.8)',borderWidth: 1,fill: false,}]},options: {scales: {x: [{type: 'linear',position: 'bottom'}]}}});
    
        // Update charts on message reception
        client.on("message", (topic, message, packet) => {
            console.log(`Received Message: ${message.toString()} On topic: ${topic}`);
            //const value = parseFloat(message.toString());
            const values = parseMessage(message.toString());
    
            // Update Chart.js charts
            if (topic.endsWith("kelompok-5/sensor/2")) {
                const nilaiArus = values["Arus (A)"];
                const nilaiTegangan = values["Tegangan (V)"];
                const nilaiDaya = values["Daya (W)"];
                updateChart(arusGrafik, nilaiArus);
                document.getElementById("tampilkan-arus").innerHTML = nilaiArus;
                updateChart(teganganGrafik, nilaiTegangan);
                document.getElementById("tampilkan-tegangan").innerHTML = nilaiTegangan;
                updateChart(dayaGrafik, nilaiDaya);
                document.getElementById("tampilkan-daya").innerHTML = nilaiDaya;
            }
        });
    
        function parseMessage(message) {
            const values = {};
            const pairs = message.split(", ");
            pairs.forEach(pair => {
                const [key, value] = pair.split(": ");
                values[key.trim()] = parseFloat(value);
            });
            return values;
        }
    </script>
<br>
        <!-- Profile -->
        <div class="container-fluid">
            <div class="row ">
            <div class="col-md-20">
                <div class="card">
                    <div class="card-header">
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <br><br>
                            <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                                <!-- Form content goes here -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">
                                
                            
                                <div class="pl-lg-4">
                                    <!-- Name -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                                                <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', Auth::user()->name) }}">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- Last Name -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="last_name">Last name</label>
                                                <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Last name" value="{{ old('last_name', Auth::user()->last_name) }}">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- Email -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email">Email address<span class="small text-danger">*</span></label>
                                                <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', Auth::user()->email) }}">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- Current Password -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="current_password">Current password</label>
                                                <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Current password">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- New Password -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="new_password">New password</label>
                                                <input type="password" id="new_password" class="form-control" name="new_password" placeholder="New password">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- Confirm Password -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="confirm_password">Confirm password</label>
                                                <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </div>
                            <br><br>
                                    <!-- Button -->
                                    <div class="row">
                                        <div class="col text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      
<br><br>
    @include('layouts.footer')
    @endsection
</body>
</html>

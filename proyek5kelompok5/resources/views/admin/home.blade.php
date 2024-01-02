@extends('layouts.admin.admin')

@section('main-content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJopfMzLZmL/+o4z6fe5YRBVE5cG9pF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Jumlah Orderan') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $widget['installations'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Pemasukan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ number_format($widget['totalJumlahSisaUangMasuk'], 0, ',', '.') }},00</div>
                        </div>                        
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Watt Keluar</div>
                            <div class="row no-gutters align-items-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0 Watt</div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-person-digging fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('User Terdaftar') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $widget['users'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-5">
        <div class="flex flex-wrap flex justify-center items-center">
            <!-- Ini Arus -->
            <div class="w-full md:w-1/3 p-4">
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
            <!-- Ini Tegangan -->
            <div class="w-full md:w-1/3 p-4">
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
            <!-- Ini Daya -->
            <div class="w-full md:w-1/3 p-4">
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

    
@endsection

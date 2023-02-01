@extends('layouts.aboutUs')
@section('title', 'About Us')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="/css/aboutUs-sensors.css" />

</head>

<body>
    @include('loader')
    <a href="/aboutUs" class="btn btn-primary rounded-pill me-2">Go back</a>

    <section class="hero-section">
        <div class="card-grid">
            <a class="card">
                <div class="card__background" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(/images/sensor-01.jpg);"></div>
                <div class="card__content">
                    <p class="card__category">pH sensor</p>
                    <h3 class="card__heading">Specification:</h3>
                    <ul style="font-size:15px;color:white">
                        <li>Module Power: 5.00V</li>
                        <li>Measuring Range :0 - 14PH</li>
                        <li>Measuring Temperature: 0 - 60 ℃</li>
                        <li>Accuracy : ± 0.1pH (25 ℃)</li>
                        <li>Response Time: ≤ 1min)</li>
                    </ul>
                </div>
            </a>
            <a class="card">
                <div class="card__background" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/sensor-02.jpg)"></div>
                <div class="card__content">
                    <p class="card__category">Temperature sensor</p>
                    <h3 class="card__heading">Specification:</h3>
                    <ul style="font-size:15px;color:white">
                        <li>Operating voltage: 3.0~ 5.5V</li>
                        <li>±0.5°C Accuracy from -10°C to +85°C</li>
                        <li>Usable temperature range: -55 to 125°C (-67°F to +257°F)</li>
                        <li>Uses 1-Wire interface- requires only one digital pin for communication</li>
                        <li>Query time is less than 750ms</li>
                    </ul>
                </div>
            </a>
            <a class="card">
                <div class="card__background" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/sensor-03.jpg)"></div>
                <div class="card__content">
                    <p class="card__category">Turbidity sensor</p>
                    <h3 class="card__heading">Specification:</h3>
                    <ul style="font-size:15px;color:white">
                        <li>Operating Voltage: 5V DC</li>
                        <li>Response Time: 500ms</li>
                        <li>Operating Temperature: 5℃~90 ℃</li>
                        <li>Storage Temperature: -10℃~90℃</li>
                        <li>Output Method: Analog</li>
                    </ul>
                </div>
                </li>
                <a class="card">
                    <div class="card__background" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/sensor-04.jpg)"></div>
                    <div class="card__content">
                        <p class="card__category">Water Level Sensor</p>
                        <h3 class="card__heading">Specification:</h3>
                        <ul style="font-size:15px;color:white">
                            <li>Operating Voltage: 5V</li>
                            <li>Scope of detection: (0,3-4)m</li>
                            <li>Output Method: Digital</li>
                        </ul>
                    </div>
                </a>
                <div>
    </section>
</body>

@endsection
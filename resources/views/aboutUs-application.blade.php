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
    <link rel="stylesheet" href="/css/font-awesome.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
</head>

<body>
    @include('loader')
    <a href="/aboutUs" class="btn btn-primary rounded-pill me-2">Go back</a>
    <div class="row mg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-box">
                        <h3 class="text-center">Easy to Use</h3>
                        <p>Web Site provides <a href="/guide">guide</a> of using the application. Every step is in detail explained. Every user has its dashboard where he can follow the parameters.</p>
                        <img src="/images/dashboard.png" style="height:300px;width:350px;padding-top:20px">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-box">
                        <h3 class="text-center">Multiple Uses</h3>
                        <p>This system can be used for many purposes like, drinking water station, fishponds, food production etc. In future system can be improved in many ways and can be implemented in even more uses.</p>
                        <img src="/images/about_04.jpg" style="height:280px;width:350px">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-box">
                        <h3 class="text-center">Low-cost</h3>
                        <p>To use the application you have to buy sensors and to connect them. Sensors are not expensive and you can find them <a href="/shop">here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
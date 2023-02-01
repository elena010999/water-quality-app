<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/navbar.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="Stylesheet" href="/css/banner.css" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header class="top-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="/images/logo-hosting.png" alt="" style="height:80px;width:300px" />
                    </a>
                    <button type="button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-host" aria-controls="navbar-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-host">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item "><a class="nav-link" href="/aboutUs/">About Us</a></li>
                            <li class="nav-item active "><a class="nav-link" href="/news/">News</a></li>
                            <li class="nav-item "><a class="nav-link" href="/shop/">Shop</a></li>
                            <li class="nav-item "><a class="nav-link" href="/q&a/">Q&A</a></li>
                            <li class="nav-item "><a class="nav-link" href="/guide/">Guide</a></li>
                            <li class="nav-item "><a class="nav-link" href="/contact/">Contact</a></li>
                            <li class="nav-item "><a class="nav-link" href="/qr.html">Scan QR code</a></li>
                            <li class="nav-item" style="padding-left:200px"><a class="nav-link" href="/login/">Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register/">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="banner">
            <img src="/images/banner.jpg" style="width:100%;height:200px;">
            <div class="centered">Here you can find useful articles including any change in our system.</div>
        </div>
        <main class="py-4" style="width:1500px;margin:auto">

            @yield('content')
        </main>
    </div>
</body>
@include('footer')

</html>
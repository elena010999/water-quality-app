<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="/css/aboutUs.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="Stylesheet" href="/css/banner.css" />

</head>

<body>
    @include('navbar')
    @include('loader')
    <div class="banner">
        <img src="/images/banner.jpg" style="width:100%;height:200px;">
        <div class="centered">This is a new application that allows users to monitor several water quality parameters.</div>
    </div>
    <div id="overviews" class="section-lb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Learn more about sensors which are used.</h2>
                        <a href="/aboutUs-sensors" class="hover-btn-new" style="text-decoration:none"><span>Learn More</span></a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="/images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="/images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Learn more about application.</h2>
                        
                        <a href="/aboutUs-application" class="hover-btn-new" style="text-decoration:none"><span>Learn More</span></a>
                    </div>
                </div>

            </div>
            <div class="image-shadow js-tilt-container" style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/385126/600.jpg)">

            </div>
            <div class="light"></div>
        </div>
    </div>

    @include('footer')
    <script src="/js/all.js"></script>
    <script src="/js/modernizer.js"></script>
    <script src="/js/custom.js"></script>
</body>

</html>
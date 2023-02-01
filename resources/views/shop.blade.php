<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="/css/shop.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="Stylesheet" href="/css/banner.css" />
</head>

<body>
    @include('navbar')
    @include('loader')
    <div class="banner">
        <img src="/images/banner.jpg" style="width:100%;height:200px;">
        <div class="centered">There are many sites worldwide that sell used hardware.</div>
    </div>
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6" style="padding-left:10px;padding-right:10px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.dfrobot.com/product-1025.html" class="image">
                                <img class="pic-1" src="/images/sensor-01.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">pH sensor</div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-left:10px;padding-right:10px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.dfrobot.com/product-1354.html" class="image">
                                <img class="pic-1" src="/images/sensor-02.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">Temperature sensor</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-left:10px;padding-right:10px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.dfrobot.com/product-1394.html" class="image">
                                <img class="pic-1" src="/images/sensor-03.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">Turbidity sensor</div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-left:10px;padding-right:10px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.dfrobot.com/product-2172.html" class="image">
                                <img class="pic-1" src="/images/sensor-04.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">Distance sensor</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6" style="padding-left:10px;padding-right:10px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.loging.mk/2352/199599/0/ShowProduct/Raspberry_Pi_4_Starter_Kit" class="image">
                                <img class="pic-1" src="/images/shop-raspberry.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">Raspberry Pi Kit</div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-left:10px;padding-right:10px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.dfrobot.com/product-873.html" class="image">
                                <img class="pic-1" src="/images/shop-wires.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">Jumper Wires</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-left:10px;padding-right:10px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.dfrobot.com/product-371.html" class="image">
                                <img class="pic-1" src="/images/shop-board.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">Breadboard</div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-left:20px;padding-right:20px">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="https://www.loging.mk/-1/browseProducts/1/byk/%d0%be%d1%82%d0%bf%d0%be%d1%80%d0%bd%d0%b8%d0%ba" class="image">
                                <img class="pic-1" src="/images/shop-resistors.jpg" style="height:200px;width:300px">
                            </a>
                            <div style="font-size:20px;color:battleship;">Resistors</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')

</body>

</html>
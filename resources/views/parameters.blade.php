<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Dashboard</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <meta http-equiv="refresh" content="30"> 

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Custom CSS link -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/user-dashboard.css">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/user.css"> -->
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

</head>

<body>
    <x-app-layout>


        <div class="s-layout">
            <div class="s-layout__sidebar">
                <a class="s-sidebar__trigger" href="#0">
                    <i class="fa fa-bars"></i>
                </a>

                <nav class="s-sidebar__nav">
                    <ul>
                        <li>
                            <a class="s-sidebar__nav-link" href="/home" style="background-color:orangered;">
                                <i class="fa fa-home"></i><em>Home</em>
                            </a>
                        </li>
                        <li>
                            <a class="s-sidebar__nav-link" href="/tempChart">
                                <i class="fa fa-bar-chart"></i><em>Temperature</em>
                            </a>
                        </li>
                        <li>
                            <a class="s-sidebar__nav-link" href="/turbChart">
                                <i class="fa fa-bar-chart"></i><em>Turbidity</em>
                            </a>
                        </li>
                        <li>
                            <a class="s-sidebar__nav-link" href="/phChart">
                                <i class="fa fa-bar-chart"></i><em>pH</em>
                            </a>
                        </li>
                        <li>
                            <a class="s-sidebar__nav-link" href="/waterLevelChart">
                                <i class="fa fa-bar-chart"></i><em>Water Level</em>
                            </a>
                        </li>
                        <li>
                            <a class="s-sidebar__nav-link" href="/user-post/index">
                                <i class="fa fa-newspaper-o"></i><em>Check for news in system</em>
                            </a>
                        </li>
                        <li>
                            <a class="s-sidebar__nav-link" href="/user-post/index">
                                <i class="fa fa-info-circle"></i><em>Read full guide here</em>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- breadcrumb -->
            <div class="container mt-4" style="padding-left:170px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="color:white;background-color:#15324f">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item" style="color:orangered"><i>Dashboard</i></li>
                    </ol>
                </nav>
            </div>
            <div class="container my-3" style="padding-left:170px;">
                <div class="row text-center">
                    <div class="col-xs-12 col-6 col-lg-3">
                        <a href="/tempChart">
                            <div class="card custom-shadow mt-3 pk-float">
                                <h5 class="card-title border-bottom p-1 text-light bg-primary rounded" style="background-color:#15324f !important;">TEMPERATURE</h5>
                                <span class="card-text"><br>
                                    <span class="h2">
                                    </span>
                                    <span class="text-primary" style="font-weight:bold;font-size:30px;color:#15324f !important">{{$currentTemp}} °C</span>
                                    <img src="/images/thermometer.svg" width="55" style="margin-left: 30px; margin-bottom: 15px">
                                </span>
                                <hr id="h-line">
                                <div style = "color:orangered;font-size:20px;text-transform:uppercase;font-weight:bold">@if($currentTemp < -1) Status: extremely low temperature. @elseif($currentTemp < 0) Status: very low temperature. @elseif($currentTemp> 0 && $currentTemp < 10) Status: low temperature. @elseif($currentTemp> 10 && $currentTemp < 23) Status: medium temperature. @elseif($currentTemp> 23 && $currentTemp < 35) Status: high temperature. @elseif($currentTemp> 35) Status: very high temperature.
                                            @endif </div>
                                <p class="tx-12" style="font-weight:bold;font-size:20px;color:#15324f !important"><span class="tx-success"></span>

                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-6 col-lg-3">
                        <a href="/turbChart">
                            <div class="card custom-shadow mt-3 pk-float">
                                <h5 class="card-title border-bottom p-1 text-light bg-primary rounded" style="background-color:#15324f !important;">TURBIDITY</h5>
                                <span class="card-text"><br>
                                    <span class="h2"></span>
                                    <span class="text-primary" style="font-weight:bold;font-size:30px;color:#15324f !important">{{$currentTurb}} NTU</span>
                                    <img src="/images/turbidity.svg" width="55" style="margin-left: 30px; margin-bottom: 15px ">
                                </span>
                                <hr id="h-line">
                                <div style = "color:orangered;font-size:20px;text-transform:uppercase;font-weight:bold"> @if($currentTurb == 0) Status: extremely clean water. Allowed for drinking.
                            @elseif($currentTurb > 0 && $currentTurb < 1) Status: extremely clean water. Allowed for drinking. @elseif($currentTurb> 1 && $currentTurb < 5) Status: clean water. Allowed for drinking but it is not recommended. @elseif($currentTurb> 5 && $currentTurb < 10) Status: dirty water. Please do not drink. @elseif($currentTurb> 10 && $currentTurb < 50) Status: very dirty. Please do not drink. @elseif($currentTurb> 50) Status: extremely dirty water. Please do not drink.
                                            @endif </div>
                                <p class="tx-12" style="font-weight:bold;font-size:20px;color:#15324f !important"><span class="tx-success"></span>

                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-6 col-lg-3">
                        <a href="/phChart">
                            <div class="card custom-shadow mt-3 pk-float">
                                <h5 class="card-title border-bottom p-1 text-light bg-primary rounded" style="background-color:#15324f !important;">pH</h5>
                                <span class="card-text"><br>
                                    <span class="h2"> </span>
                                    <span class="text-primary" style="font-weight:bold;font-size:30px;color:#15324f !important">{{$currentPh}}</span>

                                    <img src="/images/ph.svg" width="55" style="margin-left: 30px; margin-bottom: 15px ">
                                </span>
                                <hr id="h-line">
                                <div style = "color:orangered;font-size:20px;text-transform:uppercase;font-weight:bold"> @if($currentPh > 0 and $currentPh < 7) STATUS: ACIDIC. @elseif($currentPh == 7) STATUS: NEUTRAL. @elseif($currentPh > 7 and $currentPh < 14) STATUS: BASIC @endif
                      
                                               </div>
                                <p class="tx-12" style="font-weight:bold;font-size:20px;color:#15324f !important"><span class="tx-success"></span> </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-6 col-lg-3">
                        <a href="/waterLevelChart">
                            <div class="card custom-shadow mt-3 pk-float">
                                <h5 class="card-title border-bottom p-1 text-light bg-primary rounded" style="background-color:#15324f !important;">WATER LEVEL</h5>
                                <span class="card-text"><br>
                                    <span class="h2"></span>
                                    <span class="text-primary" style="font-weight:bold;font-size:30px;color:#15324f !important">{{$currentLevel}} cm</span>
                                    <img src="/images/watermeter.png" width="55" style="margin-left: 30px; margin-bottom: 15px ">
                                </span>
                                <hr id="h-line">
                                <div style = "color:orangered;font-size:20px;text-transform:uppercase;font-weight:bold">@if($currentLevel < 0 || $currentLevel == 0) Status: tank is empty. @elseif($currentLevel> 0 && $currentLevel < 5) Status: low level.UPDATE LATER @elseif($currentLevel> 5 && $currentLevel < 7) Status: medium level.UPDATE LATER @elseif($currentLevel> 7 && $currentLevel < 10) Status: high level.UPDATE LATER @elseif($currentLevel> 10 && $currentLevel < 13) Status: full level.UPDATE LATER @elseif($currentLevel> 13) Status: full level. Please empty the tank. UPDATE LATER
                                                @endif </div>
                                <p class="tx-12" style="font-weight:bold;font-size:20px;color:#15324f !important"><span class="tx-success"></span>

                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div><br><br>
            <div class="table-responsive" style="padding-left:175px">
                <table id="t01">
                    <div style="padding-left:150px;"></div>
             
                    <tr row-span='4'>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Temperature (°C)</th>
                        <th scope="col">Turbidity (NTU)</th>
                        <th scope="col">pH</th>
                        <th scope="col">Water level (cm)</th>
    
                    </tr>@foreach($parameters as $key => $item) 
                    <tr>
                        <td>{{ $item ['date'] }}</td>
                        <td>{{ $item ['time'] }}</td>
                        <td>{{ $item ['temperature'] }}</td>
                        <td>{{ $item ['turbidity'] }}</td>
                        <td>{{ $item ['ph'] }}</td>
                        <td>{{ $item ['level'] }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            </br></br></br>
    </x-app-layout>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Water Level Last 30 Days</title>
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
    <style>
        canvas {
            height: 500px !important;
            width: 1600px !important;
            padding-left: 300px;
        }
    </style>
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
                            <a class="s-sidebar__nav-link" href="/parameters">
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
                            <a class="s-sidebar__nav-link" href="/waterLevelChart" style="background-color:orangered;">
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
            <div class="container mt-4" style="padding-left:170px;">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="color:white;background-color:#15324f">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item"><a href="/waterLevelChart">Water Level</a></li>
                        <li class="breadcrumb-item"><a href="/waterLevelChartDay">Today</a></li>
                        <li class="breadcrumb-item"><a href="/waterLevelChartWeek">This Week</a></li>
                        <li class="breadcrumb-item"><a href="/waterLevelChartLast10Days">Last 10 Days</a></li>
                        <li class="breadcrumb-item"><a href="/waterLevelChartLast30Days">Last 30 Days></a></li>
                        <li class="breadcrumb-item"><a href="/waterLevelChartLast60Days"  style="color:orangered"><i>Last 60 Days</i></a></li>
                    </ol>
                </nav>
            </div>
            <canvas id="levelChartAll" height="100" width="300"></canvas>
    </x-app-layout>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
        var labels = {{Js::from($labels)}};
        var last60 = {{Js::from($data)}};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Water Level last 10 Days',
                backgroundColor: 'rgb(255, 69, 0)',
                borderColor: 'rgb(255, 69, 0)',
                data: last60,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('levelChartAll'),
            config
        );
    </script>
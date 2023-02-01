<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Turbidity</title>
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
                            <a class="s-sidebar__nav-link" href="/turbChart" style="background-color:orangered;">
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


            <div class="container mt-4" style="padding-left:170px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="color:white;background-color:#15324f">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item" style="color:orangered"><a href="/turbChart"><i>Turbidity</i></a></li>
                        <li class="breadcrumb-item"><a href="/turbChartDay">Today</a></li>
                        <li class="breadcrumb-item"><a href="/turbChartWeek">This Week</a></li>
                        <li class="breadcrumb-item"><a href="/turbChartLast10Days">Last 10 Days</a></li>
                        <li class="breadcrumb-item"><a href="/turbChartLast30Days">Last 30 Days</a></li>
                        <li class="breadcrumb-item"><a href="/turbChartLast60Days">Last 60 Days</a></li>
                    </ol>
                </nav>
            </div>
            <div class="table-responsive" style="padding-left:150px;">
                <table id="t01">
                    <div style="padding-left:150px;"></div>
                    <tr row-span='3'>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Turbidity (NTU)</th>
                    </tr>
                    @foreach($turbidities as $key=>$item)
                    <tr>
                        <td>{{ $item ['date'] }}</td>
                        <td>{{ $item ['time'] }}</td>
                        <td>{{ $item ['turbidity'] }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="container mt-4" style="padding-left:170px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="color:white;background-color:#15324f">
                        <li class="breadcrumb-item">Max turbidity value is: {{$maxTurb}}</li>
                        <li class="breadcrumb-item">Min turbidity value is: {{$minTurb}}</li>
                        <li class="breadcrumb-item">Difference between min and max turbidity values is: {{$differenceTurb}}</li>
                        <li class="breadcrumb-item">Current turbidity value is: {{$currentTurb}}</li>
                        <li class="breadcrumb-item" style="font-weight:bold;font-size:larger;color:orangered;text-transform:uppercase">
                            @if($currentTurb == 0) Status: extremely clean water. Allowed for drinking.
                            @elseif($currentTurb > 0 && $currentTurb < 1) Status: extremely clean water. Allowed for drinking. @elseif($currentTurb> 1 && $currentTurb < 5) Status: clean water. Allowed for drinking but it is not recommended. @elseif($currentTurb> 5 && $currentTurb < 10) Status: dirty water. Please do not drink. @elseif($currentTurb> 10 && $currentTurb < 50) Status: very dirty. Please do not drink. @elseif($currentTurb> 50) Status: extremely dirty water. Please do not drink.
                                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
    </x-app-layout>
    <footer>
        <div class="container-fluid p-3 text-center text-light bg-info" style="background-color: #15324f !important; ">
            <div class="container"><br>
                All Right Reserved &nbsp; | &nbsp;
                Copyright &copy; 2022 &nbsp; | &nbsp; Elena Simonoska <br>
            </div>
        </div>
    </footer>
</body>
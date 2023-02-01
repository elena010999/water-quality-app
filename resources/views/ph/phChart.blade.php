<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>pH</title>
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
                            <a class="s-sidebar__nav-link" href="/turbChart">
                                <i class="fa fa-bar-chart"></i><em>Turbidity</em>
                            </a>
                        </li>
                        <li>
                            <a class="s-sidebar__nav-link" href="/phChart" style="background-color:orangered;">
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
                        <li class="breadcrumb-item"><a href="/phChart" style="color:orangered"><i>pH</i></a></li>
                        <li class="breadcrumb-item"><a href="/phChartDay">Today</a></li>
                        <li class="breadcrumb-item"><a href="/phChartWeek">This Week</a></li>
                        <li class="breadcrumb-item"><a href="/phChartLast10Days">Last 10 Days</a></li>
                        <li class="breadcrumb-item"><a href="/phChartLast30Days">Last 30 Days</a></li>
                        <li class="breadcrumb-item"><a href="/phChartLast60Days">Last 60 Days</a></li>
                    </ol>
                </nav>
            </div>
            <div class="table-responsive" style="padding-left:150px;">
                <table id="t01">
                    <div style="padding-left:150px;"></div>
                    <tr row-span='3'>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">pH</th>
                    </tr> 
                    @foreach($phs as $key=>$item)
                    <tr>
                        <td>{{ $item ['date'] }}</td>
                        <td>{{ $item ['time'] }}</td>
                        <td>{{ $item ['ph'] }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="container mt-4" style="padding-left:170px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="color:white;background-color:#15324f">
                        <li class="breadcrumb-item">Max ph value is: {{$maxPh}}</li>
                        <li class="breadcrumb-item">Min ph value is: {{$minPh}}</li>
                        <li class="breadcrumb-item">Difference between min and max ph values is: {{$differencePh}}</li>
                        <li class="breadcrumb-item">Current ph value is: {{$currentPh}}</li>
                        <li class="breadcrumb-item" style="font-weight:bold;font-size:larger;color:orangered;text-transform:uppercase">
                            @if($currentPh > 0 and $currentPh < 7) STATUS: ACIDIC. @elseif($currentPh == 7) STATUS: NEUTRAL. @elseif($currentPh > 7 and $currentPh < 14) STATUS: BASIC @endif
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
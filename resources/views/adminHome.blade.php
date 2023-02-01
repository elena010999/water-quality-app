<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin-all-users.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/user-dashboard.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin.css">

</head>

<body>

    <x-app-layout>
      <nav>
  <ul>
    <li><a href="/./admin/home" class="btn btn-block sBarBtn border-bottom" style="background-color:orangered"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="/admin/posts/index" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-newspaper-o"></i> All posts</a> </li>
    <li><a href="create" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-clipboard"></i>Add new post</a></li>
    <li><a href="https://mailtrap.io/inboxes/1926514/messages" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-envelope-o"></i> Check your mail</a></li>
    <li><a href="/admin/users/index" class="btn btn-block sBarBtn border-bottom "><i class="fa fa-users"></i> Check users</a></li>

  </ul>
</nav>

        <section>

            <div class='site-info'>

                <div class='all-quick-info'>

                    <div class='info-icon'><i class="fa">&#xf0c0;</i></div>

                    <div class='text-right'>
                        <div class='info-numbers'><span>{{$userCount}}</span></div>
                        <div>Users</div>
                    </div>

                    <div class='info-box-footer'>

                        <a href='/admin/users/index' class='user-href'><span class="pull-left">View Details</span>

                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

                    </div>

                </div>

                <div class='all-quick-info'>

                    <div class='info-icon'> <i class="fa">&#xf132;</i></div>

                    <div class='text-right'>
                        <div class='info-numbers'><span>1</span></div>
                        <div>Total Admins!</div>
                    </div>

                    <div class='info-box-footer'>

                        <a href='#' class='user-href'><span class="pull-left">View Details</span>

                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

                    </div>

                </div>

                <div class='all-quick-info'>

                    <div class='info-icon'> <i class="fa fa-envelope"></i></div>

                    <div class='text-right'>
                        <div class='info-numbers'><span>20</span></div>
                        <div>Total Messages!</div>
                    </div>

                    <div class='info-box-footer'>

                        <a href='https://mailtrap.io/inboxes/1926514/messages' class='user-href'><span class="pull-left">View Details</span>

                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>

                    </div>

                </div>

            </div>
        </section>


    </x-app-layout>

</body>

</html>
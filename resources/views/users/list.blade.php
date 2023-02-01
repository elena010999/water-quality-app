<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Check User</title>

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
    <li><a href="/./admin/home" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="/admin/posts/index" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-newspaper-o"></i> All posts</a> </li>
    <li><a href="/admin/posts/create" class="btn btn-block sBarBtn border-bottom">Add new post</a></li>
    <li><a href="https://mailtrap.io/inboxes/1926514/messages" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-envelope-o"></i> Check your mail</a></li>
    <li><a href="/admin/users/index" class="btn btn-block sBarBtn border-bottom "  style="background-color:orangered"><i class="fa fa-users"></i> Check users</a></li>

  </ul>
</nav>

        <div class="container p-5" style="margin-left:100px;">
            <table class='table p-5 m-5'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody id='user-table'>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->name}}</td>
                        <td>@if ($user->is_admin == 1) Admin @else User @endif </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </x-app-layout>

</body>

</html>
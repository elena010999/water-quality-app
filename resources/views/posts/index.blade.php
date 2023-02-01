@extends('layouts.admin-post')
@section('title', 'All posts')
@section('content')
<link rel="stylesheet" href="/css/admin.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/user-dashboard.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<nav>
  <ul>
    <li><a href="/./admin/home" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="/admin/posts/index" class="btn btn-block sBarBtn border-bottom" style="background-color:orangered"><i class="fa fa-newspaper-o"></i> All posts</a> </li>
    <li><a href="create" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-clipboard"></i>Add new post</a></li>
    <li><a href="https://mailtrap.io/inboxes/1926514/messages" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-envelope-o"></i> Check your mail</a></li>
    <li><a href="/admin/users/index" class="btn btn-block sBarBtn border-bottom "><i class="fa fa-users"></i> Check users</a></li>

  </ul>
</nav>

<div class="row g-4 mt-1">
  @forelse($posts as $key => $row)
  <div class="col-lg-4">
    <div class="card shadow" style="height:500px;">
      <img src="{{ asset('storage/images/'.$row->image) }}" class="card-img-top img-fluid" style="height:300px;">
      <div class="card-body">
        <a href="{{$row->id}}" style="text-decoration: none;">
          <div class="card-title fw-bold  h4" style="color:#15324F;">{{ $row->title }}</div>
        </a>
        <p class="text-dark">{{ Str::limit($row->content, 100) }}</p>
      </div>
    </div>
  </div>
  @empty
  <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
  @endforelse
</div>
<div class="d-flex justify-content-center" style="margin-top:20px;background-color:none !important">
  {!! $posts->links() !!}
</div>

@endsection
@extends('layouts.admin-post')
@section('title', 'Show post')
@section('content')
<link rel="stylesheet" href="/css/admin.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/user-dashboard.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<nav>
  <ul>
    <li><a href="/./admin/home" class="btn btn-block sBarBtn border-bottom">Home</a></li>
    <li><a href="/admin/posts/index" class="btn btn-block sBarBtn border-bottom" style="background-color:orangered"><i class="fa fa-newspaper-o"></i> All posts</a> </li>
    <li><a href="create" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-clipboard"></i>Add new post</a></li>
    <li><a href="https://mailtrap.io/inboxes/1926514/messages" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-envelope-o"></i> Check your mail</a></li>
    <li><a href="/admin/users/index" class="btn btn-block sBarBtn border-bottom "><i class="fa fa-users"></i> Check users</a></li>

  </ul>
</nav>
<div class="row my-2">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid card-img-top">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
          <p class="lead">{{ \Carbon\Carbon::parse($post->created_at) }}</p>
        </div>
        <hr>
        <div class="card-title fw-bold  h4" style="color:#15234F;">{{ $post->title }}</div>
        <p>{{ $post->content }}</p>
      </div>
      <div class="card-footer px-5 py-3 d-flex justify-content-end">
        <a href="{{$post->id}}/edit" class="btn btn-success rounded-pill me-2">Edit</a>
        <form action="{{$post->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger rounded-pill me-2">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
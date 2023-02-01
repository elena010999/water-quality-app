@extends('layouts.admin-post')
@section('title', 'Create new post')
@section('content')
<link rel="stylesheet" href="/css/admin.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/user-dashboard.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<nav>
  <ul>
    <li><a href="/./admin/home" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="/admin/posts/index" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-newspaper-o"></i> All posts</a> </li>
    <li><a href="create" class="btn btn-block sBarBtn border-bottom"   style="background-color:orangered"><i class="fa fa-clipboard"></i>Add new post</a></li>
    <li><a href="https://mailtrap.io/inboxes/1926514/messages" class="btn btn-block sBarBtn border-bottom"><i class="fa fa-envelope-o"></i> Check your mail</a></li>
    <li><a href="/admin/users/index" class="btn btn-block sBarBtn border-bottom "><i class="fa fa-users"></i> Check users</a></li>

  </ul>
</nav>
<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header" style="background-color:#15234F;color:white;">
        <h3 class="text-light fw-bold">Add New Post</h3>
      </div>
      <div class="card-body p-4">
        <form action="/post" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="my-2"> Title
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2"> Content
            <textarea name="content" id="content" rows="6" class="form-control @error('content') is-invalid @enderror" placeholder="Post Content">{{ old('content') }}</textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2"> Image
            <input type="file" name="file" id="file" accept="image/*" class="form-control @error('file') is-invalid @enderror">
            @error('file')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="my-2">
            <input type="submit" value="Add Post" class="btn" style="background-color:#15234F;color:white;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
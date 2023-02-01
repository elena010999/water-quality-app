<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
</head>

<body>
@extends('layouts.user-post-layout')
@section('title', 'Show post')
@section('content')
<a href="/news" class="btn btn-primary rounded-pill me-2">Go back to all posts</a>
<div class="row my-4">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid card-img-top" style="height:750px;width:1000px;">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
          <p class="lead">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
        </div>
        <hr>
        <h3 class="fw-bold text-primary">{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
      </div>
    </div>
  </div>
</div>
@endsection
</body>
</html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
</head>

<body>
  @extends('layouts.user-post-layout')
  @section('title', 'All posts')
  @section('content')
  <div class="row g-4 mt-1">
    @forelse($posts as $key => $row)
    <div class="col-lg-4">
      <div class="card shadow">
        <img src="{{ asset('storage/images/'.$row->image) }}" class="card-img-top img-fluid" style="height:300px;width:500px">
        <div class="card-body">
          <a href="{{$row->id}}" style="text-decoration: none;">
            <div class="card-title fw-bold text-primary h4">{{ $row->title }}</div>
          </a>
          <p class="text-secondary">{{ Str::limit($row->content, 100) }}</p>
        </div>
      </div>
    </div>
    @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
    @endforelse
  </div>
  <div class="d-flex justify-content-center" style="margin-top:20px">
    {!! $posts->links() !!}
  </div>
  @endsection
</body>

</html>
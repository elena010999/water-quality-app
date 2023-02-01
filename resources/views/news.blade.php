<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="/css/news.css" />
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="Stylesheet" href="/css/banner.css" />
</head>

<body>
  @include('navbar')
  @include('loader')
  <div class="banner">
    <img src="/images/banner.jpg" style="width:100%;height:200px;">
    <div class="centered">Here you can find useful articles including any change in our system.</div>
  </div>
  <div id="overviews" class="section lb">
    <div class="container">
      <div class="row g-4 mt-1">
        @forelse($posts as $key => $row)
        <div class="col-lg-4" style="padding-top:20px;">
          <div class="card shadow" style="height:100%;width:100%">
            <img src="{{ asset('storage/images/'.$row->image) }}" class="card-img-top img-fluid" style="height:100%;width:100%">
            <div class="card-body">
              <a href="{{$row->id}}">
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

      <p style="color:black;font-size:18px">Check all posts <a href="/user-post/index" style="color:orangered"><b>here</b></a>.</p>


    </div>
  </div>

  @include('footer')

</body>

</html>
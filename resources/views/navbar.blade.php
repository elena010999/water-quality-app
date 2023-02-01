<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Water Quality Monitoring</title>
	<link rel="stylesheet" href="/css/navbar.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">
				<img src="/images/logo-hosting.png" alt="" style="height:80px;width:300px" />
			</a>
			<button type="button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-host" aria-controls="navbar-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-host">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item {{ Request::url() == url('/') ? 'active' : '' }}"><a class="nav-link" href="/">Home</a></li>
					<li class="nav-item {{ Request::url() == url('/aboutUs') ? 'active' : '' }}"><a class="nav-link" href="/aboutUs/">About Us</a></li>
					<li class="nav-item {{ Request::url() == url('/news') ? 'active' : '' }}"><a class="nav-link" href="/news/">News</a></li>
					<li class="nav-item {{ Request::url() == url('/shop') ? 'active' : '' }}"><a class="nav-link" href="/shop/">Shop</a></li>
					<li class="nav-item {{ Request::url() == url('/q&a') ? 'active' : '' }}"><a class="nav-link" href="/q&a/">Q&A</a></li>
					<li class="nav-item {{ Request::url() == url('/guide') ? 'active' : '' }}"><a class="nav-link" href="/guide/">Guide</a></li>
					<li class="nav-item {{ Request::url() == url('/contact') ? 'active' : '' }}"><a class="nav-link" href="/contact/">Contact</a></li>
					<li class="nav-item {{ Request::url() == url('/login') ? 'active' : '' }}" style="padding-left:200px"><a class="nav-link" href="/login/">Log in</a></li>
					<li class="nav-item {{ Request::url() == url('/register') ? 'active' : '' }}"><a class="nav-link" href="/register/">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
</body>

</html>
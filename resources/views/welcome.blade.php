<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="/css/welcome.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.css">
</head>

<body>
	@include('navbar')
	@include('loader')
	<div class="slider">
		<div class="slide current">
			<div class="content">
				<h1><strong>Water Quality Monitoring</strong> System</h1>
				<p>
					With our application you can track any change in your water parameters.
				</p>
			</div>
		</div>
		<div class="slide">
			<div class="content">
				<h1>Use application for <strong>agriculture, healthcare, industry or any other field.</strong></h1>
				<p>
					You can access the application on a web or download on mobile. </p>
			</div>
		</div>
		<div class="slide">
			<div class="content">
				<h1><strong>Low Cost</strong> Solution</h1>
				<p>
					You should buy only the sensors which are available on our site
				</p>
			</div>
		</div>
	</div>
	<div class="buttons">
		<button id="prev"><i class="fa fa-arrow-left"></i></button>
		<button id="next"><i class="fa fa-arrow-right"></i></button>
	</div>
	<div class="container">
		<ul class="timeline">
			<li>
				<div class="timeline-badge"><i class="fa fa-check"></i></div>
				<div class="timeline-panel" style="background-color:black">
					<div class="timeline-heading">
						<h4 class="timeline-title">Step 1:</h4>
					</div>
					<div class="timeline-body">
						<p>Buy required sensors. </br>You can buy them <a href="/shop" style="color:orangered"><b>here</b></a>.</p>
					</div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-badge"><i class="fa fa-check"></i></div>
				<div class="timeline-panel" style="background-color:black">
					<div class="timeline-heading">
						<h4 class="timeline-title">Step 2:</h4>
					</div>
					<div class="timeline-body">
						<p><a href="/register/" style="color:orangered;"><b>Register</b></a> to our application. Registration is free.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="timeline-badge"><i class="fa fa-check"></i></div>
				<div class="timeline-panel" style="background-color:black">
					<div class="timeline-heading">
						<h4 class="timeline-title">Step 3:</h4>
					</div>
					<div class="timeline-body">
						<p>Connect the sensors to application. You can read instruction <a href="/guide" style="color:orangered"><b>here</b></a>.</p>
					</div>
				</div>
			</li>

			<li class="timeline-inverted">
				<div class="timeline-badge success"><i class="fa fa-check"></i></div>
				<div class="timeline-panel" style="background-color:green">
					<div class="timeline-heading">
						<h4 class="timeline-title">Step 4:</h4>
					</div>
					<div class="timeline-body">
						<p>Congratulations! You are now connected to our application.</p>
					</div>
				</div>
			</li>
		</ul>
	</div>


	@include('footer')
	<script>
		const slides = document.querySelectorAll(".slide");
		const nextButton = document.getElementById("next");
		const prevButton = document.getElementById("prev");
		const auto = true;
		const intervalTime = 5000;
		let slideInterval;

		const nextSlide = () => {
			const current = document.querySelector(".current");
			current.classList.remove("current");
			if (current.nextElementSibling) {
				current.nextElementSibling.classList.add("current");
			} else {
				slides[0].classList.add("current");
			}
		};

		const prevSlide = () => {
			const current = document.querySelector(".current");
			current.classList.remove("current");
			if (current.previousElementSibling) {
				current.previousElementSibling.classList.add("current");
			} else {
				slides[slides.length - 1].classList.add("current");
			}
		};

		nextButton.addEventListener("click", () => {
			nextSlide();
			if (auto) {
				clearInterval(slideInterval);
				slideInterval = setInterval(nextSlide, intervalTime);
			}
		});
		prevButton.addEventListener("click", () => {
			prevSlide();
			if (auto) {
				clearInterval(slideInterval);
				slideInterval = setInterval(nextSlide, intervalTime);
			}
		});

		if (auto) {
			slideInterval = setInterval(nextSlide, intervalTime);
		}
	</script>

</body>

</html>
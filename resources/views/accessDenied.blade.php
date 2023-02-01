<head>
    <style>
*,
*::after,
*::before {
	box-sizing: border-box;
}

html,
body {
	align-items: center;
	background: navy;
	color: white;
	display: flex;
	font: 2rem "Poiret One";
	height: 100vh;
	justify-content: center;
	margin: 0;
	padding: 0;
}

.box {
	height: 100px;
	margin: 0 10px;
	overflow: hidden;
	position: relative;
	transform: rotateZ(270deg) scale(1.05);
	width: 100px;
}

.box:nth-of-type(2) {
	left: -28px;
	transform: rotateX(-180deg) rotateY(180deg) rotateZ(270deg) scale(1.05);
}

.box span {
	animation: loader 4.8s infinite both;
	display: block;
	height: 100%;
	position: absolute;
	width: 100%;
}

.box span:nth-child(1) {
	animation-delay: 0.2s;
}

.box span:nth-child(2) {
	animation-delay: 0.4s;
}

.box span:nth-child(3) {
	animation-delay: 0.6s;
}

.box span:nth-child(4) {
	animation-delay: 0.8s;
}

.box span:nth-child(5) {
	animation-delay: 1s;
}

.box span:nth-child(6) {
	animation-delay: 1.2s;
}

.box span::after {
	background: #fff;
	border-radius: 50%;
	content: "";
	left: 50%;
	padding: 6px;
	position: absolute;
	top: 0;
	transform: translateX(-50%);
}

@keyframes loader {
	0% {
		opacity: 0;
		transform: rotate(180deg);
		animation-timing-function: ease-out;
	}
	5% {
		opacity: 1;
		transform: rotate(300deg);
		animation-timing-function: linear;
	}
	30% {
		transform: rotate(420deg);
		animation-timing-function: ease-in-out;
	}
	35% {
		transform: rotate(625deg);
		animation-timing-function: linear;
	}
	70% {
		transform: rotate(800deg);
		animation-timing-function: ease-out;
		opacity: 1;
	}
	75% {
		opacity: 0;
		transform: rotate(900deg);
		animation-timing-function: ease-out;
	}
	76% {
		opacity: 0;
		transform: rotate(900deg);
	}
	100% {
		opacity: 0;
		transform: rotate(900deg);
	}
}

h1 {
	text-shadow: 0 0 10px #fff;
	animation: blink 4.8s infinite both;
}

h1:nth-of-type(2) {
	animation: none;
	letter-spacing: -14px;
	margin: 0 auto;
	opacity: 0.1;
	padding-left: 41px;
	position: absolute;
	top: 50%;
	transform: translatey(-50%);
}

@keyframes blink {
	0%,
	50%,
	100% {
		opacity: 0.2;
	}
	25%,
	75% {
		opacity: 1;
	}
}

h5,
p {
	position: absolute;
	font-family: monospace;
}

h5 {
	top: 10%;
	font-size: 0.4em;
	
}

p {
	font-size: 0.3em;
	bottom: 10%;
	width: 50%;
	text-align: center;
}

p a {
	color: orangered;
}


    </style>
</head>

<body>
<h5>Access Denied</h5>
<h5 style="padding-top:20%">You are not authorized for this action!</h5>
    <h1>4</h1>
    <h1>03</h1>
    <div class="box">
			<span></span><span></span>
			<span></span><span></span>
			<span></span>
		</div>
    <div class="box">
			<span></span><span></span>
			<span></span><span></span>
			<span></span>
		</div>
    <p><a href="/">Go to the home</a></p>
 </body>
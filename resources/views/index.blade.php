<!DOCTYPE html>
<html class="no-js" ng-app="fredyyanto">
<head>
	<meta charset="utf-8">
	<title>Fredy Yanto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
	<link rel="stylesheet" type="text/css" href="public/css/hamburger/overlay.css">
	<link rel="stylesheet" type="text/css" href="public/css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="public/bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/bower_components/bootstrap/dist/css/bootstrap-theme.css">
</head>
<body ng-controller="mainCtrl as main" ng-cloak>
	<div class="page-border">
		<div class="top-border" style="visibility: visible;"></div>
		<div class="right-border" style="visibility: visible;"></div>
		<div class="bottom-border" style="visibility: visible;"></div>
		<div class="left-border" style="visibility: visible;"></div>
	</div>

	<button 
		class="c-hamburger c-hamburger--htx" 
		id="trigger-overlay"
		ng-hide="main.showComponents">
        <span>toggle menu</span>
    </button>

    <!-- open/close -->
	<div class="overlay overlay-contentscale">
		<nav>
			<ul>
				<li><a ui-sref="index.home" class="overlay-close">Home</a></li>
				<li><a href="#" class="overlay-close">Profile</a></li>
				<li><a href="#" class="overlay-close">Experience</a></li>
				<li><a href="#" class="overlay-close">Gallery</a></li>
				<li><a href="#" class="overlay-close">Blog</a></li>
			</ul>
		</nav>
	</div>

	<div class="container">
		<header>
			<nav class="navbar">
				<div class="container-fluid text-center">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:none;stroke:#000000;stroke-miterlimit:10;}
							.st1{font-family:'FlamaLight';}
							.st2{font-size:2rem;}

							#Left{
								stroke-dasharray: 600;
								stroke-dashoffset: 0;
								animation: dash 4s linear forwards;
								-webkit-animation: dash 4s linear forwards;
								-moz-animation: dash 4s linear forwards;
							}

							#Right{
								stroke-dasharray: 600;
								stroke-dashoffset: 0;
								animation: dash 4s linear forwards;
								-webkit-animation: dash 4s linear forwards;
								-moz-animation: dash 4s linear forwards;
							}

							@keyframes dash{
								from{
									stroke-dashoffset: 600;
								}
								to{
									stroke-dashoffset: 0;
								}
							}
						</style>
						<path id="Left" class="st0" d="M5.7,6.9v68.8l-0.4-0.4h68.8"/>
						<path id="Right" class="st0" d="M73.7,75.7V6.9l0.4,0.4H5.3"/>
						<path id="MiddleTop" class="st0 Line" d="M38.9,41.3V19"/>
						<path id="MiddleBottom" class="st0 Line" d="M38.9,63.3V41"/>
						<text transform="matrix(1 0 0 1 16.4195 50.1684)" class="st1 st2">F</text>
						<text transform="matrix(1 0 0 1 49.6172 50.168)" class="st1 st2">Y</text>
					</svg>
					<div class="navbar-collapse">
	      				<ul class="nav">
	      					<li>Fredy Yanto</li>
	      					<li>-1994-</li>
	      				</ul>
	      			</div>		
				</div>
			</nav>
		</header>

		<section class="parent" ui-view></section>

		<footer class="text-center" ng-hide="main.showComponents">
			<div class="container-fluid footer">
				<div id="contact">
					<span>Contact</span>
					<span>+62 819 95066889</span>
					<span>fredy4th@gmail.com</span>
				</div>
				<div id="social-media">
					<a href="https://www.instagram.com/fredy_yanto"><span class="fa fa-instagram" aria-hidden="true"></span></a>
					<a href="https://www.facebook.com/fredy.yanto.5"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
					<a href="https://id.linkedin.com/in/fredy-yanto-28a10149"><span class="fa fa-linkedin-square" aria-hidden="true"></span></a>
				</div>
				<div id="made">
					<span>Made with <i class="fa fa-heart" aria-hidden="true"></i> by Fredy Yanto</span>
				</div>
			</div>
		</footer>
	</div>
</body>
	<!-- vendor -->
	<script type="text/javascript" src="public/bower_components/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="public/bower_components/angular/angular.js"></script>
	<script type="text/javascript" src="public/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
	<script type="text/javascript" src="public/bower_components/angular-animate/angular-animate.js"></script>
	<script type="text/javascript" src="public/bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="public/js/vendor/modernizr.custom.js"></script>
	<script type="text/javascript" src="public/js/vendor/classie.js"></script>

	<script type="text/javascript" src="public/js/script.js"></script>
	<!-- app.js -->
	<script type="text/javascript" src="public/js/app.js"></script>

	<!-- config.js -->
	<script type="text/javascript" src="public/js/config.js"></script>

	<!-- all controller -->
	<script type="text/javascript" src="public/js/controller/mainCtrl.js"></script>
	<script type="text/javascript" src="public/js/controller/homeCtrl.js"></script>
</html>
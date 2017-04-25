<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		
		<title>Melanie Patterson | Web Designer &amp; Front-End Developer</title>
		<meta name="description" content="I am a Front End Developer with skills in both web design and development. Check out my online portfolio!">
		<meta name="keywords" content="Melanie, Patterson, Melanie Patterson, Web Designer, Web Developer, Front End Developer, Front-End, Front-End Developer, Wordpress, WordPress, UX/UI, Responsive, Responsive Design">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- [if lt IE 9] >
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
		</script>
		<! [endif] -->
			
		<?php wp_head(); ?>
	</head>
	
	<body>
		
		<header>
			<div class="full-width">
				<div class="half-width">
					<h1>
						<a href="#home">
							<img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" alt="Melanie Patterson | Web Designer &amp; Front End Developer" id="logo-desktop">
							<img src="<?php echo get_template_directory_uri(); ?>/img/header-logo-mobile.png" alt="MP Web Designer and Developer" id="logo-mobile">
						</a>
					</h1>
				</div>
				
				<div class="half-width">
					<nav id="nav">
						<ul>
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
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
	
	<body <?php body_class(); ?>>
		
		<header>
			<div class="full-width">
				<div class="half-width">
					<h1>
						<a href="<?php the_permalink(6); ?>#home">
							<img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" alt="Melanie Patterson | Web Designer &amp; Front End Developer" id="logo-desktop">
							<img src="<?php echo get_template_directory_uri(); ?>/img/header-logo-mobile.png" alt="MP Web Designer and Developer" id="logo-mobile">
						</a>
					</h1>
				</div> <!-- half-width -->
				
				<div class="half-width">
					<nav id="nav" class="site-nav">
						<ul>
							<li class="active" id="home-link"><a href="#home">Home</a></li>
							<li id="portfolio-link"><a href="#portfolio">Portfolio</a></li>
							<li id="contact-link"><a href="#contact">Contact</a></li>
						</ul>
					</nav>
					
					<nav id="nav" class="single-projects-nav">
						<ul>
							<li class="active" id="home-link"><a href="<?php the_permalink(6); ?>#home">Home</a></li>
							<li id="portfolio-link"><a href="<?php the_permalink(6); ?>#portfolio">Portfolio</a></li>
							<li id="contact-link"><a href="<?php the_permalink(6); ?>#contact">Contact</a></li>
						</ul>
					</nav>
				</div> <!-- half-width -->
			</div> <!-- full-width -->
		</header>
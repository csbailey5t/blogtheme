<DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<title><?php bloginfo('site_title'); ?></title>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Averia+Serif+Libre' rel='stylesheet' type='text/css'>


</head>

<body>
	<div id="wrap">
		<div class="sidebar">
			<header>
				<h1 id="brand"><?php echo get_bloginfo('site_title'); ?></h1>
				<img src="https://sphotos-b-lga.xx.fbcdn.net/hphotos-ash4/1677_562922167314_9343_n.jpg" id="self-photo">
				<nav>
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Navigation', 'container_id' => 'header' ) ); ?>
				</nav>
			</header>

		</div>	
		

		<div class="main">

			<div id="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				
					<article>
						<h2 class="title">
							<?php the_title(); ?>
						</h2>
						<div class="date"><?php the_date(); ?></div>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</article>

					<?php endwhile; else: ?>
						<article class="error">
							<h1 class="404">Nothing posted yet</h1>
						</article>
				<?php endif; ?>
			</div>
			
			<footer>
				<p>Design by Scott Bailey</p>
			</footer>
		</div>	
	</div>	
</body>


</html>


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="dns-prefetch" href="//www.google-analytics.com">

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="author" content="Bill Patrianakos" />
	<link rel="author" href="<?php bloginfo('template_url'); ?>/humans.txt" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css?v=2" />
	<script src="<?php bloginfo('template_url'); ?>/js/libs/respond.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if gte IE 9]>
	<style type="text/css">
	.gradient { filter: none; }
	</style>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="container">
		<section class="row">
			<article class="five">
				<h1 class="logo">UBR <span class="subtitle">The Internet User's Bill of Rights</span></h1>
			</article>
			<nav class="seven">
				<?php html5blank_nav(); ?>
			</nav>
		</section>
	</header>

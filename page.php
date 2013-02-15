<?php get_header(); ?>
	<section class="container page-heading">
		<section class="row">
			<article class="twelve">
				<p>
					<?php wp_title(); ?>
				</p>
			</article>
		</section>
	</section>
	<section id="main-container" class="container">
		<section class="row">
			<article class="eight">
				<h1><?php the_title(); ?></h1>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<br class="clear">
					<?php edit_post_link(); ?>
				<?php endwhile; ?>
				<?php else: ?>
					<article><h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2></article>
				<?php endif; ?>
				</article>
			</article>
			<aside class="four last">
				<?php get_sidebar(); ?>
			</aside>
		</section>
	</section>

<?php get_footer(); ?>

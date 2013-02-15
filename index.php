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
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				<?php get_template_part('loop'); ?>
				<div id="pagination">
					<?php html5wp_pagination(); ?>
				</div>
			</article>
			<aside class="four last">
				<?php get_sidebar(); ?>
			</aside>
		</section>
	</section>

<?php get_footer(); ?>

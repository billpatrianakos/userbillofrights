<?php
	$col1 = array(
		'theme_location'  => '',
		'menu'            => 'Footer 1',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'footer-menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	$col2 = array(
		'theme_location'  => '',
		'menu'            => 'Footer 2',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'footer-menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
?>
	<footer class="container">
		<section class="row">
			<article class="three">
				<?php wp_nav_menu($col1); ?>
			</article>
			<article class="three">
				<?php wp_nav_menu($col2); ?>
			</article>
			<article class="three">
				<ul>
					<li><a href="https://github.com/billpatrianakos/ubr-public"><i class="icon-github-alt"></i> Source on Github</a></li>
					<li><a href="http://www.mediatemple.net/#a_aid=4ef681de57d85"><i class="icon-cloud"></i> Hosting by MediaTemple</a></li>
					<li>Like what we're doing? Tips are appreciated.
						<br />
						<iframe style="border: 0; margin: 0; padding: 0;" src="https://www.gittip.com/billpatrianakos/widget.html" width="48pt" height="22pt"></iframe></li>
				</ul>
			</article>
			<article class="three last">
				<a href="<?php site_url('/'); ?>feed/atom" id="rss-callout">
					<p>
						<i class="icon-rss icon-large"></i>
						<strong>Subscribe to the feed</strong>
						<br />
						Get notified of new services as they're added.
					</p>
				</a>
			</article>
		</section>
		<section class="row">
			<article class="twelve centered-text">
				<p>
					<small>
						Copyright &copy; <?php echo date('Y'); ?> UBR | Made by <a href="http://billpatrianakos.com">Bill Patrianakos</a>, inspired by <a href="http://news.ycombinator.com/item?id=5220072">Hacker News</a> | <a href="https://github.com/billpatrianakos/userbillofrights">Theme source here</a>
					</small>
				</p>
			</article>
		</section>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="http://userbillofrights.org/wp-content/themes/ubr/js/libs/jquery1.8.2.min.js">\x3C/script>')</script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-38493313-1']);
		_gaq.push(['_setDomainName', 'userbillofrights.org']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<!--Promp old IE users to install Chrome Frame. Remove to support IE6 -->
	<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

    <?php wp_footer(); ?>
</body>
</html>

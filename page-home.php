<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
	<section id="hero" class="container">
		<section class="row">
			<article class="six">
				<h1>We have rights!</h1>
				<h2>But so do they.</h2>
				<p>
					These days, with the abundance of free websites, apps, and services out there it’s tough for users to know who to trust and just as hard for the services we rely on to monetize their projects. The Internet User’s Bill of Rights is a project aimed at curbing users’ sense of entitlement while holding service providers to a set of standards so that both parties know the minimum to expect from each other.
				</p>
				<p>
					<a class="button gradient" href="">Know your rights!</a>
				</p>
			</article>
			<article class="six last hands"></article>
		</section>
	</section>
	<section id="ticker" class="container">
		<section class="row">
			<article class="twelve centered-text">
				<p>Do you run a web service that offers free accounts? <a href="<?php echo home_url('/add-service') ?>">Get Listed!</a></p>
			</article>
		</section>
	</section>
	<section id="main-container" class="container">
		<section class="row">
			<article class="five">
				<h2>Users</h2>
				<p>
					Whether you’re paying for a service or not, you have rights - just not as many as you probably think. User entitlement, especially in the tech scene, is at epidemic proportions. In an effort to help curb this behavior we’ve set up a list of rights we’d like the web community to embrace. If both users and service providers accept these terms users can then know who they can trust and what they can reasonably expect from a service before signing up. Check out our list of supporting services and read up on your rights.
				</p>
				<p>
					<a class="bucket-link" href="<?php echo home_url('/rights'); ?>">Read your rights</a> or <a class="bucket-link" href="<?php echo home_url('/services/all-services'); ?>">See supporting services</a>
				</p>
			</article>
			<article class="five">
				<h2>Service Providers</h2>
				<p>
					You’r not off the hook here! With so many new web sites, apps, and other services popping up every day users don’t know who they can trust to stick around, handle their data responsibly, and act in good faith when it comes time to monetize. By adding your service to our list you’re showing your committment to the user’s rights even - and especially - when they’re using your service for free. Don’t worry, we’re actually against users feeling so entitled lately too and we think you’ll find the User’s Bill of Rights quite reasonable.
				</p>
				<p>
					<a class="bucket-link" href="<?php echo home_url('/rights'); ?>">Read the rights</a> or <a class="bucket-link" href="<?php echo home_url('/add-service'); ?>">Be added as a supporter</a>
				</p>
			</article>
			<aside class="two last">
				<?php get_sidebar(); ?>
			</aside>
		</section>
	</section>

<?php get_footer(); ?>

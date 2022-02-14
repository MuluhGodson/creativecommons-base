<?php get_header(); ?>
<section class="main-content">
	<header class="page-header">
		<div class="container">
			<div class="columns is-centered">
				<div class="column">
					<h2><?php echo CC_Site::page_title(); ?></h2>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="columns padding-vertical-larger">
			<div class="column is-8 content">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						echo Components::simple_entry( get_the_ID(), true, true );
						endwhile;
					the_posts_pagination();
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

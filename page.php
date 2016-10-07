<?php get_header(); ?>

	<div class="page-height">
		<div class="container about-us-container">
			<h1 class="title-block"><span><?php the_title(); ?></span></h1>
			<div class="about-us">
				<?php the_content(); ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
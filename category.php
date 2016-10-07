<?php get_header(); ?>

<div class="page-height2"><!-- CONTENT-->
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
				<div class="container about-us-container">
					<div class="about-us">
						<h2 class="news-title"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary alignright">Читать подробнее</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php endwhile; ?>
				<div class="">
					<?php if(function_exists('proPagination')) { proPagination(); } ?>
				</div>
				<?php endif; ?>
	<!-- / CONTENT -->
</div>

<?php get_footer(); ?>
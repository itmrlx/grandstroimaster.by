<?php /*
template name: Работа
*/ ?>
<?php get_header(); ?>

	<div class="page-height2">

		<div class="container about-us-container">
			<h1 class="title-block"><span><?php the_title(); ?></span></h1>
			<div class="about-us">
				<?php the_content(); ?>
				<div class="clearfix"></div>
			</div>
		</div>
	
	<!-- portfolio -->
		<div class="container portfolio-container">
			<div class="row">
				<?php $images = get_field('p_gallery'); if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="col-xs-3">
							<a href="<?php echo $image['sizes']['large']; ?>" class="portfolio-block pb2 fancybox" data-fancybox-group="work">
								<img src="<?php echo $image['sizes']['gal']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
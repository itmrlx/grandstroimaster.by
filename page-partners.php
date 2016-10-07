<?php /*
template name: Партнеры
*/ ?>
<?php get_header(); ?>
	<!-- review -->
	<div class="page-height">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php if(get_the_content()): ?>
					<div class="container about-us-container">
						<div class="about-us">
							<?php the_content(); ?>
							<div class="clearfix"></div>
						</div>
					</div>
				<?php endif; ?>
				<div class="container review-container">
					<div class="title-block"><span>Наши партнеры</span></div>
					<div class="review">
						<div class="partner-slider">
									<?php $imagesp = get_field('partners'); if( $imagesp ): ?>
										<?php foreach( $imagesp as $imagep ): ?>
											<div class="slide">
												<img src="<?php echo $imagep['sizes']['medium']; ?>" alt="<?php echo $imagep['alt']; ?>">
											</div>
										<?php endforeach; ?>
									<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
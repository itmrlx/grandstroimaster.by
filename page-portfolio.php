<?php /*
template name: Наши работы
*/ ?>
<?php get_header(); ?>
	<!-- portfolio -->
	<div class="page-height2">
		<div class="container portfolio-container">
			<h1 class="title-block"><span>Наши работы</span></h1>
			<div class="row">
				<?php 
				$childrens = get_children( array( 
					'post_parent' => 17,
					'post_type'   => 'any', 
					'numberposts' => -1,
					'post_status' => 'any'
				) );
		
				if( $childrens ){
					foreach( $childrens as $children ){?>
					<div class="col-xs-3">
						<a href="<?php echo $children->post_name; ?>" class="portfolio-block">
							<?php $p_img = get_field('p_img',$children->ID); ?>
							<img src="<?php echo $p_img['sizes']['gal']; ?>" alt="portfolio">
							<div class="title"><?php echo $children->post_title; ?></div>
						</a>
					</div>
				<?php }} ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
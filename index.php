<?php get_header(); ?>

	<!-- main slider -->
	<div class="container main-slider-container">
		<div class="main-slider">
			<div class="slider">
				<?php if( have_rows('slide','option') ):while ( have_rows('slide','option') ) : the_row(); ?>
					<?php $slide_img = get_sub_field('slide_img'); ?>
					<div class="slide" style="background-image: url(<?php echo $slide_img['sizes']['large'] ?>);">
						<div class="text">
							<h2><?php the_sub_field('slide_title'); ?></h2>
							<p><?php the_sub_field('slide_text'); ?></p>
							<?php if(get_sub_field('slide_link')): ?>
								<a href="<?php the_sub_field('slide_link'); ?>" class="btn btn-primary">Читать подробнее</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile;endif; ?>
			</div>
		</div>
	</div>

	<!-- about us -->
	<div class="container about-us-container">
		<h2 class="title-block"><span>Наша команда</span></h2>
		<div class="about-us">
			<?php the_field('our_command','option'); ?>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- portfolio -->
	<div class="container portfolio-container">
		<div class="title-block"><span>Наши работы</span></div>
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

	<!-- why we -->
	<div class="container why-we-container">
		<div class="title-block"><span>Почему выбирают именно нас</span></div>
		<div class="why-we">
			<div class="row">
				<div class="col-xs-6">
					<div class="item">
						<div class="title">Опыт компании более 10 лет</div>
						<p>Ремонт и отделку квартир наша компания начала выполнять с 2005 года.</p>
					</div>
					<div class="item">
						<div class="title">Соблюдение технологий</div>
						<p>Все работы производятся в соответствии с техническим регламентом.</p>
					</div>
					<div class="item">
						<div class="title">Специалисты высокого уровня</div>
						<p>Ремонт и отделку квартир в нашей компании производят только квалифицированные специалисты.</p>
					</div>
					<div class="item">
						<div class="title">Подробные сметы</div>
						<p>Мы предоставляем подробные сметы, актуальность которых достигает от 90 до 100%.</p>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="item">
						<div class="title">Отсутствие скрытых платежей</div>
						<p>Наличие подробной сметы, является Вашей гарантией от так называемых дополнительных работ.</p>
					</div>
					<div class="item">
						<div class="title">Гарантия на все виды работ</div>
						<p>Мы гордимся качеством своей работы и предоставляем гарантию на все виды выполненных нами работ.</p>
					</div>
					<div class="item">
						<div class="title">Дополнительные скидки от партнёров</div>
						<p>Наши партнёры предоставляют материалы по стоимости близкой к закупочным.Подробнее об этом вы можете прочитать здесь.</p>
					</div>
					<div class="item">
						<div class="title">Вежливые сотрудники</div>
						<p>Отсутсвие хамства и наличие улыбки гарантируем)</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- review -->
	<div class="container review-container">
		<div class="title-block"><span>Нам доверяют</span></div>
		<div class="review">
			<div class="review-slider">
				<?php $images = get_field('review','option'); if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="slide">
							<a href="<?php echo $image['sizes']['large']; ?>" class="fancybox" data-fancybox-group="review"><img src="<?php echo $image['sizes']['review']; ?>" alt="<?php echo $image['alt']; ?>"></a>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- princips -->
	<div class="container about-us-container">
		<h2 class="title-block"><span>Наши принципы</span></h2>
		<div class="about-us">
			<?php the_field('principi','option'); ?>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- review -->
	<div class="container review-container">
		<div class="title-block"><span>Наши партнеры</span></div>
		<div class="review">
			<div class="partner-slider">
				<?php $query_my = new WP_Query('pagename=partners&showposts=5'); ?>
				<?php if($query_my->have_posts()) : ?>
					<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
						<?php $imagesp = get_field('partners'); if( $imagesp ): ?>
							<?php foreach( $imagesp as $imagep ): ?>
								<div class="slide">
									<img src="<?php echo $imagep['sizes']['medium']; ?>" alt="<?php echo $imagep['alt']; ?>">
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- team -->
	<div class="container team-container">
		<div class="title-block"><span>Для Вас работают</span></div>
		<div class="team">
			<div class="row">
				<div class="col-xs-4">
					<div class="item">
						<?php $img1 = get_field('w_img1','option'); ?>
						<img src="<?php echo $img1['sizes']['min']; ?>" alt="<?php echo $img1['alt']; ?>">
						<div class="title"><?php the_field('w_name1','option'); ?></div>
						<div class="desc"><?php the_field('w_dol1','option'); ?></div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item">
						<?php $img2 = get_field('w_img2','option'); ?>
						<img src="<?php echo $img2['sizes']['min']; ?>" alt="<?php echo $img2['alt']; ?>">
						<div class="title"><?php the_field('w_name2','option'); ?></div>
						<div class="desc"><?php the_field('w_dol2','option'); ?></div>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="item">
						<?php $img3 = get_field('w_img3','option'); ?>
						<img src="<?php echo $img3['sizes']['min']; ?>" alt="<?php echo $img3['alt']; ?>">
						<div class="title"><?php the_field('w_name3','option'); ?></div>
						<div class="desc"><?php the_field('w_dol3','option'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- portfolio -->
	<div class="container portfolio-container">
		<div class="title-block"><span>Жилые комплексы в работе</span></div>
		<div class="row">
			<?php if( have_rows('comp','option') ):while ( have_rows('comp','option') ) : the_row(); ?>
				<div class="col-xs-4">
					<div class="portfolio-block">
						<?php $comp_img = get_sub_field('comp'); ?>
						<img src="<?php echo $comp_img['sizes']['gal']; ?>" alt="<?php echo $comp_img['alt']; ?>">
						<div class="title"><?php the_sub_field('comp_name'); ?></div>
					</div>
				</div>
			<?php endwhile;endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
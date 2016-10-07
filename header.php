<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/logo.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
</head>
<body>

	<!-- header -->
	<div class="wrapper header">
		<div class="container">
			<div class="row">
				<div class="col-xs-4 logo-container">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
					<div class="logo">Grandstroimaster.by</div>
					<div class="logo-text">Всегда безупречно</div>
				</div>
				<div class="col-xs-4 title-container">
					<div class="title">Комплексный ремонт квартир</div>
					<div class="title2">Профессиональный ремонт квартир в Минске</div>
				</div>
				<div class="col-xs-4 phones-container">
					<a href="tel:<?php phone_clean(get_field('kod1','option')); phone_clean(get_field('nomer1','option')); ?>" class="tel tel1"><span><?php the_field('kod1','option'); ?></span> <?php the_field('nomer1','option'); ?></a>
					<a href="tel:<?php phone_clean(get_field('kod2','option')); phone_clean(get_field('nomer2','option')); ?>" class="tel"><span><?php the_field('kod2','option'); ?></span> <?php the_field('nomer2','option'); ?></a>
					<div class="time"><?php the_field('time','option'); ?></div>
				</div>
			</div>
		</div>
	</div>

	<!-- menu -->
	<div class="wrapper menu-wr">
		<div class="container menu-container">
			<div class="burger-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<?php 
				$args = array(
					'theme_location'  => 'main-menu',
					'container'       => '', 
					'menu_class'      => 'pro-menu', 
				);
				wp_nav_menu( $args );
			?>
		</div>
	</div>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php
	// ENQUEUE your css and js in inc/enqueues.php

		wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
	<header>
		<div class="topheader d-flex align-items-center">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 d-flex justify-content-between">
						<div class="leftside d-flex">
							<div class="mr-4">
								<a href="tel:<?php echo get_option('phone'); ?>"><i class="fab fa-viber mr-2"></i><?php echo get_option('phone'); ?></a>	
							</div>
							<div class="">
								<a href="mailto:<?php echo get_option('email'); ?>" class="d-flex align-items-center"><i class="fas fa-envelope mr-2"></i><?php echo get_option('email'); ?></a>
							</div>
						</div>
						<div class="rightside d-flex align-items-center">
							<i class="fab fa-instagram mr-2"></i>
							<span class="pr-2">instagram: </span>
							<a href="<?php echo get_option('instagram_link') ?>">
								@vvk_bus
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mainheader d-flex align-items-center">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="<?php echo get_home_url(); ?>">
									<img src="/wp-content/uploads/2018/09/vvk-bus-logo.png" alt="Logo">
								</a>
							</div>
							<div class="menu">
								<?php 
									wp_nav_menu( array(
										'menu'            => 'MainMenu', 
									))
								?>
							</div>
							<div class="buttons">
								<div class="btn btn-primary">обратный звонок</div>
								<div class="btn btn-primary">чат в viber</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mobilemenu d-flex align-items-center">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex justify-content-between align-items-center">
							<div class="logo">
								<img src="/wp-content/uploads/2018/09/vvk-bus-logo.png" alt="Logo">
							</div>
							<div class="toogle-menu"></div>
							<div class="slide-menu">
								<div class="menu">
									<?php 
										wp_nav_menu( array(
											'menu'            => 'HeaderMenu', 
										))
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="content" role="main">

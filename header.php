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
								<a href="viber://chat?number=+380674725997"><i class="fab fa-viber mr-2"></i><?php echo get_option('phone'); ?></a>	
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
									<img src="/wp-content/uploads/2018/09/komplogo.png" alt="Logo">
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
								<div class="btn btn-primary" data-toggle="modal" data-target="#callModal"><span>обратный звонок</span></div>
								<a href="viber://chat?number=+380674725997"><div class="btn btn-primary"><span>чат в viber</span></div></a>
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
								<a href="<?php echo get_home_url(); ?>">
									<img src="/wp-content/uploads/2018/09/komplogo.png" alt="Logo">
								</a>
							</div>
							<div class="toogle-menu"></div>
							<div class="slide-menu">
								<div class="phones">
									<div class="mb-3">
										<i class="fas fa-phone mr-3"></i><span class="text-uppercase">Звоните</span>	
									</div>
									<ul>
										<li><a href="viber://chat?number=+380674725997">(067)-472-59-97 (Viber)</a></li>
										<li><a href="tel:0577280978">(057) 728-09-78</a></li>
										<li><a href="tel:0638035526">(063)-803-55-26</a></li>
										<li><a href="tel:0990579573">(099)-057-95-73</a></li>
									</ul>
								</div>
								<div class="line my-3"></div>
								<div class="menu mb-4">
									<?php 
										wp_nav_menu( array(
											'menu'            => 'HeaderMenu', 
										))
									?>
								</div>
								<div class="width100 text-center">
									<a href="viber://chat?number=+380674725997"><div class="btn btn-primary width100"><span>написать в viber</span></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="content" role="main">
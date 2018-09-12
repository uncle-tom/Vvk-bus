<div class="hero" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;">
	<!-- <div class="hero__absolute"></div> -->
	<div class="hero__title">
		<span><?php the_title(); ?></span>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero__breadcrumbs">
					<a href="<?php echo get_home_url(); ?>">Главная</a> <i class="fas fa-long-arrow-alt-right"></i> <a href="<?php get_permalink(); ?>" class="active"><?php the_title(); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
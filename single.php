<?php get_header(); ?>
<div class="single bg-light py-5">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-8">
					<div class="box p-4">
						<div class="single__title mb-3">
							<?php the_title(); ?>
						</div>
						<div class="single__thumb mb-3">
							<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
						</div>
						<div class="single__content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box p-4">
						Сайдбар	
					</div>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
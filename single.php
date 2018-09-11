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
						<div class="mb-5">
							<div class="box__title mb-3">Популярные направления</div>
							<div class="mb-3">Забронируйте билет прямо сейчас!</div>
							<?php 
					    $custom_query = new WP_Query( array( 'post_type' => 'directions' ) );
					    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					    <?php endwhile; endif; ?>
				    </div>
				    <div class="box__title mb-3">
				    	Наши новости
				    </div>
				    <?php 
					  $custom_query = new WP_Query( array( 'post_type' => 'post' ) );
					  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					  	<div class="news__item">
					  		<div class="news__img">
									<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
									<div class="news__img-absolute"></div>
								</div>
								<div class="news__info py-5">
									<div class="news__category">
										<?php echo the_category() ?>	
									</div>
									<div class="news__title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</div>
								</div>
					  	</div>
					  	
					  <?php endwhile; endif; ?>
					</div>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
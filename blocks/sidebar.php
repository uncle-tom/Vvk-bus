<div class="box">
	<div class="mb-5">
		<div class="box__title bg-light p-4">
			Популярные направления
		</div>
		<div class="p-4">
			<div class="mb-3">Забронируйте билет прямо сейчас!</div>
			<?php 
	    $custom_query = new WP_Query( array( 'post_type' => 'directions', 'posts_per_page' => 5 ) );
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	    <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<div class="box">
  <div class="box__title bg-light p-4">
  	Наши новости
  </div>
  <?php 
  $custom_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 5 ) );
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
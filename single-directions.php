<?php get_header(); ?>

<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->
<div class="container-fluid pt-5">
	<!-- begin BOOKING -->
	<div class="row">
		<div class="col-md-12">
			<link rel="stylesheet" href="https://octobus.cloud/frameapp/css/app.css" media="all"> <link rel="stylesheet" href="https://octobus.cloud/frameapp/print.css" media="print"> <div id="app" data-spa="1" data-ptoken="76a04d54ec444983b4f91ca3ac12f114" data-lang="uk" data-env="prod"></div> <script src="https://octobus.cloud/frameapp/js/manifest.js"></script> <script src="https://octobus.cloud/frameapp/js/vendor.js"></script> <script src="https://octobus.cloud/frameapp/js/app.js"></script>
		</div>
	</div>
</div>
<div class="container py-5">
	<!-- end BOOKING -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-md-12">
			<?php the_content(); ?>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="direction">
				<div class="direction__th d-flex justify-content-between align-items-center mobile-show p-3">
					<div class="font-weight-bold"><i class="fas fa-bus"></i> Рейсы из <?php echo rwmb_meta( 'meta-dir-from' ); ?></div>
					<div class="font-weight-bold"><i class="far fa-money-bill-alt"></i> Цена</div>	
				</div>
				
				<?php 
				$dir_from = rwmb_meta( 'meta-dir-from' );
		    $custom_query = new WP_Query( array( 
		    	'post_type' => 'directions', 
		    	'posts_per_page' => 10, 
		    	'meta_query' => array(
						array(
							'key'     => 'meta-dir-from',
							'value'   => $dir_from,
							'compare' => '=',
						),
					)
		    ));
		    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		    	<div class="direction__tr d-flex justify-content-between align-items-center p-3">
		    		<div class="direction__name">
			    		<a href="<?php the_permalink(); ?>"><span><?php echo rwmb_meta( 'meta-dir-from' ); ?></span> → <span><?php echo rwmb_meta( 'meta-dir-to' ); ?></span></a>
			    	</div>
			    	<div class="direction__time m-0">
			    		<?php echo rwmb_meta( 'meta-price' ); ?> <?php echo rwmb_meta( 'meta-dir-valuta' ); ?>
			    	</div>
		    	</div>
		    <?php endwhile; endif; ?>
	    </div>
		</div>
		<div class="col-md-6">
			<div class="direction">
				<div class="direction__th d-flex justify-content-between align-items-center mobile-show p-3">
					<div class="font-weight-bold"><i class="fas fa-bus"></i> Рейсы в <?php echo rwmb_meta( 'meta-dir-to' ); ?></div>
					<div class="font-weight-bold"><i class="far fa-money-bill-alt"></i> Цена</div>	
				</div>
				<?php 
				$dir_to = rwmb_meta( 'meta-dir-to' );
		    $custom_query = new WP_Query( array( 
		    	'post_type' => 'directions', 
		    	'posts_per_page' => 10, 
		    	'meta_query' => array(
						array(
							'key'     => 'meta-dir-to',
							'value'   => $dir_to,
							'compare' => '=',
						),
					)
		    ));
		    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		    	<div class="direction__tr d-flex justify-content-between align-items-center p-3">
		    		<div class="direction__name">
			    		<a href="<?php the_permalink(); ?>"><span><?php echo rwmb_meta( 'meta-dir-from' ); ?></span> → <span><?php echo rwmb_meta( 'meta-dir-to' ); ?></span></a>
			    	</div>
			    	<div class="direction__time m-0">
			    		<?php echo rwmb_meta( 'meta-price' ); ?> <?php echo rwmb_meta( 'meta-dir-valuta' ); ?>
			    	</div>
		    	</div>
		    </div>
	    <?php endwhile; endif; ?>
		</div>
	</div>
	<?php endwhile; else: ?>
		<p><?php _e('Сорямба, ничего нет.'); ?></p>
	<?php endif; ?>
</div>




<?php get_footer(); ?>
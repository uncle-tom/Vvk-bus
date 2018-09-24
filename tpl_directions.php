<?php
/*
Template Name: Маршруты
*/
?>

<?php get_header(); ?>
<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->
<!-- begin topdirection -->
<div class="topdirection">
	<?php get_template_part( 'blocks/directions', 'default' ); ?>
</div>
<!-- end topdirection -->
<!-- begin alldirections -->
<div class="alldirections py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="d-flex justify-content-center mb-5">
					<h2>Регулярные маршруты</h2>	
				</div>
			</div>
		</div>
		<div class="row directions justify-content-center">
			<div class="col-md-8">
				<div class="direction">
					<div class="direction__th d-flex justify-content-between align-items-center mobile-show p-3">
						<div class="font-weight-bold"><i class="fas fa-bus"></i> Маршрут</div>
						<div class="font-weight-bold"><i class="far fa-money-bill-alt"></i> Цена</div>	
					</div>
					<?php 
					$total_cpt = wp_count_posts('directions')->publish;
					$half_of_cpt = sprintf( '%d', $total_cpt / 2 );

			    $custom_query = new WP_Query( array( 'post_type' => 'directions', 'posts_per_page' => $half_of_cpt) );
			    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				    
				    	<div class="direction__tr d-flex justify-content-between align-items-center p-3">
				    		<div class="direction__name">
					    		<a href="<?php echo rwmb_meta( 'meta-dirurl' ); ?>"><span><?php echo rwmb_meta( 'meta-dir-from' ); ?></span> → <span><?php echo rwmb_meta( 'meta-dir-to' ); ?></span></a>
					    	</div>
					    	<div class="direction__time m-0">
					    		<?php echo rwmb_meta( 'meta-price' ); ?> <?php echo rwmb_meta( 'meta-dir-valuta' ); ?>
					    	</div>
				    	</div>
				    
			    <?php endwhile; endif; ?>
		    </div>
			</div>
		</div>
	</div>
</div>
<!-- end alldirections -->
<?php get_footer(); ?>
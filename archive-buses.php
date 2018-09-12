<?php get_header(); ?>
<!-- begin hero -->
	<div class="hero" style="background: url(/wp-content/uploads/2018/09/back-header-1.jpg); background-size: cover;">
		<!-- <div class="hero__absolute"></div> -->
		<div class="hero__title">
			<span>Наши автобусы</span>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero__breadcrumbs">
						<a href="<?php echo get_home_url(); ?>">Главная</a> <i class="fas fa-long-arrow-alt-right"></i> <a href="<?php get_permalink(); ?>" class="active">наши автобусы</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end hero -->
<!-- begin buses -->
<div class="buses pt-5">
	<?php 
	    $custom_query = new WP_Query( array( 'post_type' => 'buses', 'order' => 'ASC' ) );
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	<!-- begin bus -->
	<div class="bus">
		<div class="container">
			<div class="row align-items-center bus__row">
				<div class="col-md-6">
					<div class="mobile-show">
						<div class="bus__title mb-5">
							<img src="/wp-content/uploads/2018/09/bus-title-before.png" alt="" class="bus__title-icon">
							<?php the_title(); ?>	
						</div>
					</div>
					<div class="bus__images">
						<div class="bus__images-border"><span></span></div>
						<div class="bus__images-line1"></div>
						<div class="bus__images-line2"></div>
						<?php 
							rwmb_the_value( 'meta-images', array( 'size' => 'medium' ) );
						?>	
					</div>
				</div>
				<div class="col-md-6">
					<div class="bus__info mb-5">
						<div class="pc-show">
							<div class="bus__title mb-5">
								<img src="/wp-content/uploads/2018/09/bus-title-before.png" alt="" class="bus__title-icon">
								<?php the_title(); ?>	
							</div>
						</div>
						<div class="bus__quantity">
							<b>Кол-во мест</b> –– <?php echo rwmb_meta( 'meta-quantity' ); ?>	
						</div>
						<div class="bus__dop">
							<b>Доп. услуги</b>: <?php echo rwmb_meta( 'meta-dop' ); ?>	
						</div>
						<div class="bus__salon">
							<b>Салон</b>: <?php echo rwmb_meta( 'meta-salon' ); ?>	
						</div>						
					</div>
					<div class="buttons">
						<div class="my-btn btn-blue">аренда автобуса</div>
						<div class="my-btn btn-white">заказать билет</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end bus -->
	<?php endwhile; endif; ?>
</div>
<!-- end buses -->
<?php get_footer(); ?>
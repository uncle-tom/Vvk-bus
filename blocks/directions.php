<!-- begin directions -->
<div class="directions py-5">
	<div class="directions__line1"></div>
	<div class="directions__line2"></div>
	<div class="directions__line3"></div>
	<div class="directions__line4"></div>
	<div class="directions__line5"></div>
	<div class="directions__line6"></div>
	<div class="d-flex justify-content-center mb-5">
		<h2>Лучшие направления</h2>	
	</div>
	<div class="container">
		<div class="row">
			<?php 
	    $custom_query = new WP_Query( array( 
	    	'post_type' => 'directions', 
	    	'posts_per_page' => 3, 
	    	'meta_query' => array(
					array(
						'key'     => 'meta-dir-popular',
						'value'   => 1,
						'compare' => '=',
					),
				)
	    ));
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="col-md-4">
				<!-- begin direction -->
				<div class="direction">
					<div class="direction__photo" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: 100%;">
						<div class="direction__title">
							<?php the_title(); ?>	
						</div>
					</div>
					<div class="direction__time text-center">
						<span class="direction__icon"><i class="far fa-clock"></i></span> время отправления 
						<span class="direction__hours"><?php echo rwmb_meta( 'meta-hours' ); ?></span>
						<span class="direction__minutes"><?php echo rwmb_meta( 'meta-minutes' ); ?></span>
					</div>
					<div class="direction__price text-center">
						<?php echo rwmb_meta( 'meta-price' ); ?><span><?php echo rwmb_meta( 'meta-dir-valuta' ); ?></span>
					</div>
					<div class="d-flex justify-content-center">
						<a href="<?php echo rwmb_meta( 'meta-dirurl' ); ?>">
							<div class="direction__button">
								заказать
							</div>
						</a>
					</div>
					<div class="direction__more text-center">
						<a href="<?php the_permalink(); ?>">
							подробнее о рейсе 
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 511.633 511.633" style="enable-background:new 0 0 511.633 511.633;" xml:space="preserve">
								<g>
									<g>
										<path d="M463.375,183.726c-35.782-36.735-92.789-57.764-171.02-63.094V45.83c0-7.994-3.713-13.608-11.136-16.846    c-7.803-3.23-14.466-1.902-19.985,3.999L115.06,179.161c-3.618,3.621-5.424,7.902-5.424,12.85c0,4.949,1.807,9.229,5.424,12.847    l146.178,146.177c3.432,3.617,7.71,5.425,12.85,5.425c2.283,0,4.661-0.476,7.136-1.427c7.423-3.238,11.139-8.847,11.139-16.845    v-71.663c30.642,2.475,56.097,7.471,76.376,14.989c20.27,7.519,36.494,18.034,48.677,31.549    c28.362,31.405,38.451,85.171,30.266,161.311c-0.376,4.951,1.807,8.186,6.567,9.708c0.571,0.192,1.427,0.284,2.569,0.284    c3.806,0,6.468-1.618,7.994-4.853l5.709-11.42c2.662-5.331,6.516-13.945,11.56-25.841c5.041-11.901,9.616-23.794,13.709-35.692    c4.093-11.893,7.755-25.026,10.992-39.396c3.234-14.376,4.853-27.079,4.853-38.116    C511.63,265.094,495.546,216.657,463.375,183.726z" fill="#4e4e4e"/>
										<path d="M63.953,192.011c0-4.952,1.809-9.233,5.424-12.85L182.725,65.531V45.83c0-7.994-3.715-13.608-11.138-16.846    c-7.804-3.23-14.465-1.902-19.983,3.999L5.424,179.161C1.809,182.781,0,187.062,0,192.011c0,4.949,1.809,9.229,5.424,12.847    l146.18,146.177c3.425,3.617,7.708,5.425,12.85,5.425c2.284,0,4.663-0.476,7.137-1.427c7.423-3.238,11.138-8.847,11.138-16.845    v-19.985L69.377,204.857C65.762,201.24,63.953,196.962,63.953,192.011z" fill="#4e4e4e"/>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>
				<!-- end direction -->
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	
</div>
<!-- end directions -->


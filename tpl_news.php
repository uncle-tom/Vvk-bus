<?php
/*
Template Name: Новости
*/
?>

<?php get_header(); ?>
<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->
<div class="news bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php
					$custom_query_news = new WP_Query( array( 'post_type' => 'post' ) );
					if( $custom_query_news->have_posts() ){
						while( $custom_query_news->have_posts() ){ $custom_query_news->the_post();
				?>
					<div class="news__item">
						<div class="news__img">
							<?php echo get_the_post_thumbnail_url() ?>
						</div>
						<div class="news__info">
							<div class="news__category">
								<?php echo the_category() ?>	
							</div>
							<div class="news__title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						</div>
					</div>
				<?php
					}
						wp_reset_postdata(); // сбрасываем переменную $post
					} 
					else echo 'Записей нет2.';
				?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
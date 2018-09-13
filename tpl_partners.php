<?php
/*
Template Name: Сотрудничество
*/
?>

<?php get_header(); ?>
<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->

<div class="partners bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box p-4">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
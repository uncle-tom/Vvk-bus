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
		<!-- begin directions-columns -->
		<?php get_template_part( 'blocks/directions-columns', 'default' ); ?>
		<!-- end directions-columns -->
	</div>
</div>
<!-- end alldirections -->
<?php get_footer(); ?>
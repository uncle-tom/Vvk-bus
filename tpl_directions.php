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

<div class="container pc-show">
	<div class="row">
		<!-- begin dir-lines -->
			<?php get_template_part( 'blocks/dir-lines', 'default' ); ?>
		<!-- end dir-lines -->		
	</div>
</div>

<!-- begin alldirections -->
<div class="alldirections overflow-hidden py-5">
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
<?php
/*
Template Name: Order
*/
?>

<?php get_header(); ?>

<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->
<div class="container-fluid pt-5">
	<!-- begin BOOKING -->
	<div class="row">
		<div class="col-md-12">
			<div id="auth" class="noprint"></div><div id="app" data-spa="1" data-ptoken="76a04d54ec444983b4f91ca3ac12f114" data-lang="ru" data-env="prod" ></div>
		</div>
	</div>
</div>

<div class="overflow-hidden">
	<div class="container py-5">
		<!-- begin directions-columns -->
			<?php get_template_part( 'blocks/directions-columns', 'default' ); ?>
		<!-- end directions-columns -->
	</div>
</div>
<?php get_footer(); ?>
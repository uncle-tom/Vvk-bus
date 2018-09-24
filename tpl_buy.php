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
			<link rel="stylesheet" href="https://octobus.cloud/frameapp/css/app.css" media="all"> <link rel="stylesheet" href="https://octobus.cloud/frameapp/print.css" media="print"> <div id="app" data-spa="1" data-ptoken="76a04d54ec444983b4f91ca3ac12f114" data-lang="uk" data-env="prod"></div> <script src="https://octobus.cloud/frameapp/js/manifest.js"></script> <script src="https://octobus.cloud/frameapp/js/vendor.js"></script> <script src="https://octobus.cloud/frameapp/js/app.js"></script>
		</div>
	</div>
</div>

<div class="container">
	<!-- begin directions-columns -->
		<?php get_template_part( 'blocks/directions-columns', 'default' ); ?>
	<!-- end directions-columns -->
</div>

<?php get_footer(); ?>
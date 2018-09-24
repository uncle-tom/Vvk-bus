<?php
/*
Template Name: Маршрут
*/
?>

<?php get_header(); ?>
<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->

<div class="container-fluid py-5">
	<div class="row">
		<div class="col-md-12">
			<div class="route">
				<link rel="stylesheet" href="https://octobus.cloud/frameapp/css/app.css" media="all"> <link rel="stylesheet" href="https://octobus.cloud/frameapp/print.css" media="print"> <div id="app" data-from="207" data-to="11" data-spa="0" data-ptoken="76a04d54ec444983b4f91ca3ac12f114" data-lang="uk" data-env="prod"></div> <script src="https://octobus.cloud/frameapp/js/manifest.js"></script> <script src="https://octobus.cloud/frameapp/js/vendor.js"></script> <script src="https://octobus.cloud/frameapp/js/app.js"></script>
			</div>
		</div>
	</div>
</div>

<?php
	global $wp; 
	$request_url = $_SERVER['REQUEST_URI'];
	$new_request_url = str_replace('/mythemetwo/samoilov/','', $request_url);
	echo $new_request_url;
	// $current_url = home_url(add_query_arg(array(),$wp->request));
  // print_r('current_url', $wp->request);
  $my_query = new WP_Query( array( 
  	'post_type' => 'directions', 
  	'meta_query' => array(
			array(
				'key'     => 'meta-dirurl',
				'value'   => $new_request_url,
				'compare' => 'LIKE'
			),
		)
  ));
  if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<?php the_title(); ?>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>
<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->
<!-- begin contact -->
<div class="contact">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4">
				<div class="contact__sidebar border p-5">
					<div class="font-weight-bold lead mb-3">
						<i class="fas fa-phone mr-2"></i> Звоните
					</div>
					<ul>
						<li><a href="tel:0674725997">(067)-472-59-97 (Viber)</a></li>
						<li><a href="tel:0577280978">(057) 728-09-78</a></li>
						<li><a href="tel:0638035526">(063)-803-55-26</a></li>
						<li class="mb-3"><a href="tel:0990579573">(099)-057-95-73</a></li>
					</ul>
					<div class="mb-3">
						Ежедневно с 8-00 до 20-00.
					</div>
					<div class="font-weight-bold lead mb-3">
						<i class="fas fa-envelope mr-2"></i> Пишите
					</div>
					<ul>
						<li><a href="mailto:vvkbus.kh@gmail.com">vvkbus.kh@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="lead">
					Мы располагаемся по адресу г.Харьков пр.Московский 303.
					<br>Карта проезда:
				</div>
				<div class="map">
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end contact -->
<?php get_footer(); ?>
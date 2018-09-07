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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1815.8358263788562!2d36.425975737790885!3d49.93672306332825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41270c156c9fd3b3%3A0x9c3b93a4f092e4fe!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0L_RgNC-0YHQvy4sIDMwMywg0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0LjQvdCwLCA2MTAwMA!5e0!3m2!1sru!2sus!4v1536333658609" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end contact -->
<?php get_footer(); ?>
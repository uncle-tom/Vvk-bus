<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>
<!-- begin hero -->
	<?php get_template_part( 'blocks/hero', 'default' ); ?>
<!-- end hero -->
<!-- begin wecool -->
<div class="wecool py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2>
					<span><b>Б</b>олее 15 лет на рынке автоперевозок Украины</span>
					<div class="heading">только опытные водители</div>
				</h2>
				<div class="wecool__text py-3">
					<div>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
					<div class="dir">
						<div class="dir__top">
							<div class="dir__title">
								<span>Направления</span>
							</div>	
						</div>
						<div class="relative">
							<div class="dir__list">
								<?php 
						    $custom_query = new WP_Query( array( 'post_type' => 'directions', 'post_per_page' => 5 ) );
						    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
						    	<li>
						    		<span><?php echo rwmb_meta( 'meta-dir-from' ); ?></span> → <span><?php echo rwmb_meta( 'meta-dir-to' ); ?></span>
					    			<a href="<?php the_permalink(); ?>">
						    			<div class="mobile-show">
							    			<span class="my-btn btn-blue">
							    				<span><i class="fas fa-cart-plus"></i></span>
							    			</span>
						    			</div>
					    			</a>
						    	</li>
						    <?php endwhile; endif; ?>
							</div>
							<div class="dir__bottom">
								<div class="mobile-show">
							    <img src="/wp-content/uploads/2018/09/bench-icon.png" alt="">
							  </div>
								<img src="/wp-content/uploads/2018/09/bus-icon-1.png" alt="">
							</div>
							<div class="dir__absolute">
								<div class="dir__absolute-list">
									<?php 
							    $custom_query = new WP_Query( array( 'post_type' => 'directions', 'post_per_page' => 5 ) );
							    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
							    	<li><a href="<?php the_permalink(); ?>"><i>→</i><div class="my-btn btn-blue"><span>заказать</span></div></a></li>
							    <?php endwhile; endif; ?>
						    </div>
						    <div class="bench">
						    	<img src="/wp-content/uploads/2018/09/bench-icon.png" alt="">
						    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="offset-md-1 col-md-4">
				<img src="/wp-content/uploads/2018/09/wecool.jpg" alt="" class="mb-5 width100">
				<div class="d-flex justify-content-center">
					<a href="viber://chat?number=+380674725997"><div class="my-btn btn-blue"><span>задать вопрос в viber</span></div></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end wecool -->
<!-- begin wemedal -->
<div class="wemedal py-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>
					<div class="relative mb-5">
						<span><b>Н</b>аши награды говорят за нас</span>
						<div class="heading">о качестве услуг</div>	
					</div>
				</h2>
			</div>
		</div>
	</div>
	<div class="wemedal__bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="wemedal__img">
						<img src="/wp-content/uploads/2018/09/vvkbus-gramota.png" alt="">
						<img src="/wp-content/uploads/2018/09/orden1.png" alt="">	
					</div>
				</div>
				<div class="col-md-6">
					<div class="d-flex justify-content-center mb-4">
						<div class="wemedal__title">
							Почему мы
						</div>
					</div>
					<div class="wemedal__text">
						Мы всегда идем навстречу нашим клиентам во всех вопросах связанных с осуществлением пассажирских перевозок.
	     			<br>Многолетний опыт водителей. Наши водители имеют большой опыт в пассажирских перевозок по Украине и России, всегда пунктуальны, вежливы и ответственны.
	      		<br>Исправность технических средств. Автобусы, выходя на маршрут следования, всегда исправны и технически подготовлены.
	      		<br>Компания «vvk-bus.com.ua» уже более 15 лет на рынке пассажирских перевозок Украины. За это время мы совершили более 1000 перевозок как на территории Украины , так и на территории России, оставили довольными множество клиентов.
	      		<br>Присоединяйтесь к их числу.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end wemedal -->

<!-- begin weteam 
<div class="weteam py-5">
	<h2>
		<div class="relative mb-5">
			<span>Наша команда</span>
		</div>
	</h2>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4">
				<div class="member">
					<img src="/wp-content/uploads/2018/09/member1.png" alt="">
					<div class="member__info member__info-left">
						<div class="member__name">Богдан</div>
						<div class="member__who">водитель автобуса</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="member">
					<img src="/wp-content/uploads/2018/09/member2.png" alt="">
					<div class="member__info">
						<div class="member__name">Павел</div>
						<div class="member__who">водитель автобуса</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="member">
					<img src="/wp-content/uploads/2018/09/member3.png" alt="">
					<div class="member__info member__info-right">
						<div class="member__name">Анастасия</div>
						<div class="member__who">менеджер</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="buttons">
					<div class="my-btn btn-blue"><span>обратный звонок</span></div>
					<div class="my-btn btn-white"><span>заказать билет</span></div>
					<div class="my-btn btn-blue"><span>написать в viber</span></div>	
				</div>
			</div>
		</div>
	</div>
</div>
 end weteam -->
<?php get_footer(); ?>
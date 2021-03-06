    </section>
    <footer id="footer" class="footer">
    	<!-- <div class="footer__absolute"></div> -->
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3 footer__section">
    				<!-- begin footer col1 -->
	    				<h3><span>Направления</span></h3>
	    				<div class="footer__directions">
		    				<?php 
    						    $custom_query = new WP_Query( array( 
                                    'post_type' => 'directions', 
                                    'posts_per_page' => 3, 
                                    'meta_query' => array(
                                        array(
                                            'key'     => 'meta-dir-popular',
                                            'value'   => 1,
                                            'compare' => '=',
                                        ),
                                    )
                                ));
                                if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
						    	<a href="<?php the_permalink(); ?>" class="footer__direction"><?php the_title(); ?></a>
						    <?php endwhile; endif; ?>
					    </div>
					    <a href="/order"><div class="my-btn btn-transparent"><span>Заказать</span></div></a>
				    <!-- end footer col1 -->
    			</div>
    			<div class="col-md-3 footer__section">
    				<!-- begin footer col2 -->
    				<h3><span>Контакты</span></h3>
    				<div class="footer__contact">
    					<div class="d-flex justify-content-center">
	    					<div class="footer__icon mr-2"><i class="far fa-clock"></i></div>
	    					<div class="footer__time">с 8-00 до 21-00</div>	
    					</div>
    					<div class="footer__phone">
    						+38 (067)-472-59-97
								<br>+38 (063)-803-55-26
								<br>+38 (099)-057-95-73
    					</div>
    					<hr>
    					<div class="footer__contact-info">
    						<div class="darkblue">
	    						viber: <a href="viber://chat?number=+380674725997">+38 (067)-472-59-97</a>
	    					</div>
	    					<div>
	    						
	    					</div>
	    					<div class="darkblue">
	    						e-mail: <a href="mailto:vvkbus.kh@gmail.com">vvkbus.kh@gmail.com</a>
	    					</div>
    					</div>
    					
    				</div>
    				<!-- end footer col2 -->
    			</div>
    			<div class="col-md-3 footer__section">
    				<!-- begin footer col3 -->
    				<h3><span>Мы в соцсетях</span></h3>
    				<div class="footer__social">
    					<div class="d-flex justify-content-center">
	    					<div><i class="fab fa-instagram mr-2"></i></div>
								<div>
									<span class="">instagram: </span>
									<a href="<?php echo get_option('instagram_link') ?>" target="_blank">
										 @vvk_bus
									</a>		
								</div>
								
    					</div>
    				</div>
    				<!-- end footer col3 -->
    			</div>
    			<div class="col-md-3 footer__section">
    				<!-- begin footer col3 -->
    				<h3><span>Меню</span></h3>
    				<div class="menu">
							<?php 
								wp_nav_menu( array(
									'menu'            => 'MainMenu', 
								))
							?>
						</div>
    				<!-- end footer col3 -->
    			</div>
    		</div>
    	</div>
    </footer>
    <div class="copyright">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12 d-flex justify-content-between">
    				<div class="copyright__text">
    					© 2018 Копирование информации с сайта запрещено	
    				</div>
    				<div class="copyright__wemodern">Разработано командой <a href="https://wemodern.com" target="_blank">WeModern</a></div>
    			</div>
    		</div>
    	</div>
    </div>
    <?php wp_footer(); ?>
    <!-- Arenda Bus Modal -->
    <div class="modal fade" id="callModal" tabindex="-1" role="dialog" aria-labelledby="callModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Обратный звонок</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="366" title="Обратный звонок"]'); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- следующие три строчки можно оставить здесь, но лучше разместить в конце блока body перед финальным тегом </body> -->
    <script src="https://octobus.cloud/frameapp/js/manifest.js"></script>
    <script src="https://octobus.cloud/frameapp/js/vendor.js"></script>
    <script src="https://octobus.cloud/frameapp/js/app.js"></script>
</body>
</html>
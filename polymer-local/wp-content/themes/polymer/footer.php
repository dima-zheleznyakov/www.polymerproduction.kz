<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package polymer
 */

?>
 

<div class="partners">
	<div class="container">
		<div class="row">
			<div class="col  d-flex align-items-center">
				<div class="owl-carousel owl-partners owl-theme">


					<?php 
							$partnersSlider = array(
								'post_type' => 'partners',
								// 'posts_per_page' => 1,  
							);
							$partnersSliderItem = new WP_Query( $partnersSlider );
							if ( $partnersSliderItem->have_posts() ) :
								while ( $partnersSliderItem->have_posts() ) : 
									$partnersSliderItem->the_post();
									 $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
									 $link = get_field('link-partners');
									?>

									<div class="item">
										<a target="_blank" href="<?=$link;?>" class="slider-partners">
										<img src="<?php echo $image_url[0]; ?>" />
										</a>
									</div>

								<?php endwhile; ?>
							<?php endif;
							wp_reset_postdata(); ?>



				    <!-- <div class="item">
				    	<a href="#" class="slider-partners">
				    		<img src="/wp-content/pic/qwe1.png" alt="">
				    	</a>
				    </div>
				     <div class="item">
				    	<a href="#" class="slider-partners">
				    		<img src="/wp-content/pic/qwe2.png" alt="">
				    	</a>
				    </div>
				     <div class="item">
				    	<a href="#" class="slider-partners">
				    		<img src="/wp-content/pic/qwe3.png" alt="">
				    	</a>
				    </div>
				     <div class="item">
				    	<a href="#" class="slider-partners">
				    		<img src="/wp-content/pic/qwe4.png" alt="">
				    	</a>
				    </div>
				     <div class="item">
				    	<a href="#" class="slider-partners">
				    		<img src="/wp-content/pic/qwe5.png" alt="">
				    	</a>
				    </div>
				   <div class="item"></div> -->
				</div>
			</div>
		</div>
	</div>
</div>	





<footer >
	
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
				<a href="/" class="block-logo">
					<img src="<?=get_template_directory_uri()?>/img/logo1.png" alt="">
				</a>
			</div>
			<div class="col-lg-5 d-flex align-items-center ">
				<ul class="menu-footer">
					<li><a href="#">О КОМПАНИИ</a></li>
					<li><a href="#">ДИСТРИБЬЮТОРАМ</a></li>
					<li><a href="#">ПРОДУКЦИЯ</a></li>
					<li><a href="#">ПРЕСС-ЦЕНТР</a></li>
					<li><a href="#">ЗАКУПКИ</a></li>
					<li><a href="#">КОНТАКТЫ</a></li>
				</ul>
			</div>
			<div class="col-lg-3 d-flex justify-content-center justify-content-lg-start">
				<div class="header-info">
					<div class="address header-info-item"><i style="background: url(<?=get_template_directory_uri()?>/img/address-head.png);"></i> Казахстан, 060000, Атырау, промышленная зона «Карабатан» №28</div>
		
			
					<a href="mailto:info@pp.com.kz" class="email header-info-item">
						<i style="background: url(<?=get_template_directory_uri()?>/img/email-head.png);"></i>  info@pp.com.kz
					</a>
			
			
					<a href="tel:+7 (7122) 319931" class="num header-info-item">
						<i style="background: url(<?=get_template_directory_uri()?>/img/num-head.png);"></i> +7 (7122) 319931
					</a>
			
			
					<a href="#" class="btn">ЗАКАЗАТЬ ЗВОНОК</a>
					</div>
			</div>
		</div>
		<div class="polymer-production">
			<h6>2020 © Polymer Production</h6>
			<p>ТОО «Полимер Продакшн» входит в группу компаний АО «Фонд Национального Благосостояния «Самрук-Қазына», являясь дочерней организацией ТОО «Объединенная химическая компания».</p>
		</div>
	</div>
</footer>





<!-- 

	<script src="<?//=get_template_directory_uri()?>/js/jquery-3.5.1.min.js"></script>
	<script src="<?//=get_template_directory_uri()?>/js/owl.carousel.min.js"></script>	
	<script src="<?//=get_template_directory_uri()?>/js/bootstrap.min.js"></script>
	<script src="<?//=get_template_directory_uri()?>/js/script.js"></script> -->

<?php wp_footer(); ?>

</body>
</html>

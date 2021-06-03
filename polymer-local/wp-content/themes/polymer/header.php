<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package polymer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div style="background-image: url(<?=get_template_directory_uri()?>/img/Titan-Polimer-Bopet-film.jpg);" class="head-back">
	<header <?if(is_front_page() === false){?> class="header-transparency"<?}?> >
		<div class="container">
			<a href="/" class="block-logo">
				<img src="<?=get_template_directory_uri()?>/img/logo1.png" alt="">
			</a>
			<div class="header-info   <?if(is_front_page() === false){?>header-info-products<?}?>">
				<div class="row" style="position: relative;">
					<div class="col-lg-12 col-11 d-flex justify-content-between align-items-lg-center flex-column flex-lg-row">
						<div class="address header-info-item"><i style="background: url(<?=get_template_directory_uri()?>/img/address-head.png);"></i> Казахстан, 060000, Атырау, промышленная зона «Карабатан» №28</div>
				
				
						<a href="mailto:info@pp.com.kz" class="email header-info-item">
							<i style="background: url(<?=get_template_directory_uri()?>/img/email-head.png);"></i>  info@pp.com.kz
						</a>
				
				
						<a href="tel:+7 (7122) 319931" class="num header-info-item">
							<i style="background: url(<?=get_template_directory_uri()?>/img/num-head.png);"></i> +7 (7122) 319931
						</a>
				
				
						<a href="#" class="btn">ЗАКАЗАТЬ ЗВОНОК</a>
					</div>
<!-- 				</div>
				<div class="row"> -->
					<!-- <div class="col-lg-12 col-1"> -->
						<nav class="navbar navbar-expand-lg navbar-light  ">
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse" id="navbarNavDropdown">
							  <?
							   wp_nav_menu( array(
								'menu'              => 'top-menu',
								'theme_location'    => 'top-menu',
								'depth'             =>  2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav d-flex justify-content-between',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            =>  new wp_bootstrap_navwalker())
							); 
							  ?>
						    <!-- <ul class="navbar-nav d-flex justify-content-between">
						       <li class="nav-item dropdown">
						        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          О компани
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Общая информация</a>
						          <a class="dropdown-item" href="#">О проекте</a>
						          <a class="dropdown-item" href="#">Структура</a>
						          <a class="dropdown-item" href="rukovodstvo.html">Наблюдательный пункт</a>
						          <a class="dropdown-item" href="#">Правление</a>
						          <a class="dropdown-item" href="baza.html">Корпоротивные документы</a>

						        </div>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="products.html">Продукция</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Сертификация</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Закупки</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Вакансии</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Контакты</a>
						      </li>
						    </ul> -->
						  </div>
						</nav>
					<!-- </div> -->
				</div>
			</div>
		</div>
	</header>


	<?
	if( is_front_page() ){ ?>
		<div class="head-title-block">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="head-title">
							<h2>Производство полимерных упаковочных материалов</h2>
							<p>
								Наше предприятие создано в 2012 году и позиционирует себя первым крупным предприятием в Казахстане и Средней Азии по производству полимерной тары (мешков), полипропиленовой (БОПП) и полиэтиленовой плёнки. В ближайшем будущем предприятие займет свое место в проекте интегрированного газохимического комплекса в Атырау, который планирует переработку газа для получения полиэтиленовых и полипропиленовых гранул. Таким образом, наше предприятие получит преимущество в виде использования собственного, а не импортируемого сырья.
Мы видим нашу миссию в обеспечении промышленных предприятий качественной, технологичной и безопасной для здоровья продукцией. Нашими ценностями являются: открытость, приверженность к технологиям и интересам партнеров. Мы несем полную ответственность за свою продукцию перед нашими клиентами и конечными потребителями.
Наши производственные и бизнес-процессы ориентированы на высочайшее качество. Нашу продукцию ждут на рынке, и мы хотим использовать весь имеющийся у нас потенциал, чтобы завоевать не только казахстанский рынок, но и рынки соседних стран.

								<!-- Наше предприятие создано в 2012 году и позиционирует себя первым крупным предприятием в Казахстане и Средней Азии по производству полимерной тары (мешков), полипропиленовой (БОПП) и полиэтиленовой плёнки. -->
							</p>
							<div class="btn-block-head  d-flex align-items-center">
								<a href="#" class="btn">Подробнее</a>
								<a href="#" class="btn-video  d-flex align-items-center"><i style="background-image: url(<?=get_template_directory_uri()?>/img/btn-video.png);"></i> <span>Видео о нас</span> </a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	<?}



	  $urlSite = get_page_link();
	  $theMenu = wp_get_nav_menu_items(5);
	  foreach ($theMenu as $theMenuItem) {
	  	$urlStr = $theMenuItem->url;
		  	if ($urlSite == $urlStr) { ?>
				<div class="head-breadcrumbs">
					<div class="container">
						<div class="row">
							<div class="col-7">
								<div class="breadcrumbs">
									<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
					?>
					<h3 class="title">
						<? the_title();?>
					</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<ul class="breadcrumbs-ul">
									<?
							  		wp_nav_menu( [
										'theme_location'  => 'left-menu',
										'menu'            => 'left-menu', 
										'container'       => 'div', 
										'container_class' => '', 
										'container_id'    => '',
										'menu_class'      => 'menu', 
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => '',
									] );
									?>
									<!-- <li class=""><a href="info.html">Общая информация</a></li>
									<li class=""><a href="#">О проекте</a></li>
									<li class=""><a href="#">Структура</a></li>
									<li class="active"><a href="rukovodstvo.html">Наблюдательный совет</a></li>
									<li class=""><a href="#">Правление</a></li>
									<li class=""><a href="baza.html">Корпоративные документы</a></li> -->
								</ul>
							</div>
						</div>
					</div>	
				</div>
<style>
	.header-info-products{
		height: 138px !important;
	}
	.header-transparency{
		background: rgb(20, 65, 114, 0.8) !important;
	}
</style>

		  <?} //endif
	  	} //endforeach


	?>


 
 

 
	</div>
 

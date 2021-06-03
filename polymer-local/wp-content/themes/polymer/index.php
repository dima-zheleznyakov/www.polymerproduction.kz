<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polymer
 */

get_header();
?>

	

<div class="o-company">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="company-title">
					<span class="min-title">Polymer Production</span>
					<h3 class="title">О Компании</h3>
				</div>
			</div>
		</div>
		<div class="company-info">
			<div class="row">
				<div class="col-lg-7">
					<div class="company-text">
						<p>ТОО «Полимер Продакшн» является участником специальной экономической зоны «Национальный индустриальный нефтехимический технопарк» (Атырауская область) (далее – СЭЗ «НИНТ»), который осуществляет реализацию проектов по строительству объектов инфраструктуры СЭЗ «НИНТ» в Атырауской области. </p>
						<p>Наименование инвестиционного проекта: «Производство полимерной продукции в Атырауской области».</p>
						<p>Проект входит в Государственную программу индустриально-инновационного развития Республики Казахстан на 2015-2019 годы, утвержденную Указом Президента Республики Казахстан от 1 августа 2014 года № 874; Государственную программу инфраструктурного развития «Нурлы жол» на 2015-2019 годы, утвержденную Указом президента Республики Казахстан от 6 апреля 2015 года (№1030).</p>
						<p><strong>Оператор проекта:</strong> ТОО «Полимер Продакшн».</p>
						<p><strong>Месторасположение:</strong> СЭЗ «Национальный индустриальный нефтехимический технопарк»,  Атырауская область.</p>
						<p><strong>Срок ввода завода в эксплуатацию:</strong> 19 октября 2015 г.</p>
						<p>ТОО «Полимер Продакшн» создано в 2011 году и входит в группу компаний АО «ФНБ «Самрук - Казына», является дочерней организацией ТОО «Объединенная химическая компания».</p>
						<p></p>
						<div class="name-predsedatel">
							<p>С уважением,</p>
							<p><span>Кайрат Бимагамбетов</span></p>
							<p class="title-predsedatel">Председатель Правления ТОО Полимер Продакшн</p>
							<i style="background-image: url(<?=get_template_directory_uri()?>/img/rospis.png);"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-5 d-flex justify-content-end">
					<i style="background-image: url(<?=get_template_directory_uri()?>/img/photo-predsedatel.jpg);" class="photo-predsedatel"></i>
				</div>
			</div>
		</div>
	</div>
</div>





<div class="products">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="title">Продукция</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<a href="/polipropilenovaya-biaksialno-orientirovannaya-plenka-bopp/" style="background-image: url(/wp-content/pic/prog1.jpg);" class="products-item">
					<div class="title-products ">
						<span>Полипропиленовая биаксиально-ориентированная пленка</span>
					</div>
					<i style="background-image: url(<?=get_template_directory_uri()?>/img/shadow-products.png);"></i>
				</a>
			</div>
			<div class="col-md-6 col-lg-4">
				<a href="#" style="background-image: url(/wp-content/pic/prog2.jpg);" class="products-item">
					<div class="title-products ">
						<span>Трехслойная полиэтиленовая пленка</span>
					</div>
					<i style="background-image: url(<?=get_template_directory_uri()?>/img/shadow-products.png);"></i>
				</a>
			</div>
			<div class="col-md-6 col-lg-4">
				<a href="/polipropilenovye-meshki/" style="background-image: url(/wp-content/pic/prog3.jpg);" class="products-item">
					<div class="title-products ">
						<span>Полипропиленовые мешки</span>
					</div>
					<i style="background-image: url(<?=get_template_directory_uri()?>/img/shadow-products.png);"></i>
				</a>
			</div>
			 
		</div>
	</div>
</div>




<div style="background-image: url(<?=get_template_directory_uri()?>/img/our-advantages.jpg);" class="our-advantages">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="title">Наши преимущества</h3>
			</div>
		</div>
		<div class="advantages-info">
			<div class="row">
				<div class="col-md-3 col-sm-6 adv">
					<div class="advantages-item">
						<i style="background-image: url(<?=get_template_directory_uri()?>/img/icon-advantages.png);"></i>
						<h5 class="title-advantages">СВОЕ ПРОИЗВОДСТВО</h5>
						<p>Наше предприятие создано в 2012 году и позиционирует</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 adv">
					<div class="advantages-item ">
						<i style="background-image: url(<?=get_template_directory_uri()?>/img/icon-advantages2.png);"></i>
						<h5 class="title-advantages">ГАРАНТИЯ КАЧЕСТВА</h5>
						<p>Средней Азии по производству полимерной тары (мешков), </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 adv">
					<div class="advantages-item">
						<i style="background-image: url(<?=get_template_directory_uri()?>/img/icon-advantages.png);"></i>
						<h5 class="title-advantages">ПОСТОЯННЫЕ КЛИЕНТЫ</h5>
						<p>Наше предприятие создано в 2012 году и позиционирует</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 adv">
					<div class="advantages-item">
						<i style="background-image: url(<?=get_template_directory_uri()?>/img/icon-advantages2.png);"></i>
						<h5 class="title-advantages">ДОСТАВКА ПО КАЗАХСТАНУ</h5>
						<p>Средней Азии по производству полимерной тары (мешков),</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
get_sidebar();
get_footer();

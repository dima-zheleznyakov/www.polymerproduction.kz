<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polymer
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

<div  class="content-title">
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
	</div>	
</div>
<div class="content-info">
	<div class="container">
	<div class="rukovodstvo">
			<div class="row">
				<div class="col">
 <? the_content(); ?>
				</div>
			</div>

			<div class="row">

			<?php
			if( have_rows('sovet') ): ?>
				<?
				$i = 1;
				while ( have_rows('sovet') ) : the_row();							
					$name = get_sub_field('name');
					$dolzhnost = get_sub_field('dolzhnost');
					$foto = get_sub_field('foto');
					$informacziya = get_sub_field('informacziya');
					 ?>	
					
				<div class="col-4">
					<a href="#modal<?=$i;?>" class="block-ruk modal-inline">
						<div class="photo-ruk">
							<? if($foto): ?>
								<img src="<?= $foto['url'];?>" alt="">
							<? else: ?>
								<img src="<?=get_template_directory_uri()?>/img/no-photo.png" alt="">
							<? endif; ?>
						</div>
						<div class="name-ruk">
							<h5><?= $name;?></h5>
							<span><?= $dolzhnost;?></span>
						</div>
					</a>
				</div>
				
				<div id="modal<?=$i;?>" style="display: none;">
					<p>
					<?
						if($informacziya){
							echo $informacziya;
						}
						else {
							echo "Информации нет";
						}
					?>
					</p>
				</div>

				<?
				$i++;
				endwhile; ?>
			<?endif;?>

			</div>
		</div>
	</div>
</div>



		<? endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

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
		<div class="row">
			<div class="col">


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="baza">
				<?php
					if( have_rows('korpor-doc') ): ?>

						<ul>

						<?while ( have_rows('korpor-doc') ) : the_row();							
							$file = get_sub_field('korporativnye_dokumenty');
							if( $file ): ?>	
								<li><a href="<?= $file['url']; ?>"><?= $file['title']; ?></a></li>	
							<?php endif;
						endwhile; ?>

						</ul>

					<? endif;
					?>
				</div><!-- .baza-content -->
			

				
			</article><!-- #post-<?php the_ID(); ?> -->
			</div>
		</div>
	</div>
</div>





			<?
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
 
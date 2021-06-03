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



			<?
			$produkcziyas = get_field('produkcziya');
			if($produkcziyas):
				foreach($produkcziyas as $produkcziya): ?>
	
					<div class="col-lg-6">
						<a href="<?= $produkcziya['link'];?>" style="background-image: url(<?= $produkcziya['photo'];?>);" class="production-item">
							<div class="production-item-shadow">
								<div class="production-text">
									<span><?= $produkcziya['title'];?></span>
								</div>
							</div>
						</a>
					</div>


			<?
				endforeach;
			endif;
			?>

		</div>

		<div class="row">
			<div class="col">



			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			

				<?php polymer_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'polymer' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

				 
			</article><!-- #post-<?php the_ID(); ?> -->
			</div>
		</div>
	</div>
</div>


			 

		<?endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

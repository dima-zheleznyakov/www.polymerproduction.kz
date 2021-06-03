<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package polymer
 */

get_header();
?>

	<main id="primary" class="site-main">
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
						
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="content-info">
			<div class="container">
				<div class="row">
					<div class="col">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			 
 

		endwhile; // End of the loop.
		?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

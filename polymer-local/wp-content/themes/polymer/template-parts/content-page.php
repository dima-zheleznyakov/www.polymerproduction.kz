<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polymer
 */

?>
<div  class="content-title">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<div class="breadcrumbs">
					<?php
					 $urlSite = get_page_link();
					 $theMenu = wp_get_nav_menu_items(5);
					  foreach ($theMenu as $theMenuItem) {
					  	$urlStr = $theMenuItem->url;
						  	if ($urlSite == $urlStr) {
						  		$qwe;
						  	}
						  	
				  		}
				  		if($qwe === true){
				  			if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				  		}



					// if ( function_exists('yoast_breadcrumb') ) {
					// yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					// }
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

				<!-- <?php// if ( get_edit_post_link() ) : ?> -->
					<!-- <footer class="entry-footer"> -->
						<?php
						// edit_post_link(
						// 	sprintf(
						// 		wp_kses(
						// 			/* translators: %s: Name of current post. Only visible to screen readers */
						// 			__( 'Edit <span class="screen-reader-text">%s</span>', 'polymer' ),
						// 			array(
						// 				'span' => array(
						// 					'class' => array(),
						// 				),
						// 			)
						// 		),
						// 		wp_kses_post( get_the_title() )
						// 	),
						// 	'<span class="edit-link">',
						// 	'</span>'
						// );
						?>
					<!-- </footer>.entry-footer -->
				<!-- <?php// endif; ?> -->
			</article><!-- #post-<?php the_ID(); ?> -->
			</div>
		</div>
	</div>
</div>
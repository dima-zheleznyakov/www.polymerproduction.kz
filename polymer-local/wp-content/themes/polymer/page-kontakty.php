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
			the_post();

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
				</div>

			

<div  id="order" class="card  rounded-0">
    <div class="card-header p-0">
        <div class="text-center py-2">
            <h3><i class="fa fa-envelope"></i> Форма обратной связи с нами</h3>
			
        </div>
    </div>
    <div class="card-body p-3">

<form name="sentMessage" id="contactForm" >
 

 

  <div class="form-group">
    <label for="name">Ваше имя <span class="red">*</span></label>
    <input type="text" class="form-control"  name="name" placeholder="Ваше имя" required data-validation-required-message="Введите ваше имя">
	<p class="help-block text-danger"></p>
  </div>



  <div class="form-group">
    <label for="city">Название компании</label>
    <input type="text" class="form-control"  name="nameCompany" placeholder="Город">
	<p class="help-block text-danger"></p>
  </div>


  <div class="form-group">
    <label for="email">Ваш email </label>
    <input type="email" class="form-control" name="email"  placeholder="Ваш email">
	<p class="help-block text-danger"></p>
  </div>
  
 

  

  
  <div class="form-group">
    <label for="message">Сообщение</label>
	<textarea name="message" cols="40" rows="5"></textarea>
	<p class="help-block text-danger"></p>
  </div>
  
  
  
  <div class="result"></div>
 
  <div id="success"></div>


<button type="submit" id="submit" class="btn btn-primary">ОТПРАВИТЬ</button>

</form>
								 
								 
								 
                            </div>

                        </div>

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

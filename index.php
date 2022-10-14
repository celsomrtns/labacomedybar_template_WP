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
 * @package labacomedybar
 */

get_header();
?>

	<main id="primary" class="site-main">

	<header class="site-content">
		<div class="container">
			<div class="row logo-home">
				<div class="col-12 text-center">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/laba-logo-home.png" alt="Laba Comedy Bar"></a>
				</div>
			</div>
		</div>
	</header>


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<section>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</section>

				<?php
			endif; ?>

			<section class="evento-page">
				<div class="container">
					<div class="row page-eventos">
						<div class="col-12">
							<div class="col-12 evento-title text-destacado">
								<h1>Eventos</h1>
							</div>
						</div>


						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/eventos', get_post_type() );

						endwhile;
						?>

					</div>
				</div>
			</section>



			<?php

			//the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

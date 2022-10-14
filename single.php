<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package labacomedybar
 */

get_header();
?>

<header class="site-content">
	<div class="container">
		<div class="row logo-home">
			<div class="col-12 text-center">
				<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/laba-logo-home.png" alt="Laba Comedy Bar"></a>
			</div>
		</div>
	</div>
</header>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			/*the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'labacomedybar' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'labacomedybar' ) . '</span> <span class="nav-title">%title</span>',
				)
			);*/

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

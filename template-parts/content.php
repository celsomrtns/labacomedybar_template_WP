<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package labacomedybar
 */

?>


<section class="evento-page">
	<div class="container">
		<div id="post-<?php the_ID(); ?>" class="row">
			<div class="col-12">
				<div class="col-12 evento-title text-destacado">
					<?php
					if ( is_singular() ) :
						the_title( '<h1>', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
				</div>
			</div>
			<div class="col-12 col-md-5">
				<div class="col-12 text-destacado text-center full-img-evento">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
				</div>
			</div>
			<div class="col-12 col-md-7">
				<div class="col-12 text-evento text-destacado">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'labacomedybar' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'labacomedybar' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>


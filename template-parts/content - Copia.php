<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package labacomedybar
 */

?>

<header class="site-content">
	<div class="container">
		<div class="row logo-home">
			<div class="col-12 text-center">
				<a href="index.html"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/laba-logo-home.png" alt="Laba Comedy Bar"></a>
			</div>
		</div>
	</div>
</header>


<section class="evento-page">
	<div class="container">
		<div class="row page-eventos">
			<div class="col-12">
				<div class="col-12 evento-title text-destacado">
					<h1>Eventos</h1>
				</div>
			</div>



			<?php 
			$the_query = new WP_Query( array(
				'posts_per_page' => 100,
			)); 
			?>

			<?php if ( $the_query->have_posts() ) : ?>
				<?php 
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


			<div class="col-4 col-md-3 evento full-img">
				<a href='<?php echo get_permalink(get_the_ID()); ?>'><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/evento-ghost.png" alt="Evento 1" style='background: url("<?php echo get_the_post_thumbnail_url(); ?>") center;
				background-repeat: no-repeat;
				background-size: cover;'></a>
			</div>

				<?php endwhile; ?>
			<?php endif; ?>

			

		</div>
	</div>
</section>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: white; padding: 20px; border: 3px solid red">
	<section class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				labacomedybar_posted_on();
				labacomedybar_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</section><!-- .entry-header -->

	<?php labacomedybar_post_thumbnail(); ?>

	<div class="entry-content">
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php labacomedybar_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

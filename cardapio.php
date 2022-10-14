<?php /* Template Name: Cardapio */ ?>
<?php
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

<section class="evento-page">
    <div class="container">
        <div class="row page-eventos">
            <div class="col-12">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/links', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
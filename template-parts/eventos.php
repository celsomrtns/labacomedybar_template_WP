<?php
/**
 * Template part for displaying posts de eventos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package labacomedybar
 */

?>

<div class="col-4 col-md-3 evento-list full-img">
				<a href='<?php echo get_permalink(get_the_ID()); ?>'><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/evento-ghost.png" alt="<?php echo the_title(); ?>" style='background: url("<?php echo get_the_post_thumbnail_url(); ?>") center;
				background-repeat: no-repeat;
				background-size: cover;'></a>
			</div>
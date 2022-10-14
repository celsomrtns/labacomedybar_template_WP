<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package labacomedybar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="theme-color" content="#895830">

	<meta property="og:image" content="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/favicon.png" />
    <meta property="og:title" content="Laba Comedy Bar" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="A experiência de Entretenimento e Gastronomia no coração da Baixada Fluminense" />
    <meta property="og:site_name" content="<?php echo get_site_url(); ?>" />
    <meta name="author" content="Laba Comedy Bar">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

	<?php wp_head(); ?>
</head>

<body style="background-color: #202020;">
<?php wp_body_open(); ?>


<nav>
	<div class="menubtn">
		<i class="fa-solid fa-bars icone-menu"></i>
	</div>
	<div class="menuarea">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
		?>
	</div>
</nav>
<div class="topbar hide-xs">
	<div class="container">
		<div class="row">
			<div class="col-2 text-center"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/mic-top.png"></div>
			<div class="col-8 text-center">RUA AMBRÓSIO, 231 VILA EMIL - MESQUITA</div>
			<div class="col-2 top-sociais">
				<ul>
					<li><a href="https://www.facebook.com/labacomedybar" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/lababaroficial/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a _ngcontent-ntt-c8="" href="https://wa.me/552126970648" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>



<div id="page" class="site">
	

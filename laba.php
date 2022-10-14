<?php /* Template Name: laba */ ?>
<?php
get_header();
?>


<header>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-2 full-img hide-xs hide-landscape"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/placas-home.png"></div>
			<div class="col-12 col-md-8 text-center logo-home">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/laba-logo-home.png">
				<p><span class="text-destacado">A experiência de Entretenimento e Gastronomia</span><br>
					<span class="text-destacado">no coração da Baixada Fluminense</span></p>
			</div>
			<div class="col-12 col-md-2 full-img galicia-home hide-xs"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/coca-cola.png"></div>
		</div>
	</div>
</header>

<div class="mic-sombra full-img hide-xs">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/mic-sombra.png">
</div>

<div class="eventos">
	<div class="cont-fluido">
		<div class="row" style="padding: 0; margin: 0">
			<div class="col-6 col-md-3">
				<h3 class="text-destacado text-center">Eventos</h3>
			</div>
		</div>

		<div class="roll-eventos">
			<div class="bck-eventos">

				<?php 
				$the_query = new WP_Query( array(
					'posts_per_page' => 6,
				)); 
				?>

				<?php if ( $the_query->have_posts() ) : ?>
					<?php 
						while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="evento full-img">
						<a href='<?php echo get_permalink(get_the_ID()); ?>'><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/evento-ghost.png" alt="<?php echo the_title(); ?>" style='background: url("<?php echo get_the_post_thumbnail_url(); ?>") center;
						background-repeat: no-repeat;
						background-size: cover;'></a>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>

				<div class="evento full-img-btn-todos">
					<a href="<?php echo get_site_url(); ?>/eventos"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/btn-todos.png"></a>
				</div>

			</div>
		</div>
	</div>

	<span class="tres-copos"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/3-copos.png"></span>
</div>


<section class="sobre">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 full-img"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/foto-labacomedybar.png"></div>
			<div class="col-12 col-md-6">
				<h1>Laba Comedy Bar</h1>
				<p>Venha conhecer a melhor experiência de Entretenimento e Gastronomia no coração da Baixada Fluminense</p>
				<p>Oferecemos comodidade e qualidade, para que você tenha uma experiência diferenciada. Melhores carnes e petiscos e aquele chopp gelado. Além de dos melhores comediantes pra você rir até não aguentar mais!</p>
			</div>
		</div>
	</div>
</section>

<section class="sessao-fotos">
	<div class="container">
		<div class="row">
			<div class="col-12 full-img text-center">
				<h3>Quem já passou por aqui?</h3>
				<p>Confira alguns dos melhores comediantes que já passaram por aqui e fique ligado na nossa agenda. Não perca!</p>
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/sessao-fotos.png">
			</div>
		</div>
	</div>
</section>


<section class="cardapio">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 cardapio-destaque"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/cardapio-destaque.png"></div>
			<div class="col-12 col-md-6">
				<h3>Cardápio</h3>
				<p>Acesse nosso cardápio Online pelo QRCode abaixo ou clique no botão para abrir. Aproveite nosso petiscos!</p>

				<p><img class="qrcode-cardapio" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/qrcode-cardapio.png"></p>

				<p><a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>/cardapio" target="_blank">Abrir Cardápio</a></p>
			</div>
		</div>
	</div>
</section>
<script>labaComedy();</script>
<?php
//get_sidebar();
get_footer();

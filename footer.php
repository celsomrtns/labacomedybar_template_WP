<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package labacomedybar
 */

?>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<img class="logo-footer" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/logo-footer.png">
					<address>
						<p>
							RUA AMBRÓSIO, 231<br>
							VILA EMIL - MESQUITA
						</p>
						<small><i class="fa-regular fa-copyright"></i> 2022 - Laba Comedy Bar</small>
					</address>
				</div>
				<div class="col-12 col-md-6 text-right footer-sociais">
					<p>
						<a href="#">(21) 98838-3621</a>
					</p>
					<p>
						<a href="mailto:laba@labacomedybar.com.br">laba@labacomedybar.com.br</a>
					</p>
					<ul>
						<li><a href="https://www.facebook.com/labacomedybar" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/lababaroficial/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a _ngcontent-ntt-c8="" href="https://wa.me/552126970648" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
					</ul>
					<div class="celsomartins">
                        <small>Desenvolvido por:</small>
                        <p>
                            <a href="https://celsomartins.com.br" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/celsomartins.jpg" /></a>
                        </p>
                    </div>
				</div>
			</div>
		</div>
	</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
function labaComedy(){
	var eventoSizeH = $(".evento img").height();
	$(".todos-eventos").attr("style", "height: " + eventoSizeH + "px");

	//sobre
	//$(".sobre").attr("style", "padding-top: " + (eventoSizeH - 50) + "px");


	var eventoSizeW = $(".evento img").width();
	var trescoposRight = eventoSizeW / 2;
	//$(".tres-copos").attr("style", "right: "+ (trescoposRight - 100) +"px");
	//$(".tres-copos img").attr("style", "width: " + (trescoposRight + 100) + "px");

	$(".menubtn").click(function() {
		if ($(".menuarea").hasClass("menuon")) {
			$(".menuarea").removeClass("menuon");
		} else {
			$(".menuarea").addClass("menuon");
		}
	});
}

labaComedy();
</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

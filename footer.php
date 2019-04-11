<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<!--<a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>-->
							<h3><p>ONG Missiion Féminine <br/> </p></h3>	
							<p>A propos de l'ONG Missiion Féminine</p>
							<p>Formation des femmes dans différents métiers artisanaux (coiffure, couture, cuisine, perlage, évènementiel, commerce.</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>Dernières actualités</h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="#">Activité3</a>
										<small>Fev 15, 2019</small>
									</li>
									<li>
										<a href="#">Activité 2</a>
										<small>Dec 23, 2018</small>
									</li>
									<li>
										<a href="#">Activité 1</a>
										<small>Sept 15, 2017</small>
									</li>
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Liens Rapides</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="#">Accueil</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Nos actions</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Nos Activités</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">La Fondation</a><i class="fa fa-angle-right"></i></li>
								
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline" id="contacts"><h2>Contactez-nous</h2></div>
							<address class="md-margin-bottom-40">
								Hèvié, Cotonou  <br />
								BP:30056, Cotonou, BENIN <br />
								Phone: +229 97 95 23 65 <br />
								Email: <a href="mailto:contact@ongmissionfeminine.org" class="">contact@ongmissionfeminine.org </a>
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2019 &copy; Tous droits Réservés.
								
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>&nbsp;
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>&nbsp;
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube">
										<i class="fa fa-youtube-play"></i>
									</a>&nbsp;
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
								
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->
 
	<!--/style-switcher-->
	<!--=== End Style Switcher ===-->


	<!-- POPUP -->
	<script type='text/javascript' src='assets/popup/js/jquery.js'></script>
	<script type='text/javascript' src='assets/popup/js/jquery.simplemodal.js'></script>
	<script type='text/javascript' src='assets/popup/js/basic.js'></script>


	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>

	<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
	<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>

	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>

	<!-- SOCIAL NETWORK  
	<script src="assets/socialnetwork/js/jquery.contact-buttons.js"></script>
	<script src="assets/socialnetwork/js/demo.js"></script>

	-->
	
	
<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			ParallaxSlider.initParallaxSlider();
			

		});
	</script>
	
	  <script>
    $(document).ready(function () {

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
        });

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

    });

$('#da-slider').cslider({

	current		: 0, 	
	// index of current slide
	
	bgincrement	: 50,	
	// increment the background position 
	// (parallax effect) when sliding
	
	autoplay	: true,
	// slideshow on / off
	
	interval	: 5000  
	// time between transitions
	
});
</script>


<script type="text/javascript">
		$(document).ready(function() {
		$('.figure').click(function(){
		  	var title = $(this).find('figcaption').text();
		  	$('.modal-title').html(title);
		  	var content=$(this).html();
		  	$('.modal-body .image').html(content);
		    $('.modal-body .image img').css({'width': '300px', 'height': '220px;'});
		  	$('#myModal').modal({show:true});
		});
		});


// CHARGEMENT DE LA PAGE
    $( document ).ready(function() {
      responsive(); 
    });

    // QUAND LA PAGE EST REDIMENSIONNEE
    $(window).resize(function() {
     responsive(); 
    });

    function responsive()
    {
    	var x = $(window).width();
    	if(x<750)
    	{
    		$('.contenu-centre h1').css('font-size', '40px');
    	}
    	else
    	{
    		$('.contenu-centre h1').css('font-size', '8rem');
    	}
    }
		
	</script>
	
	  
	</body>
	</html>

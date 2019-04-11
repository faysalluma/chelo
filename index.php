<?php
$result=null;

if(isset($_POST['email'])){
    extract($_POST); 
    $nom=nl2br(stripslashes($name));
    $email=nl2br(stripslashes($email));
    $message=nl2br(stripslashes($message));
    
    $destinataire="info@ongmissionfeminine.com";

    $sujet="Formulaire de contact depuis ongmissionfeminine.com";
    $entete='De : '.$email.'';
    $message='Nom : '.$nom.' '."\n"."\n".'Email : '.$email.' '."\n"."\n".'Message : '.$message;
    
    
    mail($destinataire, $sujet, $message, $entete);


    //utf8_decode
    $result="Merci d'avoir contacté ONG MISSION FEMININE, nous vous répondrons le plus rapidement possible.";
    
    //header('location: index.php'); 
}

?>
	<?php include 'header.php'; ?>

	<!--=== Slider ===-->
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2><i>VALENTINA MISS </i> <br /> <i>BLACK</i> </h2>
					<p><i>Valorisation de la peau</i> <br />  <i>noire</i> <br /> <i>Lutte contre la dépigmentation </i></p>
					<div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/1.jpg" alt="image01"></div>
				</div>
				<div class="da-slide">
					<h2><i>EDUCATION</i> <br /> <i>ET FORMATION</i></h2>
					<p><i>Ouverture de plusieurs centre de</i> <br />  <i>formation coiffure et couture</i> <br /> <i>Subvention de la moitié de l'écolage</i><br /> <i> et des frais de TD des élèves</i></p>
					<div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/3.jpg" alt="image02"></div>
						
				</div>
				<div class="da-slide">
					<h2><i>JENNESSE et</i> <br /> <i>FEMMES</i> </h2>
					<p><i>Incitation de l'écolage des filles</i> <br /> <i>Baisse considérable </i> <br />  <i>du gaspilage de l'économie familiale</i></p>
					<div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/2.jpg" alt="image03"></div>
				</div>
				<div class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</div>
			</div>
		</div><!--/slider-->
		<!--=== End Slider ===-->

		<!--=== Purchase Block ===-->


		<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


		
		<div class="purchase">
			<div class="container overflow-h">
				<div class="headline" id="nosactions"><h2>Nos actions</h2></div><br/>
				<div class="row">
					<div class="col-md-5 btn-buy animated fadeInRight">
						<img class="img-responsive" src="assets/img/jaa_people.png" alt="">
					</div>						
				
					<div class="col-md-4 animated fadeInLeft">
					
						<span>Soutenez nos actions!</span>
						<p>L'aide de nos donateurs, bénévoles et partenaires permet de redonner le sourire aux jeunes filles et femmes et leur fourni les moyens d'un meilleur avenir. Ensemble, nous pouvons créer des changements durables.</p>
					</div>
			
					<div class="col-md-3 btn-buy animated fadeInRight">
						<a href="contact.php" class="btn-u btn-u-lg"><i class="fa fa-money"></i>Faites un Don! </a>
					</div>
				</div>
			</div>
		</div><!--/row-->
		<!-- End Purchase Block -->

		<!--=== Content Part ===-->
		<div class="container content-sm">
			<!-- Service Blocks -->
			<div class="row margin-bottom-30">
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-hourglass-half  service-icon"></i>
						<div class="desc">
							<h4>Développement durable</h4>
							<p>Visite des orphelinats, Dons aux enfants à la Noel intutilé "Noel aux enfants démunies",Lutte contre la 
							dépigmentation, Sensibilisation pour la consommation et la production locale, Recrutement et offre d'emploi
							des agents de l'entretien au profit des foyers dans le besoin.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa icon-education-007 service-icon"></i>
						<div class="desc">
							<h4>Education</h4>
							<p>Don de bourses de formation aux femmes mariées dépendantes de leurs époux dans des métiers choisis,
							éducation et aide aux femmes aux foyer, Incitation de l'écolage des filles,Ouverture de plusieurs centre de
							formation de coiffure et de couture.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-users service-icon"></i>
						<div class="desc">
							<h4>Femmes et Actions</h4>
							<p>Récupération des filles déscolarisées, Recrutement des maitres et maitresses coiffeurs-couturiers pour 
							l'éducation - la formation - la libération et l'installation sur le marché de prestations et de vente
							de service.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Blokcs -->

			<!-- Recent Works -->
			<div class="headline" id="nosactivites"><h2>Activités récentes</h2></div>
			<div class="row margin-bottom-20">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
						<div class="thumbnail-img">
						
							<div class="overflow-hidden">
								
								<img class="img-responsive" src="assets/img/jaa1.jpg" alt="">
							</div>
							<a class="btn-more hover-effect" href="#"><!-- 24 Dec <br/> -->Lire plus +</a>
						</div>
						<div class="caption">
							<h3><a class="hover-effect" href="#">Activité 1</a></h3>
							<p>Célébration de la journéé MISS BLACK VALENTINA avec des candidates exceptionnelles.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
						<div class="thumbnail-img">
							<div class="overflow-hidden">
								<img class="img-responsive" src="assets/img/jaa2.jpg" alt="">
							</div>
							<a class="btn-more hover-effect" href="#">Lire plus +</a>
						</div>
						<div class="caption">
							<h3><a class="hover-effect" href="#">Activité 2</a></h3>
							<p>Production des produits capollaires et cosmétiques locaux et baisse considérable de gaspillage de l'économie
							familiale.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
						<div class="thumbnail-img">
							<div class="overflow-hidden">
								<img class="img-responsive" src="assets/img/jaa3.jpg" alt="">
							</div>
							<a class="btn-more hover-effect" href="#">Lire plus +</a>
						</div>
						<div class="caption">
							<h3><a class="hover-effect" href="#">Activité 3</a></h3>
							<p>Recrutement et offre d'emploi des agents d"entretien au profit des foyers dans le besoin.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
						<div class="thumbnail-img">
							<div class="overflow-hidden">
								<img class="img-responsive" src="assets/img/jaa4.jpg" alt="">
							</div>
							<a class="btn-more hover-effect" href="#">Lire plus +</a>
						</div>
						<div class="caption">
							<h3><a class="hover-effect" href="#">Activité 4</a></h3>
							<p>Construction des latrines publiques avec l'aide de la société SOKI YOTE NANI de la France.</p>
						</div>
					</div>
				</div>
				<!--<a class="btn-more hover-effect" href="#"> + d'Activités</a> -->
			</div>
			<!-- End Recent Works -->

			<!-- Info Blokcs -->
			<div class="row margin-bottom-30">
				<!-- Welcome Block -->
				<div class="col-md-8 md-margin-bottom-40">
					<div class="headline" id="mot"><h2>Mot de la présidente</h2></div>
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive margin-bottom-10" src="assets/img/jaa6.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem., Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
							<ul class="list-unstyled margin-bottom-20">
								<li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida</li>
								<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
								<li><i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida at eget metus. .</li>
								<li><i class="fa fa-check color-green"></i> Corporate and Creative</li>
							</ul>
						</div>
							<blockquote class="hero-unify">
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem..</p>
								<small>Jacqueline AMIVI AKAA, La Présidente</small>
							</blockquote>						
					</div>


				</div><!--/col-md-8-->

				<!-- Latest Shots -->
				<div class="col-md-4">
					<div class="headline" id="galerie"><h2>Autres</h2></div>
					<div id="myCarousel" class="carousel slide carousel-v1">
						<video width="320" height="240" controls>
						  <source src="assets/missblack.mp4" type="video/mp4">
						  <!--<source src="movie.ogg" type="video/ogg">-->
						Your browser does not support the video tag.
						</video>
					</div>
				</div><!--/col-md-4-->
			</div>
			<!-- End Info Blokcs -->

			<!-- Owl Clients v1 -->
			<div class="headline" id="nospartenaires"><h2>Nos partenaires</h2></div>
			<div class="owl-clients-v1">
				<div class="item">
					<img src="assets/img/jaapartners/bankatlantic.png" alt="">
				</div>
					<div class="item">
					<img src="assets/img/jaapartners/variety.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/jaapartners/bbb.png" alt="">
				</div>				
				<div class="item">
					<img src="assets/img/jaapartners/cctbatimat.png" alt="">
				</div>				
				<div class="item">
					<img src="assets/img/jaapartners/ceet.png" alt="">
				</div>				
				<div class="item">
					<img src="assets/img/jaapartners/midnightsun.png" alt="">
				</div>
				
				<div class="item">
					<img src="assets/img/jaapartners/togotelecom.png" alt="">
				</div>

				<div class="item">
					<img src="assets/img/jaapartners/midnightsun.png" alt="">
				</div>
				
				<div class="item">
					<img src="assets/img/jaapartners/vitale.png" alt="">
				</div>
				
	
			</div>
			<!-- End Owl Clients v1 -->
		</div><!--/container-->
		<!-- End Content Part -->

<?php include 'footer.php'; ?>

<!-- toastr -->
<link rel="stylesheet" type="text/css" href="toastr/pnotify.custom.min.css">
<script src='toastr/pnotify.custom.min.js'></script>
<script type="text/javascript">

    var result= "<?php if(isset($result)){echo $result;} ?>"

    if(result!="")
    {
         $(function(){
            new PNotify({
                title: 'ONG MISSION FEMININE',
                text: result,
                width: "500px",
                type: "success",
                hide: true,
                delay: 12000
            });
        });
    }


    // Changer l'url du navigateur  (Eviter rechargment avec valeur des input)
   window.history.pushState(document.title,document.title,"");
    
</script>
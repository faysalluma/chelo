<?php include 'header.php'; ?>


<!-- CONTENU -->
<div >
			<!--=== content-centre ===-->
		<div class="row contenu-centre" style="padding: 70px;">
		<h2>Contactez-nous</h2>
		<!--<h3 style="color: white; margin-top: 30px;">lorem anim id est laborum.</h3>-->
		</div>
		<div class="fleche"></div>
		<!--=== content-centre ===-->


		<div class="row">
		<div class="col-md-offset-2 col-md-8 col-md-offset-2">

			<h3 style="margin-bottom: 20px;" class="text-center">Remplissez le formulaire svp.</h3>

			<form action="index.php" method="post" id="sky-form3" class="sky-form contact-style" >
				<fieldset class="no-padding">
					<label>Nom <span class="color-red">*</span></label>
					<div class="row sky-space-20" style="margin-bottom: 10px;">
						<div class="col-md-11 col-md-offset-0">
							<div>
								<input type="text" name="name" id="name" class="form-control" required>
							</div>
						</div>
					</div>

					<label>Email <span class="color-red">*</span></label>
					<div class="row sky-space-20" style="margin-bottom: 10px;">
						<div class="col-md-11 col-md-offset-0">
							<div>
								<input type="email" name="email" id="email" class="form-control" required>
							</div>
						</div>
					</div>

					<label>Message <span class="color-red">*</span></label>
					<div class="row sky-space-20" style="margin-bottom: 15px;">
						<div class="col-md-11 col-md-offset-0">
							<div>
								<textarea rows="8" name="message" id="message" class="form-control" required></textarea>
							</div>
						</div>
					</div>

					<p><button type="submit" class="btn-u" style="margin-bottom: 20px; margin-top: 5px;">Envoyer</button></p>
				</fieldset>

				<!--<div class="message">
					<i class="rounded-x fa fa-check"></i>
					<p>Your message was successfully sent!</p>
				</div>-->
			</form>

		</div>
		</div>
		<!--=== content-centre ===-->

</div>

<!-- END CONTENU -->

<?php include 'footer.php'; ?>
	
	

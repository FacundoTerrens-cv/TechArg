
  <?php 
   include 'cabecera.php';
   ?> 
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
      <div class="salcir-text-box">
                  <div class="titulo-salcir-decoration">
                  <p class="titulosalcir">Formulario de Contacto</p>
               </div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">
							<div class="col-lg-8 mb-5">
								<div class="row">
									<div class="col-md-4">
										<div class="dbox w-100 text-center">

					        		<div class="text">

						          </div>
					          </div>
									</div>
									<div class="col-md-4">
										<div class="dbox w-100 text-center">

					        		<div class="text">

						          </div>
					          </div>
									</div>
									<div class="col-md-4">
										<div class="dbox w-100 text-center">

					        		<div class="text">

						          </div>
					          </div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="contact-wrap">
									<h3 class="mb-4 text-center">Get in touch with us</h3>
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
										<div id="form-message-success" class="mb-4 w-100 text-center">
										Your message was sent, thank you!
										</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input style="background: #181818;" type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


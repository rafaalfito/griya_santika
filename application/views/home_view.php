<!-- Banner image -->
<div class="masthead">
	<div class="color-overlay d-flex justify-content-center align-items-center">
		<h1>Griya Santika</h1>
	</div>
</div>
<!--  Akhir Banner -->



<!--filosofi-->
<section id="filosofi" style="background-color: #ADD8E6">
	<div class="containe">
		<div class="row text-center">
			<div class="col">
				<h2 class="font-weight-light">Home</h2>
			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div class="col">
				<p>Is a place to come back to after a tired day of activities. Is a
					comfortable resting place. A
					comfortable place to gather with family</p>
			</div>
		</div>
	</div>
</section>
<!--Akhir filosofi-->



<!-- Tentang Hunian -->
<div id="Type"> </div>
<section class="hunian">
	<div class="container">
		<div class="row text-center">
			<div id="wrapper">
				<div class="tabs">
					<input hidden type="radio" name="tab-name" id="tab-1" checked>
					<button type="button" class="btn" style="background-color: #5F9EA0 ;"><label class="tab-control" for="tab-1">Type-212</label></button>

					<input hidden type="radio" name="tab-name" id="tab-2" checked>
					<button type="button" class="btn" style="background-color: #5F9EA0 ;"><label class="tab-control" for="tab-2">Type-302</label></button>

					<input hidden type="radio" name="tab-name" id="tab-3" checked>
					<button type="button" class="btn" style="background-color: #5F9EA0 ;"><label class="tab-control" for="tab-3">Type-420</label></button>

					<div class="tab-content">
						<div id="tab-panel-1" class="tab-panel">
							<div class="row border g-0 rounded shadow-sm">
								<div class="col md-4">
									<h3>Tampak depan</h3>
									<div class="card">
										<img class="img-responsive" src="<?php echo site_url('images/depan.jpg'); ?>">
									</div>
								</div>
								<div class="col-auto">
									<div class=card>
										<img src="<?php echo site_url('images/perum.jpg'); ?>">
									</div>
									<button class="btn" style="background-color: #808080;"><a style="color: #000000;" href="<?php echo base_url('home/small'); ?>">Type-212</a></button>
								</div>
							</div>
						</div>
						<div id="tab-panel-2" class="tab-panel">
							<div class="row border g-0 rounded shadow-sm">
								<div class="col md-4">
									<h3>Tampak depan</h3>
									<div class="card">
										<img src="<?php echo site_url('images/depan.jpg'); ?>">
									</div>
								</div>
								<div class="col-auto">
									<div class="card">
										<img src="<?php echo site_url('images/prum 09.jpg'); ?>">
									</div>
									<button class="btn" style="background-color: #808080;"><a style="color: #000000;" href="<?php echo base_url('home/medium'); ?>">Type-302</a></button>
								</div>
							</div>
						</div>
						<div id="tab-panel-3" class="tab-panel">
							<div class="row border g-0 rounded shadow-sm">
								<div class="col md-4">
									<h3>Tampak depan</h3>
									<div class="card">
										<img src="<?php echo site_url('images/depan.jpg'); ?>">
									</div>
								</div>
								<div class="col-auto">
									<div class="card">
										<img src="<?php echo site_url('images/peum 05.jpg'); ?>">
									</div>
									<button class="btn" style="background-color: #808080;"><a style="color: #000000;" href="<?php echo base_url('home/big'); ?>">Type-420</a></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Akhir hunian-->
<!--slider-->
<div id="carouselExampleIndicators" class="carousel slide fixed" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo site_url('images/03.jpg'); ?>" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="<?php echo site_url('images/interior-01.jpg'); ?>" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="<?php echo site_url('images/interior-03.jpg'); ?>" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="<?php echo site_url('images/04.jpg'); ?>" class="d-block w-100" alt="...">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
<!--akhir-->


<!--lokasi terdekat-->
<div id="terdekat"></div>
<br>
<div class="lokasi">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<h2 class="font-weight-light"> <br> Surrounding Facility</h2>
				<p>gives you the convenience to travel anywhere, located in the prime location of Bogor city,
					surrounded by several supporting facilities</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 mb-3">
				<div class="card1">
					<img src="<?php echo site_url('images/botani.jpg'); ?>" class="card-img-top" alt="Botani Square">
					<div class="card-body">
						<p class="card-text">10 Minutes to Botani Square <br>
							<button type="button" class="btn" style="background-color: #556B2F ;"><a target="_blank" style="color: #ffff;" href="https://www.google.com/maps/place/Botani+Square+Bogor/@-6.6012422,106.8048538,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69c5c5287d2ae7:0x9edb391e7c74be19!8m2!3d-6.6012422!4d106.8070425">Maps</a>
							</button>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="card2">
					<img src="<?php echo site_url('images/Rs_Siloam.jpg'); ?>" class="card-img-top" alt="Rs_siloam">
					<div class="card-body">
						<p class="card-text">10 Minutes to Siloam Hospital <br>
							<button type="button" class="btn" style="background-color: #556B2F ;">
								<a target="_blank" style="color: #ffff;" href="https://www.google.com/maps/place/Siloam+Hospitals+Bogor/@-6.5956638,106.8024994,17z/data=!3m2!4b1!5s0x2e69c5cfdc7fc24f:0xcb26731227c87d15!4m5!3m4!1s0x2e69c5cfedf6086d:0x64de2ab6cd78dce4!8m2!3d-6.5956638!4d106.8046881">Maps</a>
							</button>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3 ">
				<div class="card3">
					<img src="<?php echo site_url('images/Ikea.jpg'); ?>" class="card-img-top" alt="Ikea">
					<div class="card-body">
						<p class="card-text">6 Minutes to Ikea Sentul <br>
							<button type="button" class="btn" style="background-color: #556B2F ;"><a target="_blank" style="color: #ffff;" href="https://www.google.com/maps/place/IKEA+Sentul+City/@-6.5674344,106.853685,16.67z/data=!4m5!3m4!1s0x2e69c73d34264871:0xb16ab9324c760891!8m2!3d-6.5673402!4d106.8552351">Maps</a></button>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3 ">
				<div class="card3">
					<img src="<?php echo site_url('images/Kebun-Raya.jpg'); ?>" class="card-img-top" alt="Kebun">
					<div class="card-body">
						<p class="card-text">10 Minutes to Bogor Botanical Garden
							<br>
							<button type="button" class="btn" style="background-color: #556B2F ;"><a target="_blank" style="color: #ffff;" href="https://www.google.com/maps/place/Kebun+Raya+Bogor/@-6.5976289,106.7973811,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69c5c412a67abb:0x75f23c6b45a37ee5!8m2!3d-6.5976289!4d106.7995698">Maps</a></button>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3 ">
				<div class="card3">
					<img src="<?php echo site_url('images/Toll-Borr.jpg'); ?>" class="card-img-top" alt="Toll">
					<div class="card-body">
						<p class="card-text">3 minutes to Bogor Ring Road tollgate
							<br>
							<button type="button" class="btn" style="background-color: #556B2F ;"><a target="_blank" style="color: #ffff;" href="https://www.google.com/maps/place/Tol+Sentul+Barat/@-6.5640044,106.7662276,13z/data=!4m9!1m2!2m1!1spintu+tol+sentul+barat!3m5!1s0x2e69c72879644daf:0x67056fa6c4b94857!8m2!3d-6.5640027!4d106.8362655!15sChZwaW50dSB0b2wgc2VudHVsIGJhcmF0WhgiFnBpbnR1IHRvbCBzZW50dWwgYmFyYXSSAQx0b2xsX3N0YXRpb26aASRDaGREU1VoTk1HOW5TMFZKUTBGblNVUXljVFZYVjNkM1JSQUI">Maps</a></button>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3 ">
				<div class="card3">
					<img src="<?php echo site_url('images/Sekolah-al-azhar.jpg'); ?>" class="card-img-top" alt="al-azhar">
					<div class="card-body">
						<p class="card-text">5 Minutes to Al-Azhar School
							<br>
							<button type="button" class="btn" style="background-color: #556B2F ;"><a style="color: #ffff;" href="https://www.google.com/maps/place/Sekolah+Dasar+Islam+Terpadu+(SDIT)+Al+-+Azhhar+Bogor/@-6.5780352,106.7657155,12.82z/data=!4m9!1m2!2m1!1sal+azhar+school+bogor!3m5!1s0x2e69c43b1bec7567:0xceced8df89c602ca!8m2!3d-6.5737719!4d106.8041431!15sChVhbCBhemhhciBzY2hvb2wgYm9nb3IiA4gBAZIBEWVsZW1lbnRhcnlfc2Nob29s">Maps</a></button>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
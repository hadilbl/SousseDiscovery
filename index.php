<?php
require_once('head.php');
?>
<?php require_once('navbar.php'); ?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/sousse2.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
			<div class="col-md-7 ftco-animate">
				<span class="subheading">Bienvenue à Sousse Discovery</span>
				<h1 class="mb-4">Découvrez Votre Endroit Préféré Avec Nous</h1>
				<p class="caps">Voyagez dans tous les coins de Sousse, sans tourner en rond</p>
			</div>
			<a href="https://www.youtube.com/watch?v=AITQLaR63TY" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
				<span class="fa fa-play"></span>
			</a>
		</div>
	</div>
</div>



<section class="ftco-section services-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
				<div class="w-100">
					<span class="subheading">Bienvenue à Sousse Discovery</span>
					<h2 class="mb-4">Il est le temps de commencer votre aventure</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
						A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-1 d-block img" style="background-image: url(images/parachute.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Activities</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-2 d-block img" style="background-image: url(images/cheval.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Travel Arrangements</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-3 d-block img" style="background-image: url(images/services-3.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Visite Guidées</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-4 d-block img" style="background-image: url(images/services-4.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Hébergement</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Sousse Discovery Suggére Des Places</span>
				<h2 class="mb-4">Sélectionnez Votre Destination</h2>
			</div>
		</div>
	</div>
	<div class="container container-2">
		<div class="row">
			<div class="col-md-12">
				<div class="carousel-destination owl-carousel ftco-animate">
					<!-- <?php
							$all = $destinationfct->read2();
							foreach ($all as $i => $item) :
							?>
						<div class="item">
							<div class="project-destination">
								<a href="#" class="img" style="background-image: url(images/kantaoui.webp);">
									<div class="text">
										<h3>Kantaoui</h3>
										<span>3 Tours</span>
									</div>
								</a>
							</div>
						</div>
					<?php endforeach; ?> -->

					<div class="item">
						<div class="project-destination">
							<a href="#" class="img" style="background-image: url(images/kantaoui.webp);">
								<div class="text">
									<h3>Kantaoui</h3>
									<span>3 Tours</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="project-destination">
							<a href="#" class="img" style="background-image: url(images/hergla.avif);">
								<div class="text">
									<h3>Hergla</h3>
									<span>2 Tours</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="project-destination">
							<a href="#" class="img" style="background-image: url(images/sousse1.jpg);">
								<div class="text">
									<h3>Madina</h3>
									<span>5 Tours</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="project-destination">
							<a href="#" class="img" style="background-image: url(images/mall.png);">
								<div class="text">
									<h3>Sidi Bou Ali</h3>
									<span>5 Tours</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="project-destination">
							<a href="#" class="img" style="background-image: url(images/place-5.jpg);">
								<div class="text">
									<h3>Kalaa Kbira</h3>
									<span>7 Tours</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
				<span class="subheading">Hébergement</span>
				<h2 class="mb-4">Sélectionnez Votre Hébergement</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap hotel">
					<a href="#" class="img" style="background-image: url(images/movinpick.avif);">
						<span class="price">219dt/personne</span>
					</a>
					<div class="text p-4">
						<p class="star mb-2">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</p>
						<span class="days">8 Days Tour</span>
						<h3><a href="#">Mövenpick</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Bd du 14 Janvier, Sousse </p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-mountains"></span>Prés de la plage</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap hotel">
					<a href="#" class="img" style="background-image: url(images/hote1.jpg);">
						<span class="price">219dt/personne</span>
					</a>
					<div class="text p-4">
						<p class="star mb-2">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</p>
						<span class="days">10 Days Tour</span>
						<h3><a href="#">Dar Badiaa</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Sidi Bouraoui, 20 rue mosquée Hanafia, Sousse</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Prés de la plage</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap hotel">
					<a href="#" class="img" style="background-image: url(images/palace.avif);">
						<span class="price">214dt/personne</span>
					</a>
					<div class="text p-4">
						<p class="star mb-2">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</p>
						<span class="days">7 Days Tour</span>
						<h3><a href="#">Sousse Palace Hotel & Spa</a></h3>
						<p class="location"><span class="fa fa-map-marker"></span> Av. Habib Bourguiba, Sousse</p>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span>Prés de la plage</li>
						</ul>
					</div>
				</div>
			</div>


		</div>
</section>



<section class="ftco-section ftco-about img" style="background-image: url(images/sousse4.jpg);">
	<div class="overlay"></div>
	<div class="container py-md-5">
		<div class="row py-md-5">
			<div class="col-md d-flex align-items-center justify-content-center">
				<a href="https://www.youtube.com/watch?v=3nEJAXoB4Mo" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-12 about-intro">
				<div class="row">
					<div class="col-md-6 d-flex align-items-stretch">
						<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/banana.jpg);">
						</div>
					</div>
					<div class="col-md-6 pl-md-5 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">A Propos</span>
								<h2 class="mb-4">Rendez Votre Visite Mémorable Et Sûre Avec Nous</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<span class="subheading">Témoignages</span>
				<h2 class="mb-4">Témoignages des touristes</h2>
				<?php
				$success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
				$danger = '<div class="alert alert-danger" role="alert"><strong>' . "Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';
				if (isset($_POST['send'])) {
					echo ($contactfct->create($_POST['nom'], $_POST['prenom'], $img, $_POST['review'])) ? $success : $danger;
				}
				?>
			</div>
		</div>

		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<?php
					$all = $feedbackfct->read();
					foreach ($all as $i => $item) :
					?>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="mb-4"><?= $item["Commentaire"]; ?></p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/<?= $item["avatar"]; ?>)"></div>
										<div class="pl-3">
											<p class="name"><?= $item["nom"] . " " . $item["prenom"]; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-intro ftco-section ftco-no-pt mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center">
				<div class="img" style="background-image: url(images/bg_2.jpg);">
					<div class="overlay"></div>
					<h2>We Are Pacific A Travel Agency</h2>
					<p>We can manage your dream building A small river named Duden flows by their place</p>
					<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require_once('footer.php'); ?>
<?php include('loader.php'); ?>
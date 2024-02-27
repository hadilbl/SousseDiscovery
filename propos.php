<?php require_once('head.php'); ?>
<?php require_once('navbar.php'); ?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>A Propos <i class="fa fa-chevron-right"></i></span></p>
				<h1 class="mb-0 bread">A Propos</h1>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Bienvenue à Sousse Discovery</span>
				<p class="mb-4">Sousse Discovery est un portail d'information sur le tourisme en Sousse.
					Vous êtes passionné de voyages et à la recherche de séjours en Sousse?
					Découvrez de plus près la destination Sousse ainsi que ses sublimes monuments, villes et paysages.
					Profitez en un seul clic d’informations pratiques et de notre guide
					d'hôtels sélectionnés et adaptés à tous vos besoins.</p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-about img" style="background-image: url(images/sousse.jpg);">
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
						<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/bleu.webp);">
						</div>
					</div>
					<div class="col-md-6 pl-md-5 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">A Propos</span>
								<h2 class="mb-4">Rendez Votre Visite Mémorable Et Sûre Avec Nous</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, 
									there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
									 a large language ocean.</p>
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
				<span class="subheading">Testimonial</span>
				<h2 class="mb-4">Tourist Feedback</h2>
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
					<p class="mb-0"><a href="contact.php" class="btn btn-primary px-4 py-3">Contactez-Nous</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require_once('footer.php'); ?>
<?php include('loader.php'); ?>
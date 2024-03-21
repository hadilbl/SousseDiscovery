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
					<p> Bienvenue à Sousse Discovery, votre guide ultime pour explorer tous les trésors cachés de la magnifique ville de Sousse et de ses environs.</p>
					<p>	Plongez dans une expérience immersive où chaque coin de rue révèle une nouvelle histoire, une nouvelle découverte à faire.
						Préparez-vous à vivre des moments inoubliables et à créer des souvenirs durables alors que vous embarquez pour une aventure passionnante avec Sousse Discovery.</p>
					<p><a href="destination.php" class="btn btn-primary py-3 px-4">Recherche Destination</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-1 d-block img" style="background-image: url(images/parachute.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Activities</h3>
								<p>Découvrez et explorez une variété d'activités passionnantes à Sousse et ses environs grâce à Sousse Discovery.</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-2 d-block img" style="background-image: url(images/cheval.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Préparatifs De Visite</h3>
								<p>Planifiez votre séjour à Sousse en toute simplicité avec les outils de préparation de visite de Sousse Discovery.</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-3 d-block img" style="background-image: url(images/visite.jpg);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Visite Guidées</h3>
								<p>Découvrez Sousse sous un nouvel angle avec nos visites guidées passionnantes et informatives.</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
						<div class="services services-1 color-4 d-block img" style="background-image: url(images/transport.webp);">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Transport</h3>
								<p>Facilitez vos déplacements avec notre service de transport fiable et efficace,
									disponible pour vous transporter où vous le souhaitez, quand vous le souhaitez.</p>
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
					<?php
					$all = $destinationfct->read2();
					foreach ($all as $i => $item) :
					?>
						<div class="item">
							<div class="project-destination">
								<a href="#" class="img" style="background-image: url(images/<?= $item["image"]; ?>);">
									<div class="text">
										<h3><?= $item["nom"]; ?></h3>
										<span>3 Tours</span>
									</div>
								</a>
							</div>
						</div>
					<?php endforeach; ?>

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
			<?php
			$all = $hebergementfct->read2();
			foreach ($all as $i => $item) :
			?>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap hotel">

						<a href="#" class="img" style="background-image: url(images/<?= $item["image"]; ?>);">
							<span class="price"><?= $item["prix"]; ?> /personne</span>
						</a>
						<div class="text p-4">

							
							<h3><a href="#"><?= $item["nom"]; ?></a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> <?= $item["localisation"]; ?> </p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-mountains"></span><?= $item["type"]; ?></li>
							</ul>
						</div>

					</div>
				</div>
			<?php endforeach; ?>
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
								<p>Notre mission est de vous offrir une expérience touristique exceptionnelle, 
									en mettant l'accent sur la qualité, la sécurité et le confort tout au long de votre séjour.</p>
								<p><a href="propos.php" class="btn btn-primary">Lire Plus</a></p>
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
									<p class="mb-4"><?= $item["date"]; ?></p>
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
<div class="row justify-content-center mt-3"><a href="témoignage.php" class="btn btn-primary py-3 px-5 ">Donner votre témoignage</a></div>


<section class="ftco-intro ftco-section ftco-no-pt mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url(images/sousse1.jpg);">
                    <div class="overlay"></div>
                    <h2>NOUS SOMMES SOUSSE DISCOVERY</h2>
                    <p>Nous pouvons organiser votre découverte du site touristique Sousse Discovery.</p>
                    <p class="mb-0"><a href="contact.php" class="btn btn-primary px-4 py-3">Contactez-Nous</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('footer.php'); ?>
<?php include('loader.php'); ?>
<?php
    require_once ('head.php');
    require_once ('navbar.php');
    if (isset ($_GET['id'])):
        $idhebergement = $_GET['id'];
        $Hebergement = $hebergementfct->getById($idhebergement);
    else:
        echo "Identifiant d'hébergement non spécifié.";
    endif;
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="index.php">Acceuil <i class="fa fa-chevron-right"></i></a></span>
                    <span class="mr-2"><a href="hébergement.php">Hébergement <i class="fa fa-chevron-right"></i></a></span>
                    <span>Hébergement Details<i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-0 bread">Hébergement Details</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 ftco-animate py-md-2 mt-md-5 fadeInUp ftco-animated">
                <h2 class="mb-3"><?= $Hebergement['nom'] ?></h2>
                <p><img src="images/<?= $Hebergement['image'] ?>" alt="" class="img-fluid"></p>
            </div>
            <div class="col-md-12 ftco-animate py-md-2 mt-md-2 fadeInUp ftco-animated">
                <p><?= $Hebergement['description'] ?></p>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103514.96686123488!2d10.618054400000009!3d35.82833455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130275759ac9d10d%3A0x698e3915682cef7d!2sSousse!5e0!3m2!1sfr!2stn!4v1710335278814!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 ">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3 class="ml-5">Infromations</h3>
                        <ul>
                            <li><a href="#">Nom <span><?= $Hebergement['nom'] ?></span></a></li>
                            <li><a href="#">Localisation <span><?= $Hebergement['localisation'] ?></span></a></li>
                            <li><a href="#">Type <span><?= $Hebergement['type'] ?></span></a></li>
                            <li><a href="#">Prix <span><?= $Hebergement['prix'] ?></span></a></li>
                        </ul>
                    </div>
                </div>
                <p class="text-center mb-0"><a href="booking.php?type=Hebergement&id=<?= $Hebergement['id']; ?>" class="btn btn-primary px-5 py-3">Réserver</a></p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ftco-intro ftco-section ftco-no-pt">
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
<?php require_once ('footer.php');
include ('loader.php'); ?>
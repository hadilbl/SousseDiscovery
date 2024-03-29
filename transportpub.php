<?php
    require_once ('head.php');
    require_once ('navbar.php');
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="index.php">Acceuil <i class="fa fa-chevron-right"></i></a></span>
                    <span><a href="Transport.php">Transport</a><i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-0 bread">Transport Publique</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <?php
                $all = $transportfct->read();
                foreach ($all as $i => $item):
            ?>
                <div class="col-md-4 ">
                    <div class="blog-entry justify-content-end">
                        <a href="detailstrans.php?id=<?= $item['id']; ?>" class=" block-20"style="background-image: url('images/<?= $item["image"]; ?>');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-9 topp">
                                <div class="five">
                                    <span class="mos"><?= $item["type"]; ?></span>
                                    <span class="yr"><?= $item["prix"]; ?></span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="detailstrans.php?id=<?= $item['id']; ?>"><?= $item["nom_transport"]; ?></a></h3>
                            <p><?= $item["nom_agence"]; ?></p>
                            <p><a href="#" class="btn btn-primary">Lire Plus</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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
<?php
    require_once ('footer.php');
    include ('loader.php');
?>
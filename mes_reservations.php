<?php

require_once('head.php');
require_once('navbar.php');
$idclient = $currentUser['id'];
$reservations = $reservationfct->getlistbyclient($idclient);
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Liste Des Réservations <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Vos Réservations</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if (!empty($reservations)) { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Type</th>
                                <th scope="col">Date Réservation</th>
                                <th scope="col">statut</th>
                                <!-- Autres colonnes de réservation -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($reservations as $reservation) { ?>
                                <tr>
                                    <th scope="row"><?= $reservation['id']; ?></th>
                                    <td><?= $reservation['type']; ?></td>
                                    <td><?= $reservation['dateReservation']; ?></td>
                                    <td class="align-middle text-center text-sm">
                                        <?php if ($reservation["etat"] == 0) : ?>
                                            <span class="badge badge-sm bg-gradient-danger">invalider</span>
                                        <?php else : ?>
                                            <span class="badge badge-sm bg-gradient-success">valider</span>
                                        <?php endif; ?>
                                    </td>

                                    <!-- Autres colonnes de réservation -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <p>Aucune réservation trouvée.</p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php
require_once('footer.php');
include('loader.php');
require_once('script.php');
?>
<?php
require_once('head.php');
require_once('navbar.php');
?>
<style>
    .image-booking {
        height: 400px;
        width: 400px;
    }

    .date-booking {
        display: flex;
        gap: 10px;
    }
</style>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-0 bread">Formulaire Réservation</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
        <?php
        $success = '<div class="alert alert-success" role="alert">' . "Réservation terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
        $danger = '<div class="alert alert-danger" role="alert"><strong>' . "Erreur" . '</strong> ' . "lors de la terminaison de cette réservation." . '</div>';
        $idFor = $_GET['id'];
        $type = $_GET['type'];
        if (isset($currentUser['id'])) {
            if ($_GET['type'] == 'Hebergement') {
                $For = $hebergementfct->getById($_GET['id']);
                if (isset($_POST['confirmerReservation'])) {
                    echo ($reservationfct->create($idFor, $type, $currentUser['id'], $_POST['dateD'], $_POST['dateF'])) ? $success : $danger;
                }
            };
            if ($_GET['type'] == 'Destination') {
                $For = $destinationfct->getById($_GET['id']);
                if (isset($_POST['confirmerReservation'])) {
                    echo ($reservationfct->create($idFor, $type, $currentUser['id'], "NULL", "NULL")) ? $success : $danger;
                }
            };
            if ($_GET['type'] == 'Transport') {
                $For = $transportfct->getById($_GET['id']);
                if (isset($_POST['confirmerReservation'])) {
                    echo ($reservationfct->create($idFor, $type, $currentUser['id'], $_POST['dateD'], $_POST['dateF'])) ? $success : $danger;
                }
            };

        ?>
            <div class="row block-10">
                <div class="col-md-7">
                    <form action="#" method='post' class="bg-light p-5 contact-form">
                        <?php if ($_GET['type'] == 'Hebergement' || $_GET['type'] == 'Destination') { ?>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?= $For['nom']; ?>" disabled="disabled">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?= $For['localisation']; ?>" disabled="disabled">
                            </div>
                        <?php } elseif ($_GET['type'] == 'Transport') { ?>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?= $For['nom_agence']; ?>" disabled="disabled">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?= $For['nom_transport']; ?>" disabled="disabled">
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?= $For['prix']; ?>" disabled="disabled">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?= $For['type']; ?>" disabled="disabled">
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7" class="form-control" disabled="disabled"><?= $For['description']; ?></textarea>
                        </div>
                        <?php if ($_GET['type'] == 'Hebergement' || $_GET['type'] == 'Transport') { ?>
                            <div class="form-group date-booking">
                                <input type="text" name="dateD" class="form-control checkin_date" placeholder="Date début">
                                <input type="text" name="dateF" class="form-control checkin_date" placeholder="Date fin">
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <button type="submit" name="confirmerReservation" value="<?= $For['id']; ?>" class="btn btn-primary py-3 px-5">Confirmer</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 order-md-last d-flex">
                    <img src="images/<?= $For['image']; ?>" alt="" class="image-booking">
                </div>

            </div>


            <div class="row justify-content-center">
                <a href="mes_reservations.php" class="btn btn-primary py-3 px-5">Consulter Votre Réservations</a>
            </div>
            <div class="row justify-content-center">
            <a href="connexion/logout.php" class="btn btn-danger ml-3">Déconnecter</a>
            </div>


        <?php
        } else {
            echo ('<div class="alert alert-danger" role="alert"><strong>"Erreur"</strong> lors de la terminaison de cette opération, vous devez <a href="connexion/index.php">connecter</a> a votre compte</div>');
        }
        ?>
    </div>
</section>

<?php
require_once('footer.php');
include('loader.php');
?>
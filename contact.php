<?php require_once('head.php'); ?>
<?php require_once('navbar.php'); ?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Contactez-Nous <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Contactez-Nous</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <?php
      $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
      $danger = '<div class="alert alert-danger" role="alert"><strong>' . "Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';
      if (isset($_POST['send'])) {
        echo ($contactfct->create($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['message'])) ? $success : $danger;
      }
    ?>
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-map-marker"></span>
          </div>
          <h3 class="mb-2">Address</h3>
          <p>Msaken</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-phone"></span>
          </div>
          <h3 class="mb-2">Numéro de contact</h3>
          <p><a href="tel://1234567920">+216 25 100 200</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-paper-plane"></span>
          </div>
          <h3 class="mb-2">Email</h3>
          <p><a href="mailto:info@yoursite.com">soussediscovery@gmail.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-globe"></span>
          </div>
          <h3 class="mb-2">Site Web</h3>
          <p><a href="#">soussediscovery.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" method='post' class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" name='nom' class="form-control" required placeholder="votre nom">
          </div>
          <div class="form-group">
            <input type="email" name='email' class="form-control" required placeholder=" Email">
          </div>
          <div class="form-group">
            <input type="text" name='sujet' class="form-control" required placeholder="Sujet">
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" required class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="send" class="btn btn-primary py-3 px-5">Envoyer</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 d-flex">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51824.459215187424!2d10.540951484460436!3d35.72551265962163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fdf5b7aa14bf95%3A0x533a5c49ccdec61a!2sM&#39;saken!5e0!3m2!1sfr!2stn!4v1708768649544!5m2!1sfr!2stn" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<?php require_once('footer.php'); ?>
<?php include('loader.php'); ?>
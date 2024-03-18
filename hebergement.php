<?php require_once('head.php'); 
 require_once('navbar.php'); ?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Hébergement <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Hébergement</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="search-wrap-1 ftco-animate">
          <form action="#" class="search-property-1">
            <div class="row no-gutters">
              <div class="col-lg d-flex">
                <div class="form-group p-4 border-0">
                  <label for="#">Hébergement</label>
                  <div class="form-field">
                    <div class="icon"><span class="fa fa-search"></span></div>
                    <input type="text" class="form-control" placeholder="Recherche Hébergement">
                  </div>
                </div>
              </div>

              <div class="col-lg d-flex">
                <div class="form-group d-flex w-100 border-0">
                  <div class="form-field w-100 align-items-center d-flex">
                    <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <?php
      $all = $hebergementfct->read();
      foreach ($all as $i => $item) :
      ?>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url(images/<?= $item["image"]; ?>);">
              <span class="price"><?= $item["prix"]; ?>/personne</span>
            </a>
            <div class="text p-4">
              <p class="star mb-2">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
              
              <h3><a href="#"><?= $item["nom"]; ?></a></h3>
              <p class="location"><span class="fa fa-map-marker"></span><?= $item["localisation"]; ?></p>
              <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-sun-umbrella"></span><?= $item["type"]; ?></li>
                <li class="mb-0"><a href="booking.php?type=Hebergement&id=<?= $item['id'] ; ?>" class="btn btn-primary  px-2 py-1">Réserver</a></li>
              </ul>
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
          <h2>We Are Pacific A Travel Agency</h2>
          <p>We can manage your dream building A small river named Duden flows by their place</p>
          <p class="mb-0"><a href="contact.php" class="btn btn-primary px-4 py-3">Contactez-Nous</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once('footer.php'); 
include('loader.php'); ?>
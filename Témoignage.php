<?php
require_once('head.php');
require_once('navbar.php');
?>


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/sousse3.jpg');">
  <div class="overlay"></div>
  <div class="container">

    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Témoignage <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Témoignage</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container mt-3">
  <?php
$success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong>.</div>';
$danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération.</div>';

if (isset($_POST['send'])) {
  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $targetPath = "assets/img/"; // Specify the directory where you want to save the uploaded file
    $imageName = $_FILES["image"]["name"];
    $fileExtension = pathinfo($imageName, PATHINFO_EXTENSION);
    $image = $imageName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath . $image)) {
      echo ($feedbackfct->create($_POST['nom'],$_POST['prenom'],$image, $_POST['review'],date('Y-m-d H:i:s'))) ? $success : $danger;
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  } else {
    echo "Error: No file uploaded or an error occurred during upload.";
  }
}
?>
    <div class="row block-9 justify-content-center">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" method='post' class="bg-light p-5 contact-form" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name='nom' class="form-control" required placeholder="Nom">
          </div>
          <div class="form-group">
            <input type="text" name='prenom' class="form-control" required placeholder="Prénom">
          </div>
          <div class="form-group">
            <input type="file" name="image" class="form-control-file" required>
          </div>

          <div class="form-group">
            <textarea name="review" id="" cols="30" rows="7" required class="form-control" placeholder="Témoignage"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" name="send" class="btn btn-primary py-3 px-5">Publier</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once('footer.php'); ?>
<?php include('loader.php'); ?>
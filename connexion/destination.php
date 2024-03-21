<?php require_once('head.php'); ?>
<body class="g-sidenav-show  bg-gray-200">
  <?php require_once('navbarr.php'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <?php
      $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
      $danger = '<div class="alert alert-danger" role="alert"><strong>' . "Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';
     

      if (isset($_POST['createvis'])) {

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
          $targetPath = "../images/";
          $imageName = $_FILES["image"]["name"];
          $fileExtension = pathinfo($imageName, PATHINFO_EXTENSION);
          $image = $imageName;
     
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath . $image)) {
            echo ($destinationfct->create($_POST['nom'], $_POST['localisation'], $_POST['type'], $_POST['prix'], $_POST['description'], $image)) ? $success : $danger;
          } else {
            echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
          }
        } else {
          echo "Erreur : aucun fichier téléchargé ou une erreur s'est produite lors du téléchargement.";
        }
      }
      if (isset($_POST['update'])) {
        $iddestination = $_POST['update'];
        echo ($destinationfct->update($iddestination, $_POST['nom'], $_POST['localisation'], $_POST['type'], $_POST['prix'],$_POST['description'])) ? $success : $danger;
      }
      if (isset($_POST['delete'])) {
        $iddestination = $_POST['delete'];
        echo ($destinationfct->delete($iddestination)) ? $success : $danger;
      }
      ?>
      <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Ajoute d'un visite</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method='post' role="form" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="nom" class="col-form-label">nom d'un visite</label>
                  <input type="text" class="form-control" name="nom" required>
                </div>
                <div class="mb-3">
                  <label for="localisation" class="col-form-label">Localisation</label>
                  <input type="text" class="form-control" name="localisation" required>
                </div>
                <div class="mb-3">
                  <label for="type" class="col-form-label">Type</label>
                  <input type="text" class="form-control" name="type" required>
                </div>
                <div class="mb-3">
                  <label for="prix" class="col-form-label">prix</label>
                  <input type="text" class="form-control" name="prix" required>
                </div>
                
                <div class="mb-3">
                  <label for="description" class="col-form-label">Description</label>
                  <input type="text" class="form-control" name="description" required>
                </div>
                <div class="mb-3">
                  <input type="file" name="image" class="form-control-file" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="createvis" class="btn btn-outline-success">
                  Confirmer
                </button>
                <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">
                  Annuler
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Table Des Visites </h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">visite</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Localisation
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                      prix</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  opacity-7 ps-2">
                      Description</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $all = $destinationfct->read();
                  foreach ($all as $i => $item):
                    ?>
                    <tr>
                      <td>
                        <img src="../images/<?= $item["image"]; ?>" class="avatar avatar-sm rounded-circle me-2"
                          alt="spotify">
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm">
                          <?= $item["nom"]; ?>
                        </h6>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">
                            <?= $item["localisation"]; ?>
                          </span>
                        </div>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">
                          <?= $item["type"]; ?>
                        </span>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">
                          <?= $item["prix"]; ?>
                        </p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">
                          <?= $item["description"]; ?>
                        </p>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal"
                            data-bs-target="#update<?= $item["id"]; ?>">
                            Edit
                          </button>
                          <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal"
                            data-bs-target="#delete<?= $item["id"]; ?>">
                            supprimer
                            </a>
                          </button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <form method="post" class="d-grid gap-2">
            <button type="button" class="btn btn-primary py-3 px-5" data-bs-toggle="modal"
              data-bs-target="#ajouter">ajouter</button>
          </form>
        </div>
      </div>
    <?php
    foreach ($all as $i => $item):
      ?>
      <div class="modal fade" id="update<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Éditer Visite
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="nom" class="col-form-label">Nom Du visite</label>
                  <input type="text" id="nom" name="nom" value="<?= $item["nom"]; ?>" placeholder="<?= $item["nom"]; ?>"
                    required>
                </div>
                <div class="mb-3">
                  <label for="localisation" class="col-form-label">Localisation</label>
                  <input type="text" id="localisation" name="localisation" value="<?= $item["localisation"]; ?>"
                    placeholder="<?= $item["localisation"]; ?>" required>
                </div>
                <div class="mb-3">
                  <label for="type" class="col-form-label">Type</label>
                  <input type="text" id="type" name="type" value="<?= $item["type"]; ?>"
                    placeholder="<?= $item["type"]; ?>" required>
                </div>
                <div class="mb-3">
                  <label for="prix" class="col-form-label">prix</label>
                  <input type="text" id="prix" name="prix" value="<?= $item["prix"]; ?>"
                    placeholder="<?= $item["prix"]; ?>" required>
                </div>
                <div class="mb-3">
                  <label for="description" class="col-form-label">description</label>
                  <input type="text" id="description" name="description" value="<?= $item["description"]; ?>"
                    placeholder="<?= $item["description"]; ?>" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="update" value="<?= $item["id"]; ?>" class="btn btn-outline-success">
                  Confirmer
                </button>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                  Annuler
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="delete<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Supprimer élément
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
              <div class="modal-body">
                <p class="mb-3">
                  Voulez-vous supprimer cette visite ?
                </p>
              </div>
              <div class="modal-footer">
                <button type="submit" name="delete" value="<?= $item["id"]; ?>" class="btn btn-link text-secondary mb-0">
                  Oui
                </button>
                <button type="button" class="btn btn-link text-secondary mb-0" data-bs-dismiss="modal">
                  Non
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
    <?php require_once('footerd.php'); ?>
  </div>
  </main>
  <?php require_once('sidebar.php');
  require_once('script.php'); ?>
</body>
</html>
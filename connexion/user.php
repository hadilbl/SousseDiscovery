<?php require_once('head.php'); ?>

<body class="g-sidenav-show  bg-gray-200">
  <?php require_once('navbarr.php'); ?>

  <div class="container-fluid py-4">
    <div class="row">
      <?php
      $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
      $danger = '<div class="alert alert-danger" role="alert"><strong>' . "Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';

      if (isset($_POST['update'])) {
        $iduser = $_POST['update'];
        echo ($userfct->update($iduser, $_POST['nom'], $_POST['etat'], $_POST['type'])) ? $success : $danger;
      }

      if (isset($_POST['delete'])) {
        $iduser = $_POST['delete'];
        echo ($userfct->delete($iduser)) ? $success : $danger;
      }
      ?>
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Table Des utilisateurs</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Utilisateur</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Adresse</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date de naissance</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">statut</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $all = $userfct->read();
                  foreach ($all as $i => $item) :
                  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="images/<?= $item["image"]; ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $item["nom"]; ?> <?= $item["prenom"]; ?></h6>
                            <p class="text-xs text-secondary mb-0"><?= $item["email"]; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= $item["pays"]; ?></p>
                        <p class="text-xs text-secondary mb-0"><?= $item["ville"]; ?></p>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $item["dateN"]; ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#update<?= $item["id"]; ?>">
                            Edit
                          </button>

                          <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#delete<?= $item["id"]; ?>">
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
        </div>
      </div>
    </div>
    <?php
    foreach ($all as $i => $item) :
    ?>
      <div class="modal fade" id="update<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Éditer Utilisateur
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" class="d-flex flex-column">
              <div class="modal-body row">

                <div class="mb-3">
                  <label for="nom" class="col-form-label col-md-3">Nom D'Utilisateur</label>
                  <input type="text" id="nom" name="nom" class="col-md-8" value="<?= $item["nom"]; ?>" placeholder="<?= $item["nom"]; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="etat" class="col-form-label col-md-3">etat</label>
                  <input type="text" id="etat" name="etat" value="<?= $item["etat"]; ?>" placeholder="<?= $item["etat"]; ?>" required>
                </div>
                
                <div class="mb-3">
                  <label for="type" class="col-form-label col-md-3">type</label>
                  <input type="text" id="type" name="type" value="<?= $item["type"]; ?>" placeholder="<?= $item["type"]; ?>" required>
                </div>


                

              </div>
              <div class="modal-footer">
                <button type="submit" name="update" value="<?= $item["id"]; ?>" class="btn btn-outline-success">
                  Activer
                </button>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                  Annuler
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>


      <div class="modal fade" id="delete<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Supprimer Utilisateur
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
              <div class="modal-body">
                <p class="mb-3">
                  Voulez-vous supprimer cette Utilisateur ?
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
    <?php require_once('footerd.php'); ?>
  </div>
  </main>
  <?php require_once('sidebar.php'); 
  require_once('script.php'); ?>

 
</body>

</html>
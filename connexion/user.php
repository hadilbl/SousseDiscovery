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
        echo ($userfct->update($iduser, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['telephone'], $_POST['dateN'], $_POST['sexe'], $_POST['cin'], $_POST['pays'], $_POST['ville'], $_POST['codePostale'], $_POST['adresse'])) ? $success : $danger;
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
                  <label for="prenom" class="col-form-label col-md-3">prenom</label>
                  <input type="text" id="prenom" name="prenom" value="<?= $item["prenom"]; ?>" placeholder="<?= $item["prenom"]; ?>" required>
                </div>


                <div class="mb-3">
                  <label for="email" class="col-form-label col-md-3">email</label>
                  <input type="text" id="email" name="email" value="<?= $item["email"]; ?>" placeholder="<?= $item["email"]; ?>" required>
                </div>
                <div class="mb-3">
                  <label for="username" class="col-form-label">username</label>
                  <input type="text" id="username" name="username" value="<?= $item["username"]; ?>" placeholder="<?= $item["username"]; ?>" required>
                </div>


                <div class="mb-3">
                  <label for="password" class="col-form-label">password</label>
                  <input type="text" id="password" name="password" value="<?= $item["password"]; ?>" placeholder="<?= $item["password"]; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="telephone" class="col-form-label">telephone</label>
                  <input type="text" id="telephone" name="telephone" value="<?= $item["telephone"]; ?>" placeholder="<?= $item["telephone"]; ?>" required>
                </div>


                <div class="mb-3">
                  <label for="sexe" class="col-form-label">sexe</label>
                  <input type="text" id="sexe" name="sexe" value="<?= $item["sexe"]; ?>" placeholder="<?= $item["sexe"]; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="dateN" class="col-form-label">dateN</label>
                  <input type="text" id="dateN" name="dateN" value="<?= $item["dateN"]; ?>" placeholder="<?= $item["dateN"]; ?>" required>
                </div>


                <div class="mb-3">
                  <label for="cin" class="col-form-label">cin</label>
                  <input type="text" id="cin" name="cin" value="<?= $item["cin"]; ?>" placeholder="<?= $item["cin"]; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="pays" class="col-form-label">pays</label>
                  <input type="text" id="pays" name="pays" value="<?= $item["pays"]; ?>" placeholder="<?= $item["pays"]; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="ville" class="col-form-label">ville</label>
                  <input type="text" id="ville" name="ville" value="<?= $item["ville"]; ?>" placeholder="<?= $item["ville"]; ?>" required>
                </div>


                <div class="mb-3">
                  <label for="codePostale" class="col-form-label">codePostale</label>
                  <input type="text" id="codePostale" name="codePostale" value="<?= $item["codePostale"]; ?>" placeholder="<?= $item["codePostale"]; ?>" required>
                </div>

                <div class="mb-3">
                  <label for="adresse" class="col-form-label">Adresse</label>
                  <input type="text" id="adresse" name="adresse" value="<?= $item["adresse"]; ?>" placeholder="<?= $item["adresse"]; ?>" required>
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


      <div class="modal fade" id="delete<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  Voulez-vous supprimer cette user ?
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
  <?php require_once('sidebar.php'); ?>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
<?php require_once('head.php'); ?>

<body class="g-sidenav-show  bg-gray-200">
  <?php require_once('navbarr.php'); ?>

  <div class="container-fluid py-4">

    <div class="row">
      <?php
      $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
      $danger = '<div class="alert alert-danger" role="alert"><strong>' . "Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';

      if (isset($_POST['delete'])) {
        $idfeedback = $_POST['delete'];
        echo ($feedbackfct->delete($idfeedback)) ? $success : $danger;
      }
      ?>
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Table Des Témoignages </h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">avatar</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">prenom</th>
                    
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Témoignage</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $all = $feedbackfct->read();
                  foreach ($all as $i => $item) :
                  ?>
                    <tr>
                    <td>
                      <img src="../images/<?= $item["avatar"]; ?>" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"><?= $item["nom"]; ?></h6>
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold"><?= $item["prenom"]; ?></span>
                        </div>
                      </td>

                     

                      <td>
                        <span class="text-xs font-weight-bold"><?= $item["Commentaire"]; ?></span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold"><?= $item["date"]; ?></span>
                      </td>

                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#voir<?= $item["id"]; ?>">
                            Voir
                          </button>
                          <button type="button" class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#delete<?= $item["id"]; ?>">
                            supprimer
                            </a>
                          </button>
                      </td>
                    </tr>

                    <div class="modal fade" id="voir<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                              Consulter Témoignage
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="" method="POST">
                            <div class="modal-body">
                              <div class="mb-3">
                                <label for="nom" class="col-form-label">Nom:</label>
                                <p><?= $item["nom"]; ?></p>
                              </div>

                              <div class="mb-3">
                                <label for="localisation" class="col-form-label">prenom:</label>
                                <p><?= $item["prenom"]; ?></p>
                              </div>

                              <div class="mb-3">
                                <label for="type" class="col-form-label">image:</label>
                                <p><?= $item["avatar"]; ?></p>
                              </div>
                              <div class="mb-3">
                                <label for="commentaire" class="col-form-label">Témoignage:</label>
                                <p><?= $item["Commentaire"]; ?></p>
                              </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                Fermer
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  <?php
                  foreach ($all as $i => $item) :
                  ?>
                    <div class="modal fade" id="delete<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                              Supprimer Témoignage
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="" method="POST">
                            <div class="modal-body">
                              <p class="mb-3">
                                Voulez-vous supprimer cette Témoignage ?
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
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require_once('footerd.php'); ?>
  </div>
  </main>
  <?php require_once('sidebar.php'); 
   require_once('script.php'); ?>

</body>

</html>
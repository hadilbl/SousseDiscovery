<?php require_once('head.php'); ?>

<body class="g-sidenav-show  bg-gray-200">
<?php require_once('navbarr.php'); ?>

    <div class="container-fluid py-4">
     
      <div class="row">
      <?php
            $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
            $danger = '<div class="alert alert-danger" role="alert"><strong>' ."Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';
 
        if (isset($_POST['update'])) {
                $idreservation = $_POST['update'];
                echo ($reservationfct->update($idreservation,$_POST['idfor'], $_POST['type'],$_POST['datereservation'],$_POST['periode'] )) ? $success : $danger;
            }
            
            if (isset($_POST['delete'])) {
                $idreservation = $_POST['delete'];
                echo ($reservationfct->delete($idreservation)) ? $success : $danger;
            }
            ?>
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Table Des reservations </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">idfor</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">id client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Date Début</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date Fin</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Date Réservation</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $all = $reservationfct->read();
                        foreach ($all as $i => $item):
                  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                         
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"><?= $item["idfor"]; ?></h6>
                          </div>
                          
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold"><?= $item["type"]; ?></span>
                          
                        </div>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold"><?= $item["idClient"]; ?></span>
                      </td>

                      <td>
                        <p class="text-sm font-weight-bold mb-0"><?= $item["dateD"]; ?></p>
                      </td>
                      
                      <td>
                        <span class="text-xs font-weight-bold"><?= $item["dateF"]; ?></span>
                      </td>

                      <td>
                        <p class="text-sm font-weight-bold mb-0"><?= $item["dateReservation"]; ?></p>
                      </td>
                    
                      <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0">
                      <button type="button" class="btn btn-link text-secondary mb-0"
                                            data-bs-toggle="modal" data-bs-target="#update<?= $item["id"]; ?>">
                          confirmer
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
            foreach ($all as $i => $item):
                ?>
                


      <div class="modal fade" id="delete<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    Supprimer Réservation
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <p class="mb-3">
                                        Voulez-vous supprimer cette reservation ?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="delete" value="<?= $item["id"]; ?>"
                                    class="btn btn-link text-secondary mb-0">
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

<?php require_once('head.php'); ?>

<body class="g-sidenav-show  bg-gray-200">
<?php require_once('navbarr.php'); ?>

    <div class="container-fluid py-4">
     
      <div class="row">
      <?php
            $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
            $danger = '<div class="alert alert-danger" role="alert"><strong>' ."Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';
 
            if (isset($_POST['createheb'])) {
              if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
                $targetPath = "assets/img/"; // Specify the directory where you want to save the uploaded file
                $imageName = $_FILES["image"]["name"];
                $fileExtension = pathinfo($imageName, PATHINFO_EXTENSION);
                $image = $imageName;
            
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath . $image)) {
                
                  echo ($hebergementfct->create($_POST['nom'],$_POST['localisation'], $_POST['prix'],$_POST['type'],$_POST['description'],$image)) ? $success : $danger;
                } else {
                  echo "Sorry, there was an error uploading your file.";
                }
              } else {
                echo "Error: No file uploaded or an error occurred during upload.";
              }
            }
        if (isset($_POST['update'])) {
                $idhebergement = $_POST['update'];
                echo ($hebergementfct->update($idhebergement,$_POST['nom'], $_POST['localisation'],$_POST['prix'],$_POST['type'],$_POST['description'] )) ? $success : $danger;
            }
            
            if (isset($_POST['delete'])) {
                $idhebergement = $_POST['delete'];
                echo ($hebergementfct->delete($idhebergement)) ? $success : $danger;
            }
            ?>
             <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Hébergement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nom" class="col-form-label">nom d'hébergement</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                      
                        <div class="mb-3">
                            <label for="localisation" class="col-form-label">Localisation</label>
                            <input type="text" class="form-control" name="localisation" required>
                        </div>
                        <div class="mb-3">
                            <label for="prix" class="col-form-label">prix</label>
                            <input type="text" class="form-control" name="prix" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Type</label>
                            <input type="text" class="form-control" name="type" required>
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
                        <button type="submit" name="createheb" class="btn btn-outline-success">
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
                <h6 class="text-white text-capitalize ps-3">Table Des hébergements </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hebergement</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Localisation</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Type</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Description</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $all = $hebergementfct->read();
                        foreach ($all as $i => $item):
                  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../images/<?= $item["image"]; ?>" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"><?= $item["nom"]; ?></h6>
                          </div>
                          
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold"><?= $item["localisation"]; ?></span>
                          
                        </div>
                      </td>

                      <td>
                        <p class="text-sm font-weight-bold mb-0"><?= $item["prix"]; ?></p>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold"><?= $item["type"]; ?></span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $item["description"]; ?></span>
                      </td>

                      <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0">
                      <button type="button" class="btn btn-link text-secondary mb-0"
                                            data-bs-toggle="modal" data-bs-target="#update<?= $item["id"]; ?>">
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
            <form method="post" class="d-grid gap-2">
                    <button type="button"  class="btn btn-primary py-3 px-5" data-bs-toggle="modal" data-bs-target="#ajouter">Ajouter</button>
            </form>
          </div>
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
                                    Éditer élément
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nom" class="col-form-label">Nom D'hébergement</label>
                                        <input type="text" id="nom" name="nom" value="<?= $item["nom"]; ?>"
                                            placeholder="<?= $item["nom"]; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="localisation" class="col-form-label">Localisation</label>
                                        <input type="text" id="localisation" name="localisation" value="<?= $item["localisation"]; ?>"
                                            placeholder="<?= $item["localisation"]; ?>" required>
                                    </div>
                                 
                                  
                                    <div class="mb-3">
                                        <label for="prix" class="col-form-label">prix</label>
                                        <input type="text" id="prix" name="prix" value="<?= $item["prix"]; ?>"
                                            placeholder="<?= $item["prix"]; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="type" class="col-form-label">Type</label>
                                        <input type="text" id="type" name="type" value="<?= $item["type"]; ?>"
                                            placeholder="<?= $item["type"]; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="col-form-label">Description</label>
                                        <input type="text" id="type" name="type" value="<?= $item["description"]; ?>"
                                            placeholder="<?= $item["type"]; ?>" required>
                                    </div>
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="update" value="<?= $item["id"]; ?>"
                                        class="btn btn-outline-success">
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
                                        Voulez-vous supprimer cette hebergement ?
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
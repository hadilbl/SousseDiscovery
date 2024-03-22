<?php
require_once('head.php');

require_once('navbar.php');

if (isset($_POST['connect'])) {
  $currentUser = $scanne->getCnxCpt($_POST['username'], $_POST['password']);
  if ($currentUser && is_array($currentUser)) {
      if ($currentUser['etat'] == 1) {
          $_SESSION['id'] = $currentUser['id'];
          if ($currentUser['type'] == 1) {
              echo '<script>document.location.href="dashboard.php"</script>';
          } else {
              echo '<script>document.location.href="../"</script>';
          }
      } else {
          $error_message = "Compte inactif ou suspendu.";
      }
  } else {
      $error_message = "Nom d'utilisateur et/ou mot de passe invalide.";
  }
}
?>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <form action="" method="POST">

      <div class="page-header align-items-start min-vh-100" style="background-image: url('images/sousse3.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto ">
          <div class="row mt-7">

            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Connexion</h4>
                    <div class="row mt-3">
                      <div class="col-2 text-center ms-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-facebook text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center px-1">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-instagram text-white text-lg"></i>
                        </a>
                      </div>
                      <div class="col-2 text-center me-auto">
                        <a class="btn btn-link px-3" href="javascript:;">
                          <i class="fa fa-google text-white text-lg"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                            <form action="" method="POST">
                                <?php if(isset($error_message)) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php echo $error_message; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                    <label class="form-check-label" for="rememberMe">Souviens Moi</label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn bg-gradient-primary btn-block text-white mb-2" name="connect">Se Connecter</button>
                                </div>
                                <div class="text-center">
                                    <p class="text-sm mt-3">Vous n'avez pas de compte ? <a href="sign-up.php" class="font-weight-bold text-primary">Inscription</a></p>
                                </div>
                            </form>
                        </div>
              </div>
            </div>
          </div>
        </div>
        <?php require_once('footer.php'); ?>
      </div>
    </form>
  </main>
  <?php require_once('script.php'); ?>
</body>

</html>
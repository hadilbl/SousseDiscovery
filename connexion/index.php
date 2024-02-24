<?php
require_once('head.php');

require_once('navbar.php');

session_start();

if (isset($_POST['connect'])) {
    $resultat = $scanne->getCnxCpt($_POST['username'], $_POST['password']);
    if ($resultat) {
        // Stockez le message de succès dans une variable de session
        $_SESSION['success_message'] = 'Connexion réussie!';
        header("Location: dashboard.php");
        exit(); // Assurez-vous de sortir après la redirection
    } else {
        // Stockez le message d'erreur dans une variable de session
        $_SESSION['error_message'] = 'Username or password incorrect';
    }
}
?>
<body class="bg-gray-200">
  <main class="main-content  mt-0">
  <form action="" method="POST">
  
    <div class="page-header align-items-start min-vh-100" style="background-image: url('images/sousse3.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
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
                <form role="form" class="text-start">
                <?php
                if (isset($_SESSION['error_message'])) {
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
                    unset($_SESSION['error_message']); // Effacez le message d'erreur après l'affichage
                }
                ?>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label"></label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" name="connect">Sign in</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
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
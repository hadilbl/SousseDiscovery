<?php require_once('head.php'); ?>
<?php require_once("connexion.php"); ?>

<body class="">
<?php require_once('navbar.php'); ?>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">

          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('images/sousse.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <table >
                  <tr>
                    <th colspan="2">
                    <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
              <?php
            $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
            $danger = '<div class="alert alert-danger" role="alert"><strong>' ."Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';
        

     if (isset($_POST['signup'])) {
        echo ($signupfct->create($_POST['name'],$_POST['firstname'],$_POST['sex'],$_POST['username'],$_POST['password'],$_POST['cin'],$_POST['phone'],$_POST['email'],$_POST['address'])) ? $success : $danger; }
        ?>
                </div>
                    </th>  
                  </tr>
                <div class="card-body">
                  <form  method="post" role="form">
                <tr>
                <td>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="text" class="form-control" name="name" placeholder="name" required>
                    </div>
                </td>
                <td>
                  <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="text" class="form-control" name="firstname" placeholder="firstname" required>
                    </div>
                </td>
                    </tr>
                  <tr>
                  <div class="input-group input-group-outline mb-3">
                    <td>
                  
                  <label for="sex">sex</label>
                </td>
                <td>
                <select name="sex"  required>
                <option value="Femme">Femme</option>
                <option value="Homme">Homme</option>
              </select>
                </td>
                </div>
              </tr>

                <tr>
                  <td>
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                      <input type="text" class="form-control" name="username" placeholder="username" required>
                    </div>
                  </td>
                  <td>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                  </td>
                </tr>    
                    <tr>
                      <td>
                        <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                  </td>
                  <td>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="text" class="form-control" name="cin" placeholder="CIN" required>
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="text" class="form-control" name="phone" placeholder="phone" required>
                    </div>
                  </td>
                  <td>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="text" class="form-control" name="address" placeholder="address" required>
                    </div>
                  </td>
                  </tr>
                    </table>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked required>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="signup">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
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
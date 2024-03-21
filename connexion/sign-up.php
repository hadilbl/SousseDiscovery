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
                <table>
                  <tr>
                    <th colspan="2">
                      <div class="card-header">
                        <h4 class="font-weight-bolder">Inscription</h4>
                        <p class="mb-0">Entrez votre email et votre mot de passe pour vous inscrire</p>
                        <?php
                        $success = '<div class="alert alert-success" role="alert">' . "Opération terminée avec" . ' <strong>' . "succès" . '</strong>.</div>';
                        $danger = '<div class="alert alert-danger" role="alert"><strong>' . "Erreur" . '</strong> ' . "lors de la terminaison de cette opération." . '</div>';


                        if (isset($_POST['signup'])) {
                          echo ($signupfct->create(
                            $_POST['nom'],
                            $_POST['prenom'],
                            $_POST['email'],
                            $_POST['username'],
                            $_POST['password'],
                            $_POST['telephone'],
                            $_POST['sexe'],
                            $_POST['dateN'],
                            $_POST['cin'],
                            $_POST['pays'],
                            $_POST['ville'],
                            $_POST['codePostale'],
                            $_POST['addresse']
                          )) ? $success : $danger;
                        }
                        ?>
                      </div>
                    </th>
                  </tr>
                  <div class="card-body">
                    <form method="post" role="form">
                      <tr>
                        <td>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" name="nom" placeholder="nom" required>
                          </div>
                        </td>
                        <td>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" name="prenom" placeholder="prenom" required>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                          </div>
                        </td>
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
                        <div class="input-group input-group-outline mb-3">
                          <td>
                            <div class="input-group input-group-outline mb-3">
                              <label class="form-label"></label>
                              <input type="text" class="form-control" name="telephone" placeholder="telephone" required>
                            </div>
                          </td>
                          <td>
                            <label for="sexe">sexe:</label>
                            <select name="sexe" required>
                              <option value="Femme">Femme</option>
                              <option value="Homme">Homme</option>
                            </select>
                          </td>

                        </div>
                      </tr>
                      <tr>
                        <td>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label date-booking"></label>
                            <input type="date" class="form-control checkin_date" name="dateN" placeholder="date" required>
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
                      <tr>
                        <td>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" name="pays" placeholder="pays" required>
                          </div>
                        </td>
                        <td>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" name="ville" placeholder="ville" required>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" name="codePostale" placeholder="codePostale" required>
                          </div>
                        </td>


                        <td>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" name="addresse" placeholder="Addresse" required>
                          </div>
                        </td>
                      </tr>
                </table>
                <div class="form-check form-check-info text-start ps-0">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked required>
                  <label class="form-check-label" for="flexCheckDefault">
                    J'accepte <a href="javascript:;" class="text-dark font-weight-bolder">Les Termes Et Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="signup">S'inscrire</button>
                </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-2 text-sm mx-auto">
                  Vous avez déjà un compte?
                  <a href="index.php" class="text-primary text-gradient font-weight-bold">Se connecter</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>
  <?php require_once('script.php'); ?>
</body>

</html>
<?php require_once('head.php'); ?>

<body class="g-sidenav-show  bg-gray-200">
  <?php require_once('navbarr.php'); ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Clients</p>
              <h4 class="mb-0">
                <?php echo $userfct->getCountuser(); ?> </h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">

        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="fa fa-map"></i>
            </div>

            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Visites</p>
              <h4 class="mb-0"><?php echo $destinationfct->getCountdestination(); ?></h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="fa fa-hotel"></i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Hébergements</p>
              <h4 class="mb-0"><?php echo $hebergementfct->getCounthebergement(); ?></h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
        </div>
      </div>

      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="fa fa-taxi"></i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Transports</p>
              <h4 class="mb-0"><?php echo $transportfct->getCounttransport(); ?></h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">

        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Réservations</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-check text-info" aria-hidden="true"></i>
                  <span class="font-weight-bold ms-1"><?php echo $reservationfct->getCountreservation(); ?> Cette Année 
                </p>
              </div>
              
              <div class="col-lg-6 col-5 my-auto text-end">
               
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">reservation</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Année</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">statut</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
            $all = $reservationfct->read2();
            foreach ($all as $i => $item):
         ?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                       
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $item["type"]; ?></h6>
                        </div>
                      </div>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"><?= $item["dateReservation"]; ?> </span>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold"> <?php if ($item["etat"] == 0) : ?>
                          <span class="badge badge-sm bg-gradient-danger">invalider</span>
                        <?php else : ?>
                          <span class="badge badge-sm bg-gradient-success">valider</span>
                        <?php endif; ?></span>
                          </div>
                        </div>
                       
                      </div>
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
    <?php require_once('footerd.php'); ?>
  </div>
  </main>
  <?php require_once('sidebar.php');
  require_once('scriptdash.php');
  require_once('script.php'); ?>
</body>

</html>
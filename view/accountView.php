<?php include "view/template/header.php"; ?>

<div class="container">
      <div class="row mt-5 mb-3 row ">
        <div class="col-md d-flex justify-content-between">
          <h2>Détails du compte N°<?php echo $account->getNumber(); ?></h2>
          <div class="">
            <a class="btn btn-primary" <?php setHref("accounts", ["id"=>$account->getId()]); //user  ?> >Liste des comptes</a> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8 border rounded py-3">
          <h5 class="font-weight-bold">Dernières transactions</h5>
          <div class="table-responsive">
            <table class="table table-striped table-hover" style="margin-bottom: 0px; width: 100%; max-width: 100%;">
              <tbody>
                <?php
                if (!is_null($transactions)) {
                  // On affiche chaque entrée une à une
                  foreach ($transactions as $key => $transaction) {
                    //Formatage de la date en français
                    $datefmt = new IntlDateFormatter('fr_FR', NULL, NULL, NULL, NULL, 'dd MMM yyyy');
                    // pour une date qui vient d'un champ DATE(TIME) de MySQL
                    $date1 = date_create($transaction->getDate());
                ?>
                <tr>
                  <td><b class="font-weight-normal" ><?php echo $datefmt->format($date1); ?></b></td>
                  <td><b class="font-weight-normal text-primary"><?php echo $transaction->getName(); ?></b><br></td>
                  <td><b class="font-weight-normal"><?php echo $transaction->getAmount(); ?>&nbsp;EUR</b></td>
                </tr>
                <?php
                  }
                }else { ?>
                  <tr>
                    <td colspan="3" class="text-center">Aucun résultat</td>
                  </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
        </div>
        <div class="col-4">
          <div class="border rounded mb-3">
              <div class="p-3">
                <h4>Asma Outougane<?php //echo $user->getName()."&nbsp;".$user->getFirstName(); ?></h4>
                <p class="">Compte N°<?php echo $account->getNumber()." - ".$account->getName(); ?></p>
                <?php if ($account->getSum() < 0): ?>
                  <div class="alert alert-danger m-0" role="alert">
                    <p class="text-right m-0"><span class="h1"><?php echo $account->getSum()."€"; ?></span></p>
                  </div>
                  <?php else: ?>
                    <div class="alert m-0" role="alert">
                      <p class="text-right m-0"><span class="text-muted mr-2">Disponible</span><span class="h1"><?php echo $account->getSum()."€"; ?></span></p>
                    </div>
                <?php endif; ?>


              </div>
          </div>
          <?php include "view/feature/operationsFeature.php"; ?>
        </div>
      </div>
</div>

<?php include "view/template/footer.php"; ?>

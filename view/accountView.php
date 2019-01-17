<?php include "view/template/header.php"; ?>

<div class="container">
  <div class="d-flex flex-column my-3">
      <div class="d-flex justify-content-between mb-3">
            <h2>Détails du compte N°<?php echo $account->getNumber(); ?></h2>
      </div>
      <div class="row">
        <div class="col-8 border rounded py-3">
          <h5 class="font-weight-bold">Dernières transactions</h5>
          <div class="table-responsive">
            <table class="table table-striped table-hover" style="margin-bottom: 0px; width: 100%; max-width: 100%;">
              <tbody>
                <tr>
                  <td><b class="font-weight-normal" >15 janv. 2019</b></td>
                  <td><b class="font-weight-normal text-primary">Retrait d'argent</b><br></td>
                  <td><b class="font-weight-normal">50&nbsp;EUR</b></td>
                </tr>
                <tr >
                  <td><b class="font-weight-normal">10 janv. 2019</b></td>
                  <td><b class="font-weight-normal text-primary">Virement à maman</b></td>
                  <td><b class="font-weight-normal">15&nbsp;EUR</b></td>
                </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="col-4">
          <div class="border rounded mb-3">
              <div class="p-3">
                <h4>Asma Outougane<?php //echo $user->getName()."&nbsp;".$user->getFirstName(); ?></h4>
                <p class="">Compte N°<?php echo $account->getNumber()." - ".$account->getName(); ?></p>
                <p class="text-right"><span class="text-muted mr-2">Disponible</span><span class="h1"><?php echo $account->getSum()."€"; ?></span></p>
              </div>
          </div>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between">
                <h6 class="my-0"><a <?php setHref(""); ?>>Dépôt</a></h6>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <h6 class="my-0"><a <?php setHref("account/debit", ["id"=>$account->getId()]); ?>>Retrait</a></h6>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <h6 class="my-0"><a <?php setHref(""); ?>>Virement</a></h6>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
                <h6 class="my-0"><a <?php setHref(""); ?>>Suppression</a></h6>
            </li>
          </ul>
        </div>
      </div>

  </div>
</div>

<?php include "view/template/footer.php"; ?>

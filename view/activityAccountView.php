<?php include "view/template/header.php"; ?>

<div class="container">
    <div class="row mt-5 mb-3 row ">
      <div class="col-md d-flex justify-content-between">
        <h2>Opération sur le compte N°<?php echo $account->getNumber(); ?></h2>
        <a class="btn btn-primary" <?php setHref("myAccount", ["id"=>$account->getId()]); ?> >Retour au Compte</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="border rounded p-3">
          <h5><?php echo ucfirst($operation); ?> </h5>
          <?php include "view/form/accountForm.php"; ?>
        </div>
      </div>
      <div class="col-md-4">
        <?php include "view/feature/operationsFeature.php"; ?>
      </div>
    </div>
</div>

<?php include "view/template/footer.php"; ?>

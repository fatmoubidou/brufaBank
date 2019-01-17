<?php include "view/template/header.php"; ?>

<div class="container">

    <div class="row my-5">
      <div class="col-md-8">
        <div class="border rounded p-3">
          <h5>Opération de <?php echo $operation; ?> sur le compte N° <?php echo $account->getNumber(); ?></h5>
          <?php include "view/form/accountForm.php"; ?>
        </div>
      </div>
      <div class="col-md-4">
        <?php include "view/feature/operationsFeature.php"; ?>
      </div>
    </div>
</div>

<?php include "view/template/footer.php"; ?>

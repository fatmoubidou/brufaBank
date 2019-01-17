<form action="" method="post">
    <div class="">
      <div class="mb-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Intitulé</span>
            </div>
            <input type="text" class="form-control" name="name" placeholder="Intitulé">
          </div>
        </div>
    </div>
    <div class="row">
      <!-- <div class="col-md-6 mb-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Date</span>
          </div>
          <input type="text" class="form-control" name="date" placeholder="Date" value="<?php //echo date("d/m/Y"); ?>" disabled >
        </div>
        </div> -->
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Montant</span>
            </div>
            <input type="number" class="form-control" name="amount" placeholder="Montant" >
          </div>
        </div>
    </div>
    <div class="">
      <input type="hidden" name="idAccount" value="<?php echo $account->getId(); ?> " >
      <input type="hidden" name="operation" value="<?php echo $operation; ?> " >
    </div>
    <div class="text-right">
      <button type="submit" class="btn btn-primary w-25">Valider</button>
    </div>

</form>




<!-- <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Type d'opération</span>
  </div>
  <select class="form-control" name="operation">
    <option value="">Selectionnez...</option>
    <option value="Dépôt">Dépôt</option>
    <option value="Retrait">Retrait</option>
    <option value="Virement">Virement</option>
  </select>
</div> -->

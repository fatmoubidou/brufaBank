<form action="" method="post" class="needs-validation" novalidate>
    <div class="">
      <div class="mb-3">
          <div class="input-group">
            <div class="input-group-prepend" style="width: 22%;">
              <span class="input-group-text w-100">Intitulé</span>
            </div>
            <input type="text" class="form-control" name="name" placeholder="Intitulé" required>
            <div class="invalid-feedback">Veuillez saisir un intitulé d'opération.</div>
          </div>
        </div>
    </div>
    <?php if ($operation === "virement"): ?>
      <div class="">
        <div class="mb-3">
            <div class="input-group">
              <div class="input-group-prepend" style="width: 22%;">
                <span class="input-group-text w-100">Compte à créditer</span>
              </div>
              <input type="text" class="form-control" name="idAccountTransfer" placeholder="N° du compte à créditer" required>
              <div class="invalid-feedback">Veuillez saisir un N° de compte à créditer.</div>
            </div>
          </div>
      </div>
    <?php endif; ?>
    <div class="">
        <div class="mb-3">
          <div class="input-group">
            <div class="input-group-prepend" style="width: 22%;">
              <span class="input-group-text w-100">Montant</span>
            </div>
            <input type="number" class="form-control" name="amount" placeholder="en €" required>
            <div class="invalid-feedback">Veuillez saisir un montant.</div>
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

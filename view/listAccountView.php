<?php include "view/template/header.php"; ?>

<div class="container">
  <div class="d-flex flex-column my-3">
      <div class="d-flex justify-content-between mb-3">
            <h2>Liste de mes comptes</h2>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
                <thead class="thead-light">
                  <tr class="text-center d-flex">
                    <th class="col-4 text-left">Intitulé du compte</th>
                    <th class="col-4 d-none d-md-table-cell">N° de compte</th>
                    <th class="col-4 d-none d-lg-table-cell">Montant</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
									if (!is_null($accounts)) {
                    // On affiche chaque entrée une à une
                    foreach ($accounts as $key => $account) {
                  ?>
                  <tr class="text-center d-flex">
                    <td class="col-4 text-left"><?php echo $account->getName(); ?></td>
                    <td class="col-4 d-none d-md-table-cell"><?php echo $account->getNumber(); ?></td>
                    <td class="col-4 d-none d-lg-table-cell"><?php echo $account->getSum(); ?></td>
                  </tr>
                  <?php
                    }
									}else { ?>
										<tr>
											<td colspan="4" class="text-center">Aucun résultat</td>
										</tr>
									<?php } ?>
              </tbody>
            </table>
      </div>
  </div>
</div>


<!-- <?php //echo $message; ?> -->
<!-- <a <?php //setHref("login") ?>>Autre page</a> -->

<?php include "view/template/footer.php"; ?>

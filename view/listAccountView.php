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
                    <th class="col-2 d-none d-lg-table-cell">Montant</th>
                    <th class="col-2 d-none d-lg-table-cell">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
									if (!is_null($accounts)) {
                    // On affiche chaque entrée une à une
                    foreach ($accounts as $key => $account) {
                  ?>
                  <tr class="text-center d-flex">

                    <td class="col-4 text-left"><a <?php setHref("myAccount", ["id"=>$account->getId()]); ?> ><?php echo $account->getName(); ?></a></td>
                    <td class="col-4 d-none d-md-table-cell"><?php echo $account->getNumber(); ?></td>
                    <td class="col-2 d-none d-lg-table-cell"><?php echo $account->getSum(); ?></td>
                    <td class="col-2 d-none d-lg-table-cell"><a <?php setHref("account/delete", ["id"=>$account->getId()]); ?>><i class="fas fa-times-circle"></i></a> </td>
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

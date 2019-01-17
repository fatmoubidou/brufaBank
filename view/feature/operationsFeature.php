<ul class="list-group mb-3">
  <li class="list-group-item">
      <h4 class="my-0">Vos opérations</h4>
  </li>
  <li class="list-group-item">
      <h6 class="my-0"><a <?php setHref("account/credit", ["id"=>$account->getId(), "o"=>"credit"]); ?>>Dépôt</a></h6>
  </li>
  <li class="list-group-item">
      <h6 class="my-0"><a <?php setHref("account/debit", ["id"=>$account->getId(), "o"=>"debit"]); ?>>Retrait</a></h6>
  </li>
  <li class="list-group-item">
      <h6 class="my-0"><a <?php setHref("account/transfer", ["id"=>$account->getId(), "o"=>"transfer"]); ?>>Virement</a></h6>
  </li>
  <li class="list-group-item bg-light">
      <h6 class="my-0"><a <?php setHref(""); ?>>Suppression</a></h6>
  </li>
</ul>

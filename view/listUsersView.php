<?php
include "view/template/header.php";
 ?>

<main>
  <?php session_start(); ?>
  <section class="container">
    <table class="table table-hover">
      <thead class="thead-light">
        <tr class="text-center">
          <th><a <?php setHref("createUser"); ?> class="btn btn-primary">Create User</a></th>
        </tr>
        <tr class="text-center display-6">
          <th scope="col" class="col-3 d-none d-md-table-cell">First Name</th>
          <th scope="col" class="col-2 d-none d-md-table-cell">Name</th>
          <th scope="col" class="col-1">New Account</th>
          <th scope="col" class="col-1">Supprimer</th>
        </tr>
      </thead>
      <tbody>
<?php foreach ($users as $key => $user)
 {
  ?>
  <tr class="text-center display-5">
    <th scope="row" class="hidden text-left"><?php echo $user->getId(); ?></th>
    <td class="d-none d-md-table-cell"><?php echo $user->getFirstName(); ?></td>
    <td class="d-none d-md-table-cell"><?php echo $user->getName(); ?></td>
    <td><a <?php setHref("addAccount", ["id"=>$user->getId()])?><i class="fas fa-edit fa-2x"></i></a></td>
    <td><a <?php setHref("delUser", ["id"=>$user->getId()])?><i class="fas fa-times fa-2x"></i></a></td>
  </tr>
  <?php
  }
  ?>
</tbody>
</table>
</section>
</main>

 <?php
include "view/template/footer.php";
  ?>

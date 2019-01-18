<?php
include "view/template/header.php";
include "model/userManager.php";
 ?>

<?php foreach ($data as $key => $value) {
  ?>
  <tr class="">
   <td class="d-none d-md-table-cell text-center"><?php echo $value["firstName"]; ?></td>
   <td class="d-none d-md-table-cell text-center"><?php echo $value["name"]; ?></td>
   <td><?php echo $value["address"]; ?></td>
   <td><?php echo $value["status"]; ?></td>
  </tr>
<?php } ?>



 <?php
include "view/template/footer.php";
  ?>

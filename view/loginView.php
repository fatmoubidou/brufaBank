 <?php
  include "view/template/header.php";
 ?>
 <main>
   <?php session_start(); ?>
   <?php include "view/form/loginForm.php"; ?>
   <?php var_dump($user); ?>
 </main>
 <?php include "view/template/footer.php"; ?>

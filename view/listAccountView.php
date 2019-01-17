<?php include "view/template/header.php"; ?>

<?php echo $message; ?>
<a <?php setHref("login") ?>>Autre page</a>
<?php include "view/form/loginForm.php"; ?>
<?php include "view/form/addUserForm.php"; ?>
<?php include "view/template/footer.php"; ?>

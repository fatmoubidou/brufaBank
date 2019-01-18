<?php
include "model/userManager.php";

// function initializeUserSession($user) {
//   session_start();
//   $_SESSION["user"] = $user;
// }

function getUsers ($data) {
  require "view/listUsersView.php";
}

 ?>

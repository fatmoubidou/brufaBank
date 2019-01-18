<?php
require "model/dataBase.php";
require "model/userManager.php";
require "model/entity/user.php";

  class userController {

   public function login() {
    $manager = new userManager();
    $user = new user($_POST);
    if (isset($_POST)) {
      if (!empty($_POST)) {
            if($user = $manager->getUser($user)) {
              initializeUserSession($user);
              if ($_SESSION["user"]->getStatus() === "admin") {
                redirectTo("listUsers");
              }else {
                redirectTo("accounts",["id"=>$_SESSION["user"]->getId()]);
              }
             }
             else {
               redirectTo("");
             }
            }
          }
        require "view/loginView.php";
      }

   public function deconnexion(){
     logout();
     redirectTo("login");
   }


  }

?>

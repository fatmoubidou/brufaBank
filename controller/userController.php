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
                redirectTo("accounts");
              }
             }
             else {
               redirectTo("");
             }
            }
          }
        require "view/loginView.php";
      }

      public function listUsers() {
        $userManager = new userManager();
        $users = $userManager->getUsers();
        // Affichage users
        require "view/listUsersView.php";
      }

      public function createUser() {
        $userManager = new userManager();
        $user = new user($_POST);
        $createUser = $userManager->addUser($user);
        require "view/createUserView.php";
      }

      // public function delUser() {
      //   $userManager = new userManager();
      //   $user = new user($_GET["id"]);
      //   $delUser = $userManager->delUser($_GET["id"]);
      //   // require "view/delUserView.php";
      // }

      public function delUser(){
         $userManager = new userManager();
         $user = new user($_GET["id"]);
         $id = intval($_GET["id"]);
         $delUser = $userManager->delUser($id);
         // Affichage liste des comptes
         require "view/createUserView.php";
       }


      public function addAccountUser() {
        $userManager = new userManager();
        // $user = new user($_GET["id"]);
        // $add = $userManager->addAccount($_GET["id"]);
        require "view/newAccountUserView.php";
      }

    }

?>

<?php
require "model/dataBase.php";
require "model/entity/account.php";
require "model/accountManager.php";
/**
 *
 */
class accountController
{
  public function listAccount() {
    $manager = new accountManager();
    $idUser = intval($_GET["id"]);
    //recuperation de la liste de tous les comptes dans la bdd
    $accounts = $manager->getList($idUser);
    // Affichage liste des comptes
    require "view/listAccountView.php";
    }


  public function detailAccount() {
    $manager = new accountManager();
    $id = intval($_GET["id"]);
    //recuperation de la liste de tous les comptes dans la bdd
    $account = $manager->get($id);
    // Affichage liste des comptes
    require "view/accountView.php";
    }


  public function debitAccount(){
    $manager = new accountManager();
    $id = intval($_GET["id"]);
    if (!empty($_POST)) {
      if ($manager->update($id)) {
        redirectTo("accounts?id=1");
      }
    }
    // Affichage du form de retrait d'argent
    require "view/activityAccountView.php";
    }

  public function deleteAccount(){
    $manager = new accountManager();
    $id = intval($_GET["id"]);
    if ($manager->delete($id)) {
      redirectTo("accounts?id=1");
    }
    // Affichage liste des comptes
    require "view/listAccountView.php";
  }



}


 ?>

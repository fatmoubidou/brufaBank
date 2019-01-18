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
    //recuperation de la liste de tous les comptes dans la bdd
    $accounts = $manager->getList(1);
    // Affichage liste des comptes
    require "view/listAccountView.php";
    }
}


 ?>

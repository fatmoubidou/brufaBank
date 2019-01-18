<?php
require "model/dataBase.php";
require "model/entity/account.php";
require "model/accountManager.php";
require "model/entity/transaction.php";
require "model/transactionManager.php";
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

    $transactionManager = new transactionManager();
    $transactions = $transactionManager->getList($account->getId());
    // Affichage liste des comptes
    require "view/accountView.php";
    }


  public function debitAccount(){
    $accountManager = new accountManager();
    $id = intval($_GET["id"]);
    $account = $accountManager->get($id);
    $operation = "retrait";

    if (isset($_POST) && !empty($_POST)) {
      $newSum = $account->getSum() - $_POST["amount"];
      $account->setSum($newSum);
      if ($accountManager->update($account)) {
        $transactionManager = new transactionManager();
        $transaction = new transaction($_POST);
        if ($transactionManager->add($transaction)) {
          redirectTo("myAccount?id=".$account->getId());
        }
      }
    }
    // Affichage du form de depot d'argent
    require "view/activityAccountView.php";
  }

    public function creditAccount(){
      $accountManager = new accountManager();
      $id = intval($_GET["id"]);
      $account = $accountManager->get($id);
      $operation = "dépôt";

      if (isset($_POST) && !empty($_POST)) {
        $newSum = $account->getSum() + $_POST["amount"];
        $account->setSum($newSum);
        if ($accountManager->update($account)) {
          $transactionManager = new transactionManager();
          $transaction = new transaction($_POST);
          if ($transactionManager->add($transaction)) {
            redirectTo("myAccount?id=".$account->getId());
          }
        }
      }
      // Affichage du form de retrait d'argent
      require "view/activityAccountView.php";
    }

    public function transferAccount(){
      $operation = "virement";
      $accountManager = new accountManager();
      $id = intval($_GET["id"]);
      $account = $accountManager->get($id);


      if (isset($_POST) && !empty($_POST)) {
        //debit du compte N°1
        $newSum1 = $account->getSum() - $_POST["amount"];
        $account->setSum($newSum1);
        //credit du compte N°2
        $account2 = $accountManager->getNumber($_POST["idAccountTransfer"]);
        $newSum2 = $account2->getSum() + $_POST["amount"];
        $account2->setSum($newSum2);

        if ($accountManager->update($account2)) {
          if ($accountManager->update($account)) {
            $transactionManager = new transactionManager();
            $transaction = new transaction($_POST);
            if ($transactionManager->add($transaction)) {
              redirectTo("myAccount?id=".$account->getId());
            }
          }
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

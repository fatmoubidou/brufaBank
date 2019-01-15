<?php

/**
 * Class 
 */
 class accountManager extends manager
{
  public function getList(int $idUser){
    $accounts = [];
    $query = $this->_db->query('SELECT * FROM account where idUser = '.$idUser.' ORDER BY name');
    while ($result = $query->fetch(PDO::FETCH_ASSOC))
    {
      $accounts[] = new Account($result);
    }

    return $accounts;
  }

  public function add(Account $account){
    $query = $this->_db->prepare("insert into account (number, name, sum, idUser) values (:number, :name, :sum, :idUser)");
    $query->bindValue(':number', $account->getNumber());
    $query->bindValue(':name', $account->getName());
    $query->bindValue(':sum', $account->getSum());
    $query->bindValue(':idUser', $account->getIdUser(), PDO::PARAM_INT);
    $query->execute();
  }


}


 ?>

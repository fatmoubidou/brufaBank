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

  public function get(int $id){

    //$query = $this->_db->query('SELECT a.*, u.* FROM `account` a inner join user u on u.id = a.idUser WHERE a.id='.$id);
    $query = $this->_db->query('SELECT * FROM `account` WHERE id='.$id);
    $result =$query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
      $account = new Account($result);
    }

    return $account;
  }

  public function getNumber(int $number){

    //$query = $this->_db->query('SELECT a.*, u.* FROM `account` a inner join user u on u.id = a.idUser WHERE a.id='.$id);
    $query = $this->_db->query('SELECT * FROM `account` WHERE number='.$number);
    $result =$query->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
      $account = new Account($result);
    }

    return $account;
  }

  public function add(Account $account){
    $query = $this->_db->prepare("insert into account (number, name, sum, idUser) values (:number, :name, :sum, :idUser)");
    $query->bindValue(':number', $account->getNumber());
    $query->bindValue(':name', $account->getName());
    $query->bindValue(':sum', $account->getSum());
    $query->bindValue(':idUser', $account->getIdUser(), PDO::PARAM_INT);
    $query->execute();
  }

  public function update(Account $account){
    $query = $this->_db->prepare("update account set sum=:sum where id=:id");
    $query->bindValue(':id', $account->getId(), PDO::PARAM_INT);
    $query->bindValue(':sum', $account->getSum());
    $result = $query->execute();
    return $result;
  }

  public function delete(int $id){
    $query = $this->_db->query("delete from account where id = $id");
    //$query->bindValue(':id', $account->getId(),PDO::PARAM_INT);
    $result = $query->execute();
    return $result;
  }


}


 ?>

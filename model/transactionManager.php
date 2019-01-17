<?php

/**
 * Class
 */
 class transactionManager extends manager
{
  public function getList(int $idAccount){
    $transactions = [];
    $query = $this->_db->query('SELECT * FROM transaction where idAccount = '.$idAccount.' ORDER BY date');
    while ($result = $query->fetch(PDO::FETCH_ASSOC))
    {
      $transactions[] = new transaction($result);
    }

    return $transactions;
  }


  public function add(transaction $transaction){
    $query = $this->_db->prepare("insert into transaction (operation, name, amount, date, idAccount) values (:operation, :name, :amount, :date, :idAccount)");
    $query->bindValue(':operation', $transaction->getOperation());
    $query->bindValue(':name', $transaction->getName());
    $query->bindValue(':amount', $transaction->getAmount());
    $query->bindValue(':date', $transaction->getDate());
    $query->bindValue(':idAccount', $transaction->getIdAccount());
    $result = $query->execute();
    return $result;
  }



}


 ?>

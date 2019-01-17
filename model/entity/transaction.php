<?php

/**
 *
 */
class transaction extends entity
{
  protected $id;
  protected $operation;
  protected $name;
  protected $amount;
  protected $date;
  protected $idAccount;

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setIdAccount($idAccount) {
    $this->idAccount = $idAccount;
  }

  public function getIdAccount() {
    return $this->idAccount;
  }

  public function setOperation($operation) {
    $this->operation = $operation;
  }

  public function getOperation() {
    return $this->operation;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setAmount($amount) {
    $this->amount = $amount;
  }

  public function getAmount() {
    return $this->amount;
  }

  public function setDate($date) {
    $this->date = $date;
  }

  public function getDate() {
    return $this->date;
  }

  function __construct(array $data = null)
  {
    if ($data) {
      $this->hydrate($data);
      if ($this->getDate() == null) {
        $date = new DateTime();
        $result = $date->format('Y-m-d H:i:s');
        $this->setDate($result);
      }
    }
  }
}

 ?>

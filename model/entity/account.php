<?php

/**
 *
 */
class account extends entity
{
  protected $id;
  protected $number;
  protected $name;
  protected $sum;
  protected $idUser;

  const OVERDRAFT = 500;

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setIdUser($idUser) {
    $this->idUser = $idUser;
  }

  public function getIdUser() {
    return $this->idUser;
  }

  public function setNumber($number) {
    $this->number = $number;
  }

  public function getNumber() {
    return $this->number;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setSum($sum) {
    $this->sum = $sum;
  }

  public function getSum() {
    return $this->sum;
  }

  function __construct(array $data = null)
  {
    if ($data) {
      $this->hydrate($data);
    }
  }
}

 ?>

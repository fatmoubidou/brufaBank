<?php

class userManager extends manager {


  // fonction pour UN userManager
  public function getUser(user $user) {
    $query = $this->_db->prepare("SELECT * FROM user WHERE firstName =  ? and password = ?");
    $query->execute([$user->getFirstName(),$user->getPassword()]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
     if($result) {
      $user = new user($result);
    }
    return $user;
  }


  public function getUsers() {
    $query = $this->_db->query('SELECT * FROM user');
    $users = $query->fetchAll(PDO::FETCH_CLASS, "user");
    return $users;
  }


  //Fonction pour ajouter un user.
  public function addUser(user $user) {
    $query = $this->_db->prepare("INSERT INTO user(firstName, password, status, name, address) VALUES(:firstName, :password, :status, :name, :address)");
    $createUser = $query->execute([
      "firstName" => $user->getFirstName(),
      "password" => $user->getPassword(),
      "status" => $user->getStatus(),
      "name" => $user->getName(),
      "address" => $user->getAddress()
    ]);
    return $createUser;
  }

// fonction pour del un user
  // function delUser($id) {
  //     $query = $this->_db->prepare("DELETE FROM user WHERE id = :id");
  //     $del = $query->execute([$id->getId()]);
  //     $del->closeCursor();
  //     return $del;
  // }

    public function delUser(int $id){
    $query = $this->_db->query("DELETE FROM user WHERE id = $id");
    $del = $query->execute([$id->getId()]);
    $del->closeCursor();
    return $del;
  }


  //Fonction pour ajouter un accountUser.
  public function addAccount() {
    $query = $this->_db->prepare("INSERT INTO account(idUser, name, number, sum) VALUES(:idUser, :name, :number, :sum)");
    $createAccount = $query->execute([
      "idUser" => $account->getIdUser(),
      "name" => $account->getName(),
      "number" => $account->getNumber(),
      "sum" => $account->getSum()
    ]);
    return $createAccount;
  }


  // constructeur
  function __construct()
  {
    $this->setDb(dataBase::BD());
  }

}


 ?>

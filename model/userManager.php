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
    //Si on souhaite récupérer directement des objets
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }

  //Fonction pour ajouter un user.
  public function addUser(user $user) {
    $query = $this->_db->prepare("INSERT INTO user(firstName, password, status, name, address) VALUES(:firstName, :password, :status, :name, :address)");
    $result = $query->execute([
      "firstName" => $user->getFirstName(),
      "password" => $user->getPassword(),
      "status" => $user->getStatus(),
      "name" => $user->getName(),
      "address" => $user->getAddress()
    ]);
    return $result;
  }

  // constructeur
  function __construct()
  {
    $this->setDb(dataBase::BD());
  }

}


 ?>

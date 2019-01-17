<?php

  class user extends entity {

    protected $id;
    protected $firstName;
    protected $password;
    protected $status;
    protected $name;
    protected $address;

// set user
    public function setFirstName(string $firstName) {
      $this->firstName = $firstName;
    }
    public function setPassword(string $password) {
      $this->password = $password;
    }
    public function setStatus(string $status) {
      $this->status = $status;
    }
    public function setName(string $name) {
      $this->name = $name;
    }
    public function setAddress(string $address) {
      $this->address = $address;
    }

    // get user
    public function getFirstName() {
      return $this->firstName;
    }
    public function getPassword() {
      return $this->password;
    }
    public function getStatus() {
      return $this->status;
    }
    public function getName() {
      return $this->name;
    }
    public function getAddress() {
      return $this->address;
    }

    // constructeur
    function __construct(array $data = null)
    {
      if($data) {
        $this->hydrate($data);
      }
    }


  }

 ?>

<?php

/**
 *
 */
class user extends entity
{
  protected $status;

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getStatus() {
    return $this->status;
  }

  function __construct()
  {

  }
}

 ?>

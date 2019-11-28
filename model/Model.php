<?php

/**
 *
 */
class Model
{

  protected $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=lol_db;charset=utf8'
    , 'root', '');
  }

}



 ?>

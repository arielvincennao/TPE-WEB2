<?php

require_once "Model.php";

class LoginModel extends Model
{

  function getUser($usermail){
    $sentence = $this->db->prepare("select * from users where email=? limit 1");
    $sentence->execute(array($usermail));

    return $sentence->fetch(PDO::FETCH_ASSOC);
  }
  function EmailCheck($usermail){
    $sentence = $this->db->prepare("SELECT * FROM users WHERE email LIKE ?");
    $sentence->execute(array($usermail));
    return $sentence->fetch(PDO::FETCH_ASSOC);
  }
  function addUser($usermail, $password){
    $clearance = 'member';
    $sentence = $this->db->prepare("INSERT INTO users(email, password, clearance) VALUES(?,?,?)");
    $sentence->execute(array($usermail, $password, $clearance));
    $lastId = $this->db->lastInsertId();
    return $this->getUser($lastId);

  }
}
 ?>

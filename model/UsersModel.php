<?php

require_once "Model.php";

class UsersModel extends Model
{

  function GetUsers(){
      $sentence = $this->db->prepare( "select * from users");
      $sentence->execute();
      return $sentence->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUser($id){
      $sentence = $this->db->prepare( "select * from users where id=?");
      $sentence->execute(array($id));
      return $sentence->fetch(PDO::FETCH_ASSOC);
  }

  function DeleteUser($id){
    $sentence = $this->db->prepare( "delete from users where id=?");
    $sentence->execute(array($id));
  }

  function RegularUser($id){
    $clearance = 'member';
    $sentence = $this->db->prepare("UPDATE users SET clearance=? WHERE id=?");
    $sentence->execute(array($clearance,$id));
  }

  function AdminUser($id){
    $clearance = 'admin';
    $sentence = $this->db->prepare("UPDATE users SET clearance=? WHERE id=?");
    $sentence->execute(array($clearance,$id));
  }
}


 ?>

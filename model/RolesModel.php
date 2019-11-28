<?php

require_once "Model.php";

class RolesModel extends Model
{

  function GetRoles(){
      $sentence = $this->db->prepare( "select * from roles");
      $sentence->execute();
      return $sentence->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetRole($id){
      $sentence = $this->db->prepare( "select * from roles where id_role=?");
      $sentence->execute(array($id));
      return $sentence->fetch(PDO::FETCH_ASSOC);
  }

  function InsertRole($name){
    $sentence = $this->db->prepare("INSERT INTO roles(name) VALUES(?)");
    $sentence->execute(array($name));
  }

  function DeleteRole($id){
    $sentence = $this->db->prepare( "delete from roles where id_role=?");
    $sentence->execute(array($id));
  }

  function SaveEditRole($name,$id){
    $sentence = $this->db->prepare("UPDATE roles SET id_role= ?, name = ? WHERE id_role=?");
    $sentence->execute(array($id,$name,$id));
  }
}


 ?>

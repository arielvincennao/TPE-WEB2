<?php

require_once "Model.php";

class CharsModel extends Model
{

  function GetChars(){
    $chars = array();
    $sentence = $this->db->prepare( "select * from chars where 1");
    $sentence->execute();
    while($char = $sentence->fetch()){
      $rolesentence = $this->db->prepare("select * from roles where id_role=?");
      $rolesentence->execute(array($char['id_role']));
      $roles = $rolesentence->fetchAll();
      $char['role'] = $roles;
      $chars[] = $char;
    }
    return $chars;
  }

  function GetChar($id){
    $result = array();
    $sentence = $this->db->prepare( "select * from chars where id_char=?");
    $sentence->execute(array($id));
    $char=$sentence->fetch(PDO::FETCH_ASSOC);

    $charrole = $char['id_role'];
    $rolesentence = $this->db->prepare("select * from roles where id_role=?");
    $rolesentence->execute(array($charrole));
    $role = $rolesentence->fetch(PDO::FETCH_ASSOC);

    array_push($result, $char, $role);

  return $result;
  }
  function InsertChar($name,$description,$role){

    $sentence = $this->db->prepare("INSERT INTO chars(name, description, id_role) VALUES(?,?,?)");
    $sentence->execute(array($name,$description,$role));
  }

  function DeleteChar($id){

    $sentence = $this->db->prepare( "delete from chars where id_char=?");
    $sentence->execute(array($id));
  }

  function SaveEditChar($id,$name,$description,$role){
    $sentence = $this->db->prepare("UPDATE chars SET name = ?, description = ?, id_role = ? WHERE id_char=?");
    $sentence->execute(array($name,$description,$role,$id));
  }

  function GetCharsByRole($id){
      $result = array();
      $sentence = $this->db->prepare( "select * from chars where id_role=?");
      $sentence->execute(array($id));

      $role = $this->db->prepare("select * from roles where id_role=?");
      $role->execute(array($id));


      array_push($result, $sentence->fetchAll(PDO::FETCH_ASSOC)
                        , $role->fetch(PDO::FETCH_ASSOC));

    return $result;
  }
}


 ?>

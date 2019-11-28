<?php

require_once "Model.php";

class CommentsModel extends Model
{


  function GetComments(){
      $sentence = $this->db->prepare( "select * from comments");
      $sentence->execute();
      return $sentence->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetComment($id_char, $order){
      $sentence = $this->db->prepare( "select * from comments where id_char like ? ORDER BY rating $order");
      $sentence->execute(array($id_char));
      return $sentence->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertComment($rating,$content,$id_char){
    $sentence = $this->db->prepare("INSERT INTO comments(rating, content, id_char)VALUES(?,?,?)");
    $sentence->execute(array($rating,$content,$id_char));
  }

  function DeleteComment($id){
    $sentence = $this->db->prepare( "delete from comments where id_comment=?");
    $sentence->execute(array($id));
  }
}


 ?>

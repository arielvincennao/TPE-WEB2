<?php

require_once "Model.php";

class ImagesModel extends Model
{

  function GetImages($id_char){
    $sentence = $this->db->prepare("select * from images where id_char=?");
    $sentence->execute(array($id_char));
    return $sentence->fetchAll(PDO::FETCH_ASSOC);
  }
  function DeleteImage($id){
    $sentence = $this->db->prepare("delete from images where id_img=?");
    $sentence->execute(array($id));
    return $sentence->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertImages($id_char, $img_path){
   $sentencia = $this->db->prepare("INSERT INTO images(id_char, img_path) VALUES(?,?)");
   $sentencia->execute(array($id_char, $img_path));
 }
}


 ?>

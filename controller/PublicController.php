<?php

require_once  "./model/CharsModel.php";
require_once  "./model/RolesModel.php";
require_once  "./view/PublicView.php";
require_once  "./model/ImagesModel.php";
require_once  "SecuredController.php";

class PublicController extends SecuredController{

  private $view;
  private $model_chars;
  private $model_roles;
  private $model_images;
  private $Title;

  function __construct(){
    parent::__construct();
    $this->view = new PublicView();
    $this->model_chars = new CharsModel();
    $this->model_roles = new RolesModel();
    $this->model_images = new ImagesModel();
  }

  function GetChar($param){
    $id = $param[0];

    $Char = $this->model_chars->GetChar($id);
    $Roles = $this->model_roles->GetRoles();
    $Images = $this->model_images->GetImages($id);

    $this->view->DetailsChar($this->Title, $Char, $Roles, $this->adminstatus, $Images);
  }

  function GetChars(){
    $this->Title = "Usuarios";
    $Chars = $this->model_chars->GetChars();
    $Roles = $this->model_roles->GetRoles();
    $this->view->GetChars($this->Title, $Chars, $Roles);
  }

  function GetCharsByRole($param){
    $this->Title = "Usuarios por Rol";
    $id = $param[0];

    $Chars = $this->model_chars->GetCharsByRole($id);
    $Roles = $this->model_roles->GetRoles();
    $this->view->GetCharsByRole($this->Title, $Chars, $Roles);
  }
  function Filter(){
    $this->Title = "Usuarios por Rol";
    $id = $_POST['roleSelect'];

    $Chars = $this->model_chars->GetCharsByRole($id);
    $Roles = $this->model_roles->GetRoles();
    $this->view->GetCharsByRole($this->Title, $Chars, $Roles);
  }

  function GetRoles(){
    $this->Title = "Roles";
    $Roles = $this->model_roles->GetRoles();
    $this->view->GetRoles($this->Title,$Roles);
  }

  function UploadImage($param = null){
    if ($this->adminstatus === "admin") {
      $id_char = $param[0];
      $temp_path = $_FILES['images']['tmp_name'];
      $this->AddImages($id_char, $temp_path);
      $this->GetChar($id_char);
    }
    else {
      header(USUARIOS);
    }

  }
  function AddImages($id_char, $temp_path){
    for($i = 0; $i<count($temp_path); $i++){
      $img_path = $this->GetPath($temp_path[$i]);
      $this->model_images->InsertImages($id_char, $img_path);
    }
  }

  function GetPath($temp_path){
    $url = 'img/uploaded/'.uniqid().'.jpg';
    move_uploaded_file($temp_path, $url);
    return $url;
  }

  function DeleteImage($params = null){
    if ($this->adminstatus === "admin") {
      $id_img = $params[1];
      $id_char = $params[0];
      $this->model_images->DeleteImage($id_img);
      $this->GetChar($id_char);
    }
    else {
      header(USUARIOS);
    }
  }

}



 ?>

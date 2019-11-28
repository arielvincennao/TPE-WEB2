<?php

require_once  "./view/CharsView.php";
require_once  "./model/CharsModel.php";
require_once  "./model/RolesModel.php";
require_once "SecuredController.php";

class CharsController  extends SecuredController{
  private $view;
  private $model_chars;
  private $Title;
  private $model_roles;

  function __construct()
  {
    parent::__construct();
    $this->view = new CharsView();
    $this->model_chars = new CharsModel();
    $this->model_roles = new RolesModel();
    $this->Title = "USUARIOS";
  }

  function EditChar($param){
    $id = $param[0];

    $Char = $this->model_chars->GetChar($id);
    $Roles = $this->model_roles->GetRoles();
    $this->view->EditChar("Editar Usuario", $Char, $Roles);
  }

  function InsertChar(){
    $name = $_POST["nameForm"];
    $description = $_POST["descriptionForm"];
    $role = $_POST["roleForm"];

    $this->model_chars->InsertChar($name,$description,$role);

    header(DASHBOARD);
  }

  function SaveEditChar(){
    $id = $_POST["charidForm"];
    $name = $_POST["charnameForm"];
    $description = $_POST["chardescriptionForm"];
    $role = $_POST["charroleForm"];

    $this->model_chars->SaveEditChar($id,$name,$description,$role);

    header(DASHBOARD);
  }

  function DeleteChar($param){
    $this->model_chars->DeleteChar($param[0]);
    header(DASHBOARD);
  }



}

 ?>

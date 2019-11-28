<?php

require_once  "./view/RolesView.php";
require_once "SecuredController.php";

class RolesController extends SecuredController{
  private $view;
  private $model;
  private $Title;

  function __construct()
  {
    parent::__construct();
    $this->model = new RolesModel();
    $this->view = new RolesView();
    $this->Title = "ROLES";
  }

  function EditRole($param){
      $id = $param[0];
      $Role = $this->model->GetRole($id);
      $this->view->EditRole("Editar Rol", $Role);
    }

  function InsertRole(){
    $name = $_POST["newroleForm"];
    $this->model->InsertRole($name);

    header(DASHBOARD);
  }

  function SaveEditRole(){
    $id = $_POST["roleidForm"];
    $name = $_POST["rolenameForm"];
    $this->model->SaveEditRole($name,$id);

    header(DASHBOARD);
  }

  function DeleteRole($param){
    $this->model->DeleteRole($param[0]);
    header(DASHBOARD);
  }
}



 ?>

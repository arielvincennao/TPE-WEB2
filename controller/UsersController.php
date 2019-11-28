<?php

require_once "SecuredController.php";

class UsersController extends SecuredController{
  private $model;
  private $Title;

  function __construct()
  {
    parent::__construct();
    $this->model = new UsersModel();
    $this->Title = "USERS";
  }

  function AdminUser($param = null){
    if (isset($param[0])) {
      $id = $param[0];
      $User = $this->model->GetUser($id);
      $this->model->AdminUser($id);
    }
      header(DASHBOARD);
    }

  function RegularUser($param){
      $id = $param[0];
      $User = $this->model->GetUser($id);
      if ($User['email'] != $_SESSION["USER"][0]) {
        $this->model->RegularUser($id);
      }
      header(DASHBOARD);
    }

  function DeleteUser($param){
    $id = $param[0];
    $User = $this->model->GetUser($id);
    if ($User['email'] != $_SESSION["USER"][0]) {
      $this->model->DeleteUser($id);
    }
    header(DASHBOARD);
  }

}

 ?>
